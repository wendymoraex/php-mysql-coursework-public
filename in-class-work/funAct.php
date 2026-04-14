
<center>
<H2> Score to Grade </h2>
<HR>
<?php

        function fun($s)
        {
                if($s > 100 || $s <= 0)
                        return "Invalid";
                else if($s >= 60)
                        return "Congrats, you passed!";
		else
			return "You failed!";
        }

	$val = $_POST['score'];

	$var = fun($val);
	print "<P>$var<P>";

?>
<HR>
<i>
<?php
	include("date.php");
?>
</center>
