<!--
	p.48
	session3.php

-->

<?php	session_start();	

	// File:	session3.php
	// Show the result of calculation
?>

<FONT color=blue size=4>
<?php
	$op = $_POST['op'];	// "add", "sub", "mul", "div"
	$num1 = $_SESSION['v1'];  // value from 1st page
	$num2 = $_SESSION['v2']; 

print "DEBUG - <P>";
	print "The num1 is $num1<BR>"; 
	print "The num2 is $num2<BR>"; 
	print "The operator is $op <HR>";

	if($op == "+")
	{	$ans = $num1 + $num2;
		print "$num1 + $num2 = $ans";
	}
	else if($op == "-")
        {       $ans = $num1 - $num2;
                print "$num1 - $num2 = $ans";
        }
        else if($op == "*")
        {       $ans = $num1 * $num2;
                print "$num1 * $num2 = $ans";
        }
        else if($op == "/")
        {       $ans = $num1 / $num2;
                print "$num1 / $num2 = $ans";
        }
	else if($op == "^")
	{	$ans = pow($num1, $num2);
		print "$num1 ^ $num2 = $ans";
	}

?>
<HR>
<A HREF=calculator.html> Calculator </A> | <A HREF=index.html> Home </A>
</FONT>
