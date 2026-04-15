<!-- assignment 5

        File name: registrationForm2.html
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 29, 2026
-->
<?php session_start();

	$name = $_SESSION['stuName'];
	$gender = $_SESSION['stuGender'];
	$status = $_SESSION['stuStatus'];
	$_SESSION['csOption'] = $_POST['cs'] ?? [];
	$_SESSION['mathOption'] = $_POST['math'] ?? [];
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
<h3> You are registered for the following selected courses: </h3>
<?php
	$cs_option = $_SESSION['csOption'] ?? [];
        $math_option = $_SESSION['mathOption'] ?? [];

	$cs_list = array("CS 112", "CS 205", "CS 212", "CS 305", "CS 310", "CS 311", "CS 350", "CS 389", "CS 430", "CS 489");
        $math_list = array("MATH 135", "MATH 136", "MATH 171", "MATH 172", "MATH 271");

	print "<p><b>CS courses selected:</b></p>";
        if(count($cs_option) == 0){
                print "No CS courses selected";
	}
        else {
                print "<div style='width:fit-content; margin-left:auto; margin-right:auto;'>";
                foreach ($cs_option as $i)
                        print "<LI>$cs_list[$i]</LI>";
                print "</UL></div>";
        }
	print"<P><b> Mathematics courses: </b></P>";
	if(count($math_option) == 0)
                print "No MATH courses selected.";
        else {
        	print "<div style='width:fit-content; margin-left:auto; margin-right:auto;'>";
        foreach($math_option as $i)
                print "<LI>$math_list[$i]</LI>";
        print "</UL></div>";
	}
?>
<hr>
<p> Have a great semester! </p>
<hr>
<A HREF=registrationForm.html><button type=button>Back to Form</A></button>
<A HREF=assignment5.html><button type=button>Done</A></button>
</center>
