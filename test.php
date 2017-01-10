<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
		
		function giaithua($n)
		{
			if ($n==0) {
				return 1;
			} else {
				return $n*giaithua($n-1);
			}
		}
	 ?>
	<?php
		$n=5;
		if ($n!=5) {
			echo "$n! = " .giaithua($n)."<br>";
		}
		else{
			for ($n=0; $n < 10; $n++) { 
				echo "$n ! = " .giaithua($n). "<br>";
			}
		}
		/*for ($n=0; $n < 10; $n++) { 
			echo "$n ! = " .giaithua($n). "<br>";
		}

		$n = array(0,1,2,3,4,5,6,7,8,9);
		foreach ($n as $key => $value) {
			echo "$key ! = " .giaithua($value). "<br>";
		}*/
	 ?>
</body>
</html>