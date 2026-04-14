<!--  exam.php  -->
<font color=true>
<center>
<?php
	$a1 = $_POST['q1'];  //  1 , 2
	$a2 = $_POST['q2'];  // "t", "f"
	$score = 0;

// DEBUG
print ("Q1 answer: $a1. <P>");
print ("Q2 answer: $a2. <P> <HR>");



	if($a1 == t)
	{
		$score += 50;
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
		$score += 50;
		 print "Answer right for Q2!<P>";
	}
	print "<P>Total score: $score%";


?>
</center>
</font

<!-- add a link for going back the form -->
<HR>
<A HREF=exam.html> Back to Form </A> |
<A HREF=index.html> Course Home </A>
