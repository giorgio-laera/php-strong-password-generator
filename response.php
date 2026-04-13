 <?php 
   require 'function.php';
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
    <title>Document</title>
 </head>
 <body>
    <h1>Ecco la tua password personalizzata</h1>
     <?php 
 
    echo passGenerator($lengthPass);
    ?>
 </body>
 </html>