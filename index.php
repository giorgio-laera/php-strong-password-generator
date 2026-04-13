
    <?php 
    function passGenerator ($lengthPass){
         $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
         $pass = array();
        $alphaLength = strlen($alphabet) - 1;

        
        for ($i = 0; $i < $lengthPass; $i++){
            $n= rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }; 

        return implode($pass);
    };
    ?>

    <?php 
    $lengthPass=0;
    if(isset($lengthPass)){
      $lengthPass=$_GET['lengthPass'];
    };
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="ms-4">
    <h1>Generatore di password</h1>
<form  action="">
    
    <div class="form-constrol">
        <input type="number" id="lengthPass" name="lengthPass">
    </div>
    <button class="mt-4 btn btn-primary">Genera</button>
</form>

    <?php 
 
    echo passGenerator($lengthPass);
    ?>
</body>
</html>