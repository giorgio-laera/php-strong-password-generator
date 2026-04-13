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
    function passGenerator ($lenghtPass){
         $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
         $pass = array();
        $alphaLength = strlen($alphabet) - 1;

        
        for ($i = 0; $i < $lenghtPass; $i++){
            $n= rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }; 

        return implode($pass);
    };
    echo passGenerator();
    ?>
</body>
</html>