<!-- assignment 2

        File name: assignment2.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: Feb 22, 2026
-->

<center>
<hr>
<h2>Here is the trivia results: </h2>
<hr>
<?php
	$a1 = $_POST['q1'];
	$a2 = $_POST['q2'];
	$a3 = $_POST['q3'];
	$a4 = $_POST['q4'];

	$score = 0;

	if($a1 == 'a')
	{
		$score += 25;
		print "You are right!! Chandler's middle name is Muriel !<P>";
	}
	else {
		print "Wrong answer for Q1! The answer is 'Muriel'<P>";
	}
	if($a2 == 'b'){
		$score += 25;
		print "You are right! Phoebe's fake name is indeed Regiona Phalange! <p>";
	}
	else {
		 print "Mhmmm... wrong for Q2! Phoebe's fake name is Regina Phalange.<P>";
	}
	if($a3 == 'c'){
		$score += 25;
		print "YES! Rachel's letter was 18 pages long. THAT IS MADNESS.<p>";
	}
	else {
		print "Wrong answer for Q3! Rachel's letter was 18 pages long.<p>";
	}
	if($a4 == 'd'){
		$score += 25;
		print "Right!! Rachel Green in fact Monica's childhood friend.<p>";
	}
	else {
		print "WRONG! The right answer is Rachel Green.<p>";
	}

	print "<hr><P>Your total score is: $score%";
?>
<hr>
<A HREF=assignment2.html><button type=button>Back</button></A>
</center>
