<html>

<!------DATABASEPART FOR THE REGISTRYFORM----->

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
	
	die("Connection Failed:". mysqli_connect_error());
}

echo "";

mysqli_select_db($conn,"group11"); 



$sql = "SELECT UserName, Email, Contactno FROM Customers WHERE UserName='sazzz'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
// output data of each row
while($row = mysqli_fetch_assoc($result)) {
echo "id: " . $row["UserName"]. " - Name: " . $row["Email"]. " " . $row["Contactno"]. "<br>";
}
}
else {
echo "0 results";
}
mysqli_close($conn);
?>


</html>