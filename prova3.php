<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 1</title>
</head>
  <body>
     <?php echo '<p>Hello World</p>'; ?> 
    <div> Suma de todos los numeros del 1 al 10: 
    <?php
    $sum = 0;
    for($i = 1; $i<=10; $i++) {
      $sum = $sum + $i;
    }
    echo $sum;    
    ?>
    </div>
  </body>
</html>
