<!--

	File: greeting2.php
	Due: ...
	Author:  ....

	Goal: Test string concategation, P.5 (2.2) p.6
-->

<?php

	$first = "Wendy";
	$last = "Moraes";
	$name = $first . " " . $last;
	$name = strtoupper($name);
	$age = 26;
	$age  ++;
	$test = " I'm " . $age;
?>

<H3>
<?php
	print "My name is $name, $test";
?>
</H3>
