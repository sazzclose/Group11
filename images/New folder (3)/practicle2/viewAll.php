<html>

<style>
body{
	background-color:lightblue;
	
}

</style>



<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
	
	die("Connection Failed:". mysqli_connect_error());
}

echo "Connected Succesfully";

mysqli_select_db($conn,"studentdb_psnumber200"); 



//Results
$result = mysqli_query($con, "SELECT * FROM tbl_student_psnumber200");
echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
<th>gpa</th>
<th>Major subject</th>
</tr>";

while($row = mysqli_fetch_assoc($result))
{
	echo "<tr>";
	echo "<td>" . $row["FirstName"] . "</td>"; echo "<td>" . $row["LastName"] . "</td>"; echo "<td>" . $row["Age"] . "</td>";
	echo "<td>" . $row["gpa"] . "</td>"; echo "<td>" . $row[Mainrsubject] . "</td>"; echo "</tr>";
	
}
echo "</table>";


?>

</html>