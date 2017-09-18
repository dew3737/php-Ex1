<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>Array</title>
</head>
<body>

<?php
	$eng_score=array(87,76,98,87,87,93,79,85,88,63,74,84,93,89,63,99,81,70,80,95);
	$sum=0;
	
	for($a=0;$a<20;$a++){
		$sum=$sum+$eng_score[$a];
	}

	$avg=$sum/20;

	echo "eng score";
	for($a=0;$a<20;$a++)
	echo $eng_score[$a]." ";

	echo "<br>";

	echo("sum : $sum, avg : $avg");	
?>


</body>
</html>