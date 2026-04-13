<center>
<FONT color=purple>
<H2>Evaluation Table</H2>
</FONT>
<HR>
<?php
        require_once '../config.php';
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $query = "select * from EVALUATION";

        $result_id = mysqli_query($conn, $query);
        if($result_id)
        {
                print '<table border=1>';
                print '<TH> STATUS <TH> COURSE <TH> SCORE';
                while($row = mysqli_fetch_row($result_id))
                {       print '<TR>';
                        foreach ($row as $field)
                                print "<TD> $field </TD> ";
                        print '</TR>';
                }
                print '</table>';
        }
        else
                print "Fail.<p>";

        mysqli_close($conn);
?>
</center>
