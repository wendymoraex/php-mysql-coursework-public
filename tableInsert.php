<?php
     	/*      insert.php
                p.62
        */

	$ID = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];

        $host = 'localhost';
        $user = 'wmoraes';
        $passwd = 'CS389';
        $database = 'wmoraes';
        $connect = mysqli_connect($host, $user, $passwd);
        $query = "insert into STUDENT values 
                        ($ID, '$fname', '$lname', '$gender')";
//      print "The query is <i> $query </i> ";
        mysqli_select_db($connect, $database);

        if(mysqli_query($connect, $query))
        {
//              print "<P>Insert successful.<P>";
                // use include for showing the table content
                include ("display.php");
        }
	else
            	print "<P>Insert fail.<p>";
        mysqli_close($connect);
?>
<HR>
<P>

<center> <A HREF=index.html> HOME </A> | <A HREF=insertForm.html> FORM </A>
</center>

