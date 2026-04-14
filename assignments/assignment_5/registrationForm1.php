<!-- assignment 5

        File name: registrationForm1.html
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 29, 2026
-->

<?php session_start();

        $_SESSION['stuName'] = $_POST['name'];
        $_SESSION['stuGender'] = $_POST['g1'];
	$_SESSION['stuStatus'] = $_POST['status'];

	$name = $_SESSION['stuName'];
        $gender = $_SESSION['stuGender'];
        $status = $_SESSION['stuStatus'];

?>
<center>
<font color=purple>
<h2> Registration Form </h2>
</font>
<hr>
<p><b> Student's name: </b> <?php echo $name; ?> </p>
<p><b> Gender: </b> <?php echo $gender; ?> </p>
<p><b> Status: </b> <?php echo $status; ?> </p>
<hr>
<h3> Please select the courses you would like to register for: </h3>
<FORM action=registrationForm2.php method=post>
<p>
<b>Computer Science Options: </b><BR>
        <INPUT TYPE=checkbox name=cs[] value=0> CS 112 <BR>
        <INPUT TYPE=checkbox name=cs[] value=1> CS 205 <BR>
        <INPUT TYPE=checkbox name=cs[] value=2> CS 212 <BR>
        <INPUT TYPE=checkbox name=cs[] value=3> CS 305 <BR>
        <INPUT TYPE=checkbox name=cs[] value=4> CS 310 <BR>
        <INPUT TYPE=checkbox name=cs[] value=5> CS 311 <BR>
        <INPUT TYPE=checkbox name=cs[] value=6> CS 350 <BR>
        <INPUT TYPE=checkbox name=cs[] value=7> CS 389 <BR>
        <INPUT TYPE=checkbox name=cs[] value=8> CS 430 <BR>
        <INPUT TYPE=checkbox name=cs[] value=9> CS 489 <BR>
<p>
<b>Mathematics Options: </b><BR>
        <INPUT TYPE=checkbox name=math[] value=0> MATH 135 <BR>
        <INPUT TYPE=checkbox name=math[] value=1> MATH 136 <BR>
        <INPUT TYPE=checkbox name=math[] value=2> MATH 171 <BR>
        <INPUT TYPE=checkbox name=math[] value=3> MATH 172 <BR>
        <INPUT TYPE=checkbox name=math[] value=4> MATH 271 <BR>
<hr>
<INPUT type=submit value=Submit>
<INPUT type=reset value=Reset>
</center>
