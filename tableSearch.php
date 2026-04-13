<CENTER>
<?php
	// p.63 search.php

	$gender = $_POST['gender'];

	$host = 'localhost';
	$user = 'wmoraes';
	$passwd = 'CS389';
	$database = 'wmoraes';

	$connect = mysqli_connect($host, $user, $passwd, $database);
	$query = "select FIRSTNAME, LASTNAME from STUDENT where GENDER='$gender' ";
	print "The query is <i> $query </i> ";

	$result_id = mysqli_query($connect, $query);

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
	mysqli_close($connect);
?>
</CENTER>
