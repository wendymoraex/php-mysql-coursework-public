<!-- assignment 6
        File name: evalPageAction.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: April 12, 2026
-->

<center>
<?php

	$STATUS = $_POST['status'];
	$COURSE = $_POST['course'];
	$SCORE = $_POST['score'];

	$host = 'localhost';
	$user = 'wmoraes';
	$passwd = 'CS389';
	$database = $user;

	$connect = mysqli_connect($host, $user, $passwd);
	$query = "insert into EVALUATION values
			('$STATUS', '$COURSE', '$SCORE')";

	mysqli_select_db($connect, $database);

	if(mysqli_query($connect, $query))
	{
		include ("displayTable.php");
		print "<P>Thank you for evaluating the course!<P>";
 	}
	else
		print "<P>Unsuccessful attempt. Try again.<p>";
	mysqli_close($connect);
?>
<HR>
<P>
<A HREF=index.html> Home </A> | <A HREF=courseEvaluation.html> Back to Form </A>
</center>
