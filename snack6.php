<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    
<?php
 /* Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */
 $db = [
     'teachers' => [
         [
             'name' => 'Michele',
             'lastname' => 'Papagni'
         ],
         [
             'name' => 'Fabio',
             'lastname' => 'Forghieri'
         ]
     ],
     'pm' => [
         [
             'name' => 'Roberto',
             'lastname' => 'Marazzini'
         ],
         [
             'name' => 'Federico',
             'lastname' => 'Pellegrini'
         ]
     ]
 ];

?>
<div class="container">

 <div class="grey">
 <h1>Teachers:</h1>
    <ul>
        <?php foreach($db['teachers'] as $teacher){ ?>
        <li>nome: <?php echo $teacher['name'] ?></li>
        <li>cognome: <?php echo $teacher['lastname'] ?></li>
        <?php } ?>
    </ul>
 </div>

 <div class="green">
 <h1>PM:</h1>
    <ul>
        <?php foreach($db['pm'] as $pm){ ?>

        <li>nome: <?php echo $pm['name'] ?></li>
        <li>cognome: <?php echo $pm['lastname'] ?></li>
        
        <?php } ?>
    </ul>
 </div>
 
 </div>


</body>
</html>