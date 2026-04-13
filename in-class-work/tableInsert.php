<?php

	$ID = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
	
	require_once '../config.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $query = "insert into STUDENT values 
                        ($ID, '$fname', '$lname', '$gender')";

        if(mysqli_query($conn, $query))
        {
//              print "<P>Insert successful.<P>";
                // use include for showing the table content
                include ("display.php");
        }
	else
            	print "<P>Insert fail.<p>";
        mysqli_close($conn);
?>
<HR>
<P>
<center> <A HREF=index.html> HOME </A> | <A HREF=insertForm.html> FORM </A>
</center>

