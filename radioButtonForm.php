
<CENTER>
<HR>
<?php
	$name = $_POST['name'];
	$s = $_POST['status'];
//DEBUG
//	print "Name: $name <P>";
//	print "Status: $s";

	if($s == 1)
		$g = "Freshman";
	else if($s == 2)
		$g = "Sophomore";
	else if($s == 3)
		$g = "Junior";
	else
		$g = "Senior";

	echo "Student's info: <P>";
	echo "Name: $name <BR>";
	echo "Grade: $g ";
?>
<HR>
</CENTER>
