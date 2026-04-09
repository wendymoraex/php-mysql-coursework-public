<!--  LinearEquation.php  -->

<center>
<font color=blue>
<?php
	/* 
		title comments
	*/


	$a = $_POST['aVar'];
	$b = $_POST['bVar'];

// debugging	
//	print "a = $a, b = $b<P>";

	if($a == 0)
	{
		print "No real root.";
	}
	else
	{
		$x = -$b/$a;

		$x = number_format($x, 2);

		print "Root: $x";
	}
?>
</font>
</center>
