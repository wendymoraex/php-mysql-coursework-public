<!-- assignment 3

        File name: webBasedExam3.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 01, 2026
-->

<?php session_start();

	$pass = $_SESSION['pwd'];

	 $_SESSION['pwd'] = $pass;
        if($pass != "password")
                print "<CENTER>Incorrect password. Try again!</CENTER><BR>";
        else
	{
?>
<center>
<hr>
<h2> Here is the results: </h2>
<hr>
<?php
     	$a1 = $_POST['q1'];
        $a2 = $_POST['q2'];
        $a3 = $_POST['q3'];

        $score = 0;

        if($a1 == 'a')
        {
                $score += 25;
                print "Correct!<P>";
        }
	else {
              	print "Wrong answer for Q1! The answer is modulus.<P>";
        }
	if($a2 == 'b'){
                $score += 25;
                print "Correct!<p>";
        }
        else {
                 print "Mhmmm... wrong for Q2! The right answer is 41.<P>";
        }
	if($a3 == 'c'){
                $score += 25;
                print "Correct!<p>";
        }
	else {
              	print "Wrong answer for Q3! The right answer is -10.<p>";
        }
	if($a4 == 'd'){
                $score += 25;
                print "Correct!<p>";
        }
	else {
              	print "Wrong answer for Q4! The formula is used to calculate the area of a circle.<p>";
        }

	print "<hr><P>Your total score is: $score%";
?>
<hr>
<A HREF=webBasedExam.html><button type=button>Back</button></A>
</center>

<?php
	}
?>

