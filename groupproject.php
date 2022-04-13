<!DOCTYPE html>
<html lang en="en">
<head>
	<meta charset="UTF-g">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ucomputers</title>
	<link rel="stylesheet" href="groupproject.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&family=Syne+Mono&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
	
	<div class="header">
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
		<div class="row">
			<div class="col-2">
			<h1>All Gaming Needs At One Place</h1>
			<p>Success isnt always about geatness. its about conssitency.consostsgf <br>hard waork gain success,greatenss will come</p>
			<a href="" class="btn">Explore Now &#10152;</a>
			</div>
			
			<div class="col-2">
				<img src="images/image1.png">
			</div>
		</div>
	</div>
</div>

<!----- featured categories-------------->

<!-------------------------------------slider-------------------------------->
<div class="slider">
	<button class="pre-btn"><img src="./images/arrow.png" alt=""></button>
	<button class="nxt-btn"><img src="./images/arrow.png" alt=""></button>
	<div class="mini-details-container">
		<div class="place-card">
			<div class="place-image">
				<img src="./images/proc.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">Processor</h2>
				
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/mboard.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">Motherboard</h2>
			
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/ram.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">RAM</h2>
				
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/gpu.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">VGA Cards</h2>
				
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/psup.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">Power Supplies</h2>
				
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/monitor.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">Monitors</h2>
					
				</div>
		</div>
		<div class="place-card">
			<div class="place-image">
				<img src="./images/peri.png" class="place-thumb" alt="">
			</div>    
				<button class="card-btn">View Items</button>
				<div class="place-info">
					<h2 class="place-name">Other Items</h2>

				</div>
		</div>
		
		
		
	</div>
</div>
<!-------------End of Slider--------------------------------->	

<!----- featured products-------------->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class = "row">
			
			 <div class="slideshow-container">
      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/product11.png" style="width:100%">
        <div class="text">ASUS ROG Gaming Motherboard</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/product14.png" style="width:100%">
        <div class="text">GIGABYTE AUROS Gaming Motherboard</div>
      </div>
      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/product18.png" style="width:100%">
        <div class="text">Asus ROG Monitor</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
			
			
			</div>

<!----- Latest products-------------->			
		
		</div>
			<h2 class="title"> Latest Products</h2>
			
			<div class = "row">
			<div class="col-4">
			<img src="images/lproduct2.png">
			<h3>GIGABYTE AUROS Motherboard</h3>
				
			<p>Rs.450.00</p>
			</div>
			
			<div class="col-4">
			<img src="images/lproduct1.png">
			<h3>Asus Monitor</h3>
				
			<p>Rs.50.00</p>
			</div>
			
			<div class="col-4">
			<img src="images/lproduct3.png">
			<h3>RGB Auros Keybaord</h3>
				
			<p>Rs.250.00</p>
			</div>
			
			<div class="col-4">
			<img src="images/lproduct4.png">
			<h3>Auros RGB Motherboard</h3>
				
			<p>Rs.150.00</p>
			</div>
	</div>
	

<!-----offer-->
<div class="offer">
	<div class="small-container">
		<div class = "row">
			<div class="col-2">
				<img src="images/exclusive.png" class="offer-img">
			</div>
			
			<div class="col-2">
				<p>Exclusively available on red store</p>
				<h1>Gaming Casing 4</h1>
				<small>Power Your Rig with a Brand New Gaming Casing. Better cooling, better airflow, better everything...
				</small>
				<br>
				<a href="" class="btn">Buy Now &#10152;</a>
			</div>
		</div>
	</div>
</div>

<!--------testimonial------>

	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
						<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
					  </svg>
				<p>Loenr risim sus simpkoek dummy if orpropr ands jtopott inndiusjr. leoreo lokto has neee tje indudtyus sttatdmd dimmt test ever
				</p>
					<div class= "rating">
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
					</div>
					<img src="images/user-1.png">
					<h3>putin king</h3>
				</div>
				
				<div class="col-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
						<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
					  </svg>
				<p>Loenr risim sus simpkoek dummy if orpropr ands jtopott inndiusjr. leoreo lokto has neee tje indudtyus sttatdmd dimmt test ever
				</p>
					<div class= "rating">
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						
					</div>
					<img src="images/user-2.png">
					<h3>Mahinda Appachchi</h3>
				</div>
				
				<div class="col-3">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-quote-fill" viewBox="0 0 16 16">
						<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm7.194 2.766a1.688 1.688 0 0 0-.227-.272 1.467 1.467 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 5.734 4C4.776 4 4 4.746 4 5.667c0 .92.776 1.666 1.734 1.666.343 0 .662-.095.931-.26-.137.389-.39.804-.81 1.22a.405.405 0 0 0 .011.59c.173.16.447.155.614-.01 1.334-1.329 1.37-2.758.941-3.706a2.461 2.461 0 0 0-.227-.4zM11 7.073c-.136.389-.39.804-.81 1.22a.405.405 0 0 0 .012.59c.172.16.446.155.613-.01 1.334-1.329 1.37-2.758.942-3.706a2.466 2.466 0 0 0-.228-.4 1.686 1.686 0 0 0-.227-.273 1.466 1.466 0 0 0-.469-.324l-.008-.004A1.785 1.785 0 0 0 10.07 4c-.957 0-1.734.746-1.734 1.667 0 .92.777 1.666 1.734 1.666.343 0 .662-.095.931-.26z"/>
					  </svg>
				<p>Loenr risim sus simpkoek dummy if orpropr ands jtopott inndiusjr. leoreo lokto has neee tje indudtyus sttatdmd dimmt test ever
				</p>
					<div class= "rating">
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
						<span>&#11088;</span>
					</div>
					<img src="images/user-3.png">
					<h3>Gewal maker</h3>
				</div>
				
				
				
			</div>
		</div>
	</div>		
	
	
	<!--- brands--->
	<div class="brands">
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/logo-amd.png">
				</div>
				<div class="col-5">
					<img src="images/logo-nvidia.png">
				</div>
				<div class="col-5">
					<img src="images/logo-auros.png">
				</div>
				<div class="col-5">
					<img src="images/logo-intel.png">
				</div>
				<div class="col-5">
					<img src="images/logo-msi.png">
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


</script>

<!-------js for slide pics in featured products------->

<script>
      var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
      }
    </script>



<!-------js for slider ------->	
<script>
window.addEventListener('scroll', function(){
	const header = document.querySelector('header');
	header.classList.toggle("sticky", window.scrollY > 0);
	});
	
	
	
	const productContainers = [...document.querySelectorAll('.mini-details-container')];
	const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
	const preBtn = [...document.querySelectorAll('.pre-btn')];
	
	productContainers.forEach((item, i) => {
		let containerDimensions = item.getBoundingClientRect();
		let containerWidth = containerDimensions.width;
	
		nxtBtn[i].addEventListener('click', () => {
			item.scrollLeft += containerWidth;
		})
	
		preBtn[i].addEventListener('click', () => {
			item.scrollLeft -= containerWidth;
		})
	})
</script>




</body>
</html>
	
	