 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">

 	<link href="css/style.css" rel="stylesheet" type="text/css">

 	<title>TestPHP</title>

 </head>

 <body>


<?php

$a = 1;

$b = 2;

if ($a < $b){

echo "<div class=b1>Условие ВЕРНО и я вывелся</div>";

}

else{

 echo "<div class=b2>Условие НЕВЕРНО и я вывелся</div>";

}

?>


<?php
 function gg(){
   echo "<div class = b3> g найдена, блок выведен </div>";
 }
  
  if (isset($_GET['g'])) {
      gg();
  }
?>

<div class="b4">
<a href='index.php?g=true'>Тыкай ;)</a>
</div>


<a href='../index2.php'>index2</a>


</body>