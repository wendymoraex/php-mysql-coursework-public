<!--  hello.php  -->

<center>
<Font color=blue>
<?php

	$firstName = $_POST['first'];
	$lastName = $_POST['last'];

// debugging
	print "first name = $firstName.<BR>";
	print "last name = $lastName. <BR>";

	$name = $firstName . " " . $lastName;
	print "Hello $name";
?>
</Font>
</Center>
