<!-- Assigment 1

        File name: quadEquation.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due Date: Feb, 15 2026

-->

<CENTER>
<h3>
<hr>
<?PHP
	$a = $_POST['valA'];
	$b = $_POST['valB'];
	$c = $_POST['valC'];

	$a = floatval($a);
	$b = floatval($b);
	$c = floatval($c);

	$d = $b*$b - 4*$a*$c;

	if($d < 0)
		print "No real root solution.";
	else if ($d == 0){

		$x = -$b/(2*$a);
		$x = number_format($x, 2);
		print "The soluton is: $x<br>";
	}

	else {
		$x1 = (-$b + sqrt($d))/(2.0 * $a);
		$x2 = (-$b - sqrt($d))/(2.0 * $a);

		$x2 = number_format($x2, 2);
		$x1 = number_format($x1, 2);

		print "The solution 1 is: $x1<br>";
		print "The solution 2 is: $x2<br>";

	}
?>
<hr>
</h3>
<A HREF=quadEquation.html><button type=button>Back</button></A>
</CENTER>
