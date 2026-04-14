<?php	session_start();	?>

<CENTER>
<FONT color=blue size=4>
Caculator
<HR>
<?php
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$_SESSION['v1'] = $n1;
	$_SESSION['v2'] = $n2;
	
print "DEBUG: <P>";
	print "Num1 is: $n1<p>";
	print "Num2 is: $n2<p> ";
?>
<HR>

<FORM action=calculatorAction2.php method=post>
Choose operation: <BR>
+ <INPUT type=radio name=op value=+  checked> <BR>
- <INPUT type=radio name=op value=-> <BR>
* <INPUT type=radio name=op value=*> <BR>
/ <INPUT type=radio name=op value=/> <BR>
^ <INPUT type=radio name=op value=^> <BR>

<P>
<INPUT type=submit value=Submit>
<INPUT type=reset value=Reset>
</Form>
</FONT>
</CENTER>	
