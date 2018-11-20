
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link href="style/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet"> 
	<link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet" type="text/css">
	<link href="jquery-ui.css" rel="stylesheet" type="text/css">

	<title>PHP-y-y-y-y</title>
</head>

<body>
	<style>
	h1{
		color: orange;
	}
</style>

<?php

?>
<?php
if ($a == 5):
	echo "a равно 5";
	echo "...";
elseif ($a == 6):
	echo "a равно 6";
	echo "!!!";
else:
	echo "a не равно ни 5 ни 6";
endif;
?>

<?php
echo "<br/>";
$a = 5;
$b = 5;
if ($a > $b){
	echo "a больше b";
}
else{
	echo "<h1>a меньше b</h1>";
}
echo "<br/>";
$e3 = 4;
$d3 = 4;
if ($a3 > $b3) {
	echo "a больше, чем b";
} elseif ($a3 == $b3) {
	echo "a равен b";
} else {
	echo "a меньше, чем b";
}
?>



<?php
echo "<br/>";
$i = 1;
while ($i <= 10) {
	echo $i++;
}
?>

<?php
echo "<br/>";
for ($i = 90; $i <= 100; $i++) {
	echo "<br/>";
	echo $i;
}
?>

<?php
echo "<br/>";
$i = 1;
do {
	echo "<br/>";
	echo $i;
	$i++;
} while ($i <= 10);

?>

<?php
$arr = array(1,2,3,4,5,6,7,8,9,10);
echo "<br/>";
foreach ($arr as &$value) {
	echo "<br/>";
	echo $value;
}
?>

<?php
$i = 1991;
while ($i <= 1991) {?>
	<div style="width: 100px; height: 60px; background-color: red; color: white;"><h2>&#9773;</h2></div>
	<?php echo $i;?>

	<?php
	$i++;
}?>


<?php
$arr = array(41, 22, 46, 7, 0, -2, -3, 41, 0, 0, -17, -1);

$kol = count($arr);

$min = $max = $arr[0]; 
$index_min = $index_max = 0; 

for ($i = 1; $i < $kol; $i++) { 
	if ($arr[$i] > $max) { 
		$index_max = $i; 
		$max = $arr[$i]; 
	} else 
	if ($arr[$i] < $min) { 
		$index_min = $i; 
		$min = $arr[$i]; 
	} 
} 

echo "<br/>";
echo "<br/>";


echo "Максимальное число = $max<br>"; 
echo "Минимальное число = $min<br>"; 

?>

<?php 

$arr = array(41, 22, 46, 7, 0, -2, -3, 41, 0, 0,  -17, -1);

$kol = count($arr);


$index_o = 0; 

for ($i = 0; $i < $kol; $i++) { 
	if ($arr[$i] >0) { 
		
		$index_o = $index_o+$arr[$i];
		 
	}
} 

echo "<br/>";

echo "Сумма положительных чисел = $index_o  ";

?>
<?php 
echo "<br/>";
for ($i=0; $i<9; $i++) { 
	echo "<br/>";
 	for ($j=0; $j<6; $j++){
 		echo $mas[i][j] = rand (15,35)." | ";
 						  }				  
 					} 	
 ?>


<?php 
echo "<br/>";
for ($i=0; $i<9; $i++) { 
	echo "<br/>";
 	for ($j=0; $j<6; $j++){
 		echo $mas[i][j] = rand (15,35)." | ";
 		if ($i==2){
 			$sklad = $sklad+$mas[i][j];
 			      }
 						  }
 					   }	
 		echo "<br/>";			  
 		echo $sklad;			

?>














<!-- 
<?php 
echo "<br/>";
for ($i=0; $i<10; $i++) { 
	echo "<br/>";
 	for ($j=0; $j<10; $j++){
 		echo $mas[i][j] = rand (0,0)." | ";
 						  }
 					} 
 	echo $toch1 [5][9] = 1;
 ?> -->









<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script type="text/javascript" src="jquery-ui.js"></script>
<script src="js/script.js"></script> 
</body>
</html>

