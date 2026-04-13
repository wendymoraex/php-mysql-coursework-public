<!-- 
	P.64 
	update.php 
-->

<CENTER>
<H2>Student Inormation Table</H2>
<P>
<HR>
<P>
<?php

	$ID = $_POST['id'];
	$newid = $_POST['newid'];

	$host = 'localhost';
	$user = "wmoraes";
	$passwd = "CS389";
	$database = "wmoraes";

	$connect = mysqli_connect($host, $user, $passwd, $database);
	$query = "update STUDENT set ID=$newid where ID=$ID";
	print "The query is <i> $query </i> ";

	$result_id = mysqli_query($connect, $query);

	if($result_id)
	{		
		print "Successful.<p>";
	}
	else
		print "Fail.<p>";
	mysqli_close($connect);

	include ("display.php");
?>

</CENTER>
