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
        $arrayNumber = [];
        while(count($arrayNumber) < 15){
            $number = rand(1, 100);
            if(!in_array($number, $arrayNumber)){
                $arrayNumber[] = $number;
            }
        };
       
    ?>
    
    <p><?php echo var_dump($arrayNumber) ?></p>

</body>
</html>