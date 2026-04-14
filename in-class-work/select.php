<!--  p.17

	select.php

-->

<center>
<H2>
Table of Square  Values
</H2>
<HR>

<?php

	$start = $_POST['start'];
	$end = $_POST['end'];

  print "<B>Chosen values: $start, $end</B>";
?>


<HR>
<table border=1>
<th>Number </th> <th>Square</sh>

<?php

	for($i=$start; $i<=$end; $i++)
	{
		$sqr = $i * $i;
		print "<tr> <td>$i</td>
			<td>$sqr</td></tr>";
	}
?>
</table>
<HR>
	<A HREF=selectForm.php> Form </A> | <A HREF=index.html> Home </A>

</center>
