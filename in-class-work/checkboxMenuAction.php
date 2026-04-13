<!-- 

surveyAction.php
p.53 

-->

<FONT color=blue size=4>
<center>
<H2>
Tuna Cafe Survey Result
</h2>
</center>
<HR>
<?php
	$prefer = $_POST["prefer"];	

// this is an array!!! -- {}, {0}, {1}, {0, 1} ...
/* debug as follows -  */
print "Here is the debug info <P>{";
foreach ($prefer as $i)
	print "$i, ";
print "}<P>Done the debug <HR>";


	$menu = array("Tuna Casserole", "Tuna Sandwich", "Tune Pie",
		"Grilled Tuna", "Tuna Surprise");
	if(count($prefer) == 0)
		print "Oh no! Pick someting.";
	else
	{	print "<P>Your selections were <UL>";
		foreach ($prefer as $i)
			print "<LI>$menu[$i]";
		print "</UL>";
	}
?>
</FONT>
