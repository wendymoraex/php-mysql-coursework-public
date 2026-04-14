<!-- Assignment 1

        File name: gradeCalculator.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: Feb 15, 2026
-->

<CENTER>
<?php

	$homework = $_POST['homework'];
	$test1 = $_POST['test1'];
	$test2 = $_POST['test2'];
	$finalExam = $_POST['final'];

	$homework = floatval($homework);
	$test1 = floatval($test1);
	$test2 = floatval($test2);
	$finalExam = floatval($finalExam);

	$average = ($homework * 0.20) + ($test1 * 0.20) + ($test2 * 0.25) + ($finalExam * 0.35); 
?>
<hr>
<h3> 
<?php
	print "Your final grade is " . $average;
?>
<h3>
<hr>
<A HREF=gradeCalculator.html><button type=button> Back </button></A>
</CENTER>
