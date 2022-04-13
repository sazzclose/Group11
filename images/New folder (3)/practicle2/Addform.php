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


/*
$sql = "CREATE DATABASE studentdb_psnumber200";
IF (mysqli_query($conn,$sql)){
	echo "Database Created Succwessfully"; 
}
else{
	echo "Eroor creating db".mysqli_error($conn);
}



mysqli_select_db($conn,"studentdb_psnumber200");   //this code connects to the db again

$sql = "CREATE TABLE tbl_student_psnumber200(				//table creation part
FirstName varchar(15) NOT NULL,
LastName varchar(15),
Age int(6),
gpa int(4),
Mainsubject varchar(15))";

if(mysqli_query($conn, $sql)){
	echo "<h3>Table Created Successfully</h3>";
}
else 
{
	echo "<h3>Error creating table</h3>" .mysqli_error($conn);
}
*/

mysqli_select_db($conn,"studentdb_psnumber200"); 

$sql= "insert into tbl_student_psnumber200(FirstName, LastName, Age, gpa, Mainsubject)
VALUES('$_POST[fname]','$_POST[lname]','$_POST[age]','$_POST[gpa]','$_POST[msubs]')" ;

if(!mysqli_query($conn, $sql)){
	die ('Error:'. mysqli_error($conn));
}
echo "<h3>One record added";

?>

</html>
