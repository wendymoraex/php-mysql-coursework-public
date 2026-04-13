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

	require_once '../config.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$query = "update STUDENT set ID=$newid where ID=$ID";

	$result_id = mysqli_query($conn, $query);

	if($result_id)
	{		
		print "Successful.<p>";
	}
	else
		print "Fail.<p>";
	mysqli_close($conn);

	include ("display.php");
?>

</CENTER>
