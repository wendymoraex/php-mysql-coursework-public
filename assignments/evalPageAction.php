<!--
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

require_once '../config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
$query = "insert into EVALUATION values
	('$STATUS', '$COURSE', '$SCORE')";

if(mysqli_query($conn, $query))
	{
		include ("displayTable.php");
		print "<P>Thank you for evaluating the course!<P>";
 	}
	else
		print "<P>Unsuccessful attempt. Try again.<p>";
	mysqli_close($conn);
?>
<HR>
<P>
<A HREF=index.html> Home </A> | <A HREF=courseEvaluation.html> Back to Form </A>
</center>
