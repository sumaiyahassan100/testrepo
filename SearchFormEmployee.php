<?php
//includpe("header.php");
/*
Author - Teacher
Date : 23-March
Task is Creating Fmp form for searchingdata
*/

include("dbconnect.php");
echo"<h2> Search Emp</h2> ";

echo"<form action='EmpSearchResult.php'  method='POST'>";
echo"<table border='2'>";
echo"<tr> <td> Enter the First Name  </td><td>    <input type='text' name='frmfn'>   </td></tr>";
echo"<tr> <td> Enter the Last Name  </td><td>    <input type='text' name='frmln'>   </td></tr>";
echo"<tr> <td> Select the Department  </td>
<td>    
<select name='frmdpt'> ";
echo"<option value='x'>Pls Select the dpt </option>";//this is non real option
$q="select * from dptdt";
$res=mysqli_query($conn,$q);
$n = mysqli_num_rows($res); // optional
//read the data from res
while ($row =mysqli_fetch_assoc($res))
{
	echo"<option value= {$row['dptid']}> {$row['dptname']}</option>";
}
echo"</select>";
echo"</td> </tr>";

echo"</table>";

echo "<hr><input type='submit' value='Search'>";

echo "<input type='reset' value='ClearData'>";
echo"</form>";





?>



