<center>
<H2>Display Table</H2>
<HR>
<?php
        $host = 'localhost';
        $user = 'wmoraes';
        $passwd = 'CS389';
        $database = 'wmoraes';

        $connect = mysqli_connect($host, $user, $passwd);
        $query = "select * from STUDENT";
//      print "The query is <i> $query </i> ";
        mysqli_select_db($connect, $database);
        $result_id = mysqli_query($connect, $query);
        if($result_id)
        {
                print '<table border=1>';
                print '<TH> ID <TH> FIRSTNAME <TH> LASTNAME
                        <TH> GENDER';
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

        mysqli_close($connect);
?>
</center>
