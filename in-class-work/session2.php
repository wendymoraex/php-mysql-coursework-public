<?php	session_start();	?>

<!--  p.46 

File name: session2.php

-->

<?php
	$pass = $_SESSION['psw'];
// DEBUG
print "<P> Password: $pass <HR>";

	if($pass != "password")	print "Go away.";
	else
	{
?>
<center>
<H2>
Table of Square  Values
</H2>
<HR>
<table border=1>
<th>Number </th> <th>Square</sh> 
<?php

	$start = $_POST['start'];
	$end = $_POST['end'];

	for($i=$start; $i<=$end; $i++)
	{
		$sqr = $i * $i;
		print "<tr> <td>$i</td>  
			<td>$sqr</td>"; 
	}
?>
</table>
<HR>
	<A HREF=session.html>Go back</A>

</center>
<?php
	}
?>
