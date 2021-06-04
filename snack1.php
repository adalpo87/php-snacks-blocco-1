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
        $partite = [
            [
            "Home" => "Olimpia Milano",
            "Guests" => "Cantù",
            "Point_team1" => "100",
            "Point_team2" => "90"
            ],
            [
            "Home" => "Olimpia Milano",
            "Guests" => "Cantù",
            "Point_team1" => "82",
            "Point_team2" => "95"
            ]
        
        ];
    ?>
    <ul>
        <?php foreach($partite as $partita){?>
            <li><?php echo $partita["Home"]?> - <?php echo $partita["Guests"]?> | <?php echo $partita["Point_team1"]?> : <?php echo $partita["Point_team2"]?></li>
        <?php }?>
    </ul>
</body>
</html>