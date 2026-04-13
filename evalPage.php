<!-- assignment 6
        File name: evalPage.php
        Author: Wendy Moraes
        Instructor: Dr. Wang
        Due: April 12, 2026
-->

<CENTER>
<FONT color=purple>
<h2>Course Evaluation Website</h2>
</FONT>
<hr>
<h3>Enter the following information: </h3>
<form action=evalPageAction.php method=post>
<p>
Grade status:

<select name=status>
	<option>   </option>
	<option> Freshman </option>
	<option> Sophomore </option>
	<option> Junior </option>
	<option> Senior </option>
</select>
</p>

<p>
Choose a course to evaluate:

<select name=course>
        <option>   </option>
        <option> CS 112 </option>
        <option> CS 212 </option>
        <option> CS 311 </option>
        <option> CS 310 </option>
	<option> CS 389 </option>
	<option> CS 489 </option>
	<option> MATH 205 </option>
	<option> MATH 171 </option>
</select>
</p>

<p>
Overall score:
<INPUT type=radio name=score value=0> Poor
<INPUT type=radio name=score value=1> Average
<INPUT type=radio name=score value=2> Good
<hr>
<INPUT type=submit value="Submit Form">
<INPUT type=reset value="Reset Form">
</CENTER>
