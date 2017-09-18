<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>MutiTable</title>
</head>
<body>

<?php
	echo "------------- <br>";
	for($a=2;$a<=9;$a++){
		for($b=1;$b<=9;$b++){
			$c=$a*$b;
			echo "$a x $b = $c <br>";
		}
		echo "------------- <br>";
	}
?>


</body>
</html>