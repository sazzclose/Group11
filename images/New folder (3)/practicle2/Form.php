<html>

<head>
<title> index</title>

<style>
body{
background-color:lightblue;
margin-left:45%;
margin-top:15%;
}
</style>


<script>

function myvalids()
{

	let x = document.forms["frm"]["age"].value;
	if( x<20 || x>40 )
	{
		alert("You are not in the right Age group");
		return false;
	} 
	return true;
}



//function isanum(){
	/*let x = document.forms["frm"]["gpa"].value
	if (isNaN(x)){
				document.getElementByid("numloc").innerHTML= "Enter numeric values only";
					return false;
				}
				else{
				return true;
					}	
	
	  if(!z.match(/^\d+/))
        {
        alert("Please only enter numeric characters only for your Age! (Allowed input:0-3)")
        }
	
	}


*/

function myfunctions(){
	var validations = "";
	validations+=myvalids();
	//validations+=isanum();
}







</script>



</head>


<body>

<h3>Enter Student Results</h3>
<br>

<form name="frm" action="addform.php" method="post" "style="align-type:center" onsubmit="return myfunctions()" >
<table>
<tr>
	<td> First Name </td>
	<td>:</td>
	<td><input type="text" name="fname" required></td>
</tr>

<tr>
	<td> Last Name </td>
	<td>:</td>
	<td><input type="text" name="lname" required></td>
</tr>

<tr>
	<td> Age </td>
	<td>:</td>
	<td><input type="text" name="age" required ></td>
</tr>

<tr>
	<td> GPA </td>
	<td>:</td>
	<td><input type="text" name="gpa" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"></td>
</tr>

<tr>
<td> Major Subjects </td>
<td>:</td>
<td>
	<select name="msubs" id="subs">
	<option value="msubs">Statistics</option>>
	<option value="science">Mathematics</option>
	<option value="chem">Computer</option>
	</select>
</td>
</tr>

<tr>
<td>
<br>
</td>
</tr>

<tr>
<td><input type ="submit" value= "SUBMIT" ></td>
<td><input type ="reset" value= "RESET"></td>
</tr>

<tr>
<br>
<td><input type ="button" value= "MENU"></td>
</tr>


</table>
</body>


</html>