<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
/* Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. */
    $students = [
        [
             'name' => 'Mario',
             'lastname' => 'Rossi',
             'votes' => [4,6,8,5,6,6]
        ],
        [
            'name' => 'Andrea',
            'lastname' => 'Gialli',
            'votes' => [5,8,7,9,5,6]
        ],
        [
            'name' => 'Giovanni',
            'lastname' => 'Neri',
            'votes' => [4,5,6,8,5,4]
        ],
        [
            'name' => 'Francesco',
            'lastname' => 'Bianchi',
            'votes' => [3,7,5,6,4,4]
        ],
        [
            'name' => 'Simone',
            'lastname' => 'Verdi',
            'votes' => [7,8,9,8,9,7]
        ],
        
    ]

?>

<ul>

        <?php foreach($students as $student){ ?>
            <li>nome: <?php echo $student['name'] ?></li>
            <li>cognome: <?php echo $student['lastname'] ?></li>
            <li>media voti: <?php echo (array_sum($student['votes'])/count($student['votes'])) ?></li>
            <br>
        <?php } ?>
</ul>


</body>
</html>