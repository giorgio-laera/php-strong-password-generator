<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ciao</h1>
    <?php 
         $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
         var_dump("alfabeto ".$alphabet[1]);
         $pass = array();
         var_dump($pass);
        $alphaLength = strlen($alphabet) - 1;
        var_dump($alphaLength);
        
        for ($i = 0; $i < 6; $i++){
            $n= rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }; 

        var_dump( implode($pass));

        
    ?>
</body>
</html>