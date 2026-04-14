<!--  exam.php  -->
<font color=true>
<center>
<?php
	$a1 = $_POST['q1'];  //  1 , 2
	$a2 = $_POST['q2'];  // "t", "f"
	$a3 = $_POST['q3'];	// 6 7 8

	$score = 0;

// DEBUG
print ("Q1 answer: $a1. <P>");
print ("Q2 answer: $a2. <P> \n");
print ("Q3 answer: $a3. <P> <HR>");

	if($a1 == t)
	{
		$score += 30;
		print "Answer right for Q1!<P>";
	}
	else
	{
		print "Wrong answer for Q1! The answer should be 'true'<P>";
	}
	if($a2 == "t")
		print "Wrong answer for Q2! The answer should be false <p>";
	else
	{
		$score += 30;
		 print "Answer right for Q2!<P>";
	}
	// add the 3rd
	if($a3 == 3)
	{
		$score += 40;
		print "Answer right for Q3 <P>";
	}
	else
		print "Wrong for Q3. The right answer is 8<P>"; 


	print "<P>Total score: $score%";


?>
<!-- add a link for going back the form -->
<HR>
<A HREF=webPage2.html> Back to Form </A> |
<A HREF=index.html> Course Home </A>
</center>
