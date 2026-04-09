<!--  LinearEquation.php  -->

<center>
<font color=blue>
<?php
	$a = $_POST['aVar'];
	$b = $_POST['bVar'];

	if($a == 0) {
		print "No real root.";
	}
	else {
		
		$x = -$b/$a;
		$x = number_format($x, 2);
		
		print "Root: $x";
	}
?>
</font>
</center>
