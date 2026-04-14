
<?php	session_start();

	$pass = $_POST['pass'];
// DEBUG
print "<P> Password: $pass. <HR>";

	$_SESSION['psw'] = $pass;
	if($pass != "password")
		print "go away.";
	else
	{
?>

<center>
<H2>
The Selection Form: Compute the Square Values
</H2>
<form action=session2.php method=post>
<p>
Select the starting number:
<select name=start>

<?php
	for($i=0; $i<10; $i++)
		print "<option>$i</option>";
?>
</select> 
<P>
Select the ending number:
<select name=end>
<?php
        for($i=10; $i<20; $i++)
                print "<option>$i</option>";
?>
</select>

<HR>
<input type=submit value=Submit>
<input type=reset value=Reset>
</form>
</center>

<?php
	}
?>
	
