<!-- assignment 4

        File name: tunaSurveyAction.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: March 08, 2026
-->
<div style="text-align:center;">
<FONT color=purple size=4>
<CENTER>
<H2> Tuna Cafe Survey Result</H2>
</FONT>
<HR>
<?php

	$prefer = $_POST['prefer'];
	$service = $_POST['service'];

	$menu = array("Tuna Casserole", "Tuna Sandwich", "Tuna bites", "Grilled Tuna", "Tuna Surprise");
    $service_options = array("The marvelous food", "The affordable prices", "The speedy service", "I just like tuna", "None of the above");

	if(count($prefer) == 0)
    		print "Please, select a dish.<br>";
	else {
    		print "<P><b>You selected: </b></P>";
    		print "<div style='width:fit-content; margin-left:auto; margin-right:auto;'>";
    		foreach ($prefer as $i)
        		print "<LI>$menu[$i]</LI>";
    		print "</UL></div>";
    		print "<hr>";
	}

	if(count($service) == 0)
    		print "Please, review our service.";
	else {
    		print "<p><b>You like our service because of: </b></p>";
    	print "<div style='width:fit-content; margin-left:auto; margin-right:auto;''>";
    	foreach($service as $i)
        	print "<LI>$service_options[$i]</LI>";
    	print "</UL></div>";
}
?>
<HR>
<A HREF=tunaSurvey.html><button type=button>Back to Survey</A></button>
<A HREF=assignment4.html><button type=button>Done</A></button>
</CENTER>
</div>
