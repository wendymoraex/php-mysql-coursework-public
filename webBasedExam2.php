<!-- assignment 3

        File name: webBasedExam2.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 01, 2026
-->

<?php	session_start();

	$pass = $_POST['pwd'];

	$_SESSION['pwd'] = $pass;
	if($pass != "password")
		print "<CENTER>Incorrect password. Try again!</CENTER><BR>";
	else
	{
?>
<CENTER>
<H2> Welcome to the Web Based Exam!</H2>
<HR>
<H3>Let's begin...</H3>
<FORM action=webBasedExam3.php method=post>
	1. What arithmatic operator is this "%" ? <BR>
	<INPUT type=radio name=q1 value=a>A) Modulus <BR>
	<INPUT type=radio name=q1 value=b>B) Addition <BR>
	<INPUT type=radio name=q1 value=c>C) Division <BR>
	<INPUT type=radio name=q1 value=d>D) Multiplication <BR>
<P>
	2. What is 7 + (6 + 11) * 2 ? <BR>
	<INPUT type=radio name=q2 value=a>A) 40 <BR>
	<INPUT type=radio name=q2 value=b>B) 41 <BR>
	<INPUT type=radio name=q2 value=c>C) 42 <BR>
	<INPUT type=radio name=q2 value=d>D) 43 <BR>
<P>
	3. What is 20 / ( 2 - 4) ? <BR>
	<INPUT type=radio name=q3 value=a>A) 10  <BR>
	<INPUT type=radio name=q3 value=b>B) -5 <BR>
	<INPUT type=radio name=q3 value=c>C) -10 <BR>
	<INPUT type=radio name=q3 value=d>D) 5 <BR>
<P>
	4. The formula "A = π x r^2" is used to calculate: <BR>
	<INPUT type=radio name=q4 value=a>A) The area of a semicircle <BR>
	<INPUT type=radio name=q4 value=b>B) The diameter of a circle <BR>
	<INPUT type=radio name=q4 value=c>C) The radius of a circle <BR>
	<INPUT type=radio name=q4 value=d>D) The area of a circle <BR>
<HR>
	<INPUT type=submit value="Submit Form">
	<INPUT type=reset value="Reset Form">
</FORM>
</CENTER>
<?php
	}
?>
<hr>
<CENTER>
<A HREF=webBasedExam.html><button type=button>Back</button></A>
</CENTER>
