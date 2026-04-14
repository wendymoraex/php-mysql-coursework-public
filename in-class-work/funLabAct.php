<?php

  function display($n)
        {
                if($n == 1)
                        print "1";
                else
                {
                        print("$n ");
                        display($n-1);
                       // print("  $n");
                }
        }

	$n = $_POST['N'];

	display($n);

//	for($i=$n; $i>0; $i--)
//		print "$i ";

	print "<HR>";
	include ("date.php");

?>
