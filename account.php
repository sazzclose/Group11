<!DOCTYPE html>
<html lang en="en">
<head>
	<meta charset="UTF-g">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ALL PRODUCTS - U COMPUTERS</title>
	<link rel="stylesheet" href="groupproject.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&family=Syne+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>


	
	<div class="container">
	<div class ="navbar">
		<div class="logo">
			<a href="groupproject.php">
			<img src="images/logo.png" width="125px"> </a>
		</div>
		<nav>
		<ul id="MenuItems">
			<li><a href="groupproject.php">Home</a></li>
			<li><a href="products.html">Products</a></li>
			<li><a href="aboutus.html">About</a></li>
			<li><a href="contact.html">Contact</a></li>
			<li><a href="account.php">Account</a></li>
		</ul>	
		</nav>
		<a href="cart.php">
		<img src="images/cart.png" width="30px" height="30px">
		</a>
		<img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
		
	</div>
</div>	
		
		
		
	<!-------account page----->

 <div class="account-page">
	<div class="container"
		<div class="row">
			<div class="col-2">
				<img src="images/image1.png" width="100%">
			</div>
			
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
					<span onclick="login()">Log In</span>
					<span onclick="register()">Register</span>
					<hr id="indicator">
					</div>
					<form id="loginform" action="Registerresult.php" method="post">
							<input type="text" placeholder="User Name">
							<input type="password" placeholder="Password">
							<button type = "submit" class="btn">Login</button>
							<a href="">forgot password</a>
						</form>
						
						<form id="regform" action="Registerresult.php" method="post">
							<input type="text" name="uname" placeholder="User Name" required>
							<input type="email" name="email" placeholder="Email" required>
							<input type="password" name="pword" placeholder="Password">
							<input type="contactno" name="contactno" placeholder="Contact No" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false">
							<button type = "submit"  class="btn">Register</button>					
						</form>

				</div>
			</div>
		</div>
	
	</div>
 </div>


	
<!-------footer----------->
	<div class="footer">
		<div class= "container">
			<div class="row">
				
				<div class="footer-col-2">
					<img src="images/logo-white.png">
					<p>Our purpose is to sjijsidsihd majeij tghe plases and bensdioks of sportss accescssibel to maasASAnt</p>
				</div>
				
				<div class="footer-col-3">
					<h3>Use full links</h3>
					
					<ul>  
						<li>Coupons</li>
						<li>Blog Post</li>
						<li>Return Policy</li>
						<li>Join Affiliate</li>
					</ul>
				
				</div>
				
				<div class="footer-col-4">
					<h3>Follows us</h3>
					
					<ul>  
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Instagramm</li>
						<li>YoutTube</li>
					</ul>
				
				</div>
				
			</div>
			
				<hr>
				<p class="copyright">Copyright 2020 All rights Reserved<br>Developed By Group No:11</p>
		</div>
		
	</div>

	
<!-------js for toggle menu------->
<script>

	var MenuItmes= document.getElementById("MenuItems");
	MenuItems.style.maxHeight= "0px";

	function menutoggle(){
	 if(MenuItems.style.maxHeight == "0px")
		{
		MenuItems.style.maxHeight = "200px";
		}
		else
		{
		MenuItems.style.maxheight = "0px";
		}
	
	}



function register(){
	regform.style.transform = "translateX(0px)";
	loginform.style.transform = "translateX(0px)";
	indicator.style.transform = "translateX(100px)";
	
}

function login(){
	regform.style.transform = "translateX(300px)";
	loginform.style.transform = "translateX(300px)";
	indicator.style.transform = "translateX(0px)";
}


</script>


<!-------js for toggle form------->
<script>

	var loginform = document.getElementById("loginform");
	var regform = document.getElementById("regform")
	var indicator = document.getElementById("indicator")
		
</script>


</body>
</html>
	
	