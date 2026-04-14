<!-- assignment 3

        File name: courseEval3.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 01, 2026
-->

<?php   session_start();

        $name = $_SESSION['stuName'];
        $course = $_SESSION['stuCourse'];

	$a1 = $_POST['q1'];
	$a2 = $_POST['q2'];
	$a3 = $_POST['q3'];
	$a4 = $_POST['q4'];
?>

<CENTER>
<H2>Evaluation Summary</H2>
<HR>
<p><b> Student's name:</b> <?php echo $name; ?> </p>
<p><b> Chosen course:</b> <?php echo $course; ?> </p>
<HR>
<h3>Evaluation Results:</h3>
<p><b> Q1 answer:</b> <?php echo $a1; ?> </p>
<p><b> Q2 answer:</b> <?php echo $a2; ?> </p>
<p><b> Q3 answer:</b> <?php echo $a3; ?> </p>
<p><b> Q4 answer:</b> <?php echo $a4; ?> </p>
<HR>
<A HREF=courseEval.html><button type=button> Evaluate Another Course </button></A>
<A HREF=assignment3.html><button type=button> Exit </button></A>
</CENTER>
