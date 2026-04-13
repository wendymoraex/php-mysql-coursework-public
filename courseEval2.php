<!-- assignment 3

        File name: courseEval2.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 01, 2026
-->

<?php session_start();

        $_SESSION['stuName'] = $_POST['stuName'];
	$_SESSION['stuCourse'] = $_POST['stuCourse'];
?>
<CENTER>
<H2> Course Evaluation </H2>
<HR>
<H3>Answer the following questions:</H3>
<FORM action=courseEval3.php method=post>
<P>
	1. The instructor was approachable and provided useful feedback.<BR>
	<INPUT type=radio name=q1 value="Strongly Agree"> Strongly agree <BR>
        <INPUT type=radio name=q1 value="Agree"> Agree <BR>
        <INPUT type=radio name=q1 value="Strongly Disagree"> Strongly disagree <BR>
<P>
   	2. Did the assignments, projects, or tests help you understand the material?? <BR>
        <INPUT type=radio name=q2 value="Strongly Agree"> Strongly agree <BR>
        <INPUT type=radio name=q2 value="Agree"> Agree <BR>
        <INPUT type=radio name=q2 value="Strongly Disagree"> Strongly disagree <BR>
<P>
   	3. Did the instructor create an inclusive and engaging learning environment? <BR>
        <INPUT type=radio name=q3 value="Strongly Agree"> Strongly agree <BR>
        <INPUT type=radio name=q3 value="Agree"> Agree <BR>
        <INPUT type=radio name=q3 value="Strongly Disagree"> Strongly disagree <BR>
<P>
   	4. Did this course develop your ability to think critically or professionally? <BR>
        <INPUT type=radio name=q4 value="Strongly Agree"> Strongly agree <BR>
        <INPUT type=radio name=q4 value="Agree"> Agree <BR>
        <INPUT type=radio name=q4 value="Strongly Disagree"> Strongly disagree <BR>
<HR>
    	<INPUT type=submit value="Submit Form">
        <INPUT type=reset value="Reset Form">
</FORM>
</CENTER>

<hr>
<CENTER>
<A HREF=webBasedExam.html><button type=button>Back</button></A>
</CENTER>

