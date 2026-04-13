<CENTER>
<?php
	// p.63 search.php

	$gender = $_POST['gender'];

	require_once '../config.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	$query = "select FIRSTNAME, LASTNAME from STUDENT where GENDER='$gender' ";

	$result_id = mysqli_query($conn, $query);

	if($result_id)
	{
		print '<table border=1>';
		print '<TH> FIRSTNAME <TH> LASTNAME ';
		while($row = mysqli_fetch_row($result_id))
		{	print '<TR>';
			foreach ($row as $field)
				print "<TD> $field </TD> ";
			print '</TR>';
		}
	}
	else
		print "Fail.<p>";
	mysqli_close($conn);
?>
</CENTER>
