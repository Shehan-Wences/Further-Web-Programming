<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
	<link href="https://fonts.googleapis.com/css?family=Sigmar+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Concert+One&display=swap" rel="stylesheet">
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">
    <script src='../wireframe.js'></script>
	

  </head>

  <body>
	
    <header>
      <div class="logo"><a href="#"><img src="../../media/lunardo-Logo1.png" style="width:200px"alt="Logo img"></a> </div>
    </header>
	<div id="nav-wrapper">
    <nav id="navbar" >
		
      <ul>
		<div><a href="#"><img src="../../media/lunardo-Logo.png"  id='logo'alt="Logo img"></a> </div>
			<li><a id="mobnav"  href="javascript:void(0);">&#9776;</a></li>
		<div id="mobilenavi">	
			
			<li><a id="nav-id1" class="active" href="#home">HOME</a></li>
			<li><a id="nav-id2" href="#about">ABOUT US</a></li>
			<li><a id="nav-id3" href="#pricing">PRICING</a></li>
			<li><a id="nav-id4" href="#now-showing">NOW SHOWING</a></li>
			
		</div>
	</ul>
    </nav>
	</div>
    <main>
		
      <section id='home'>
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> THE HAPPY PRINCE </h2>
				  <p>The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic 
				  distance and regards the difficulties that beset his life with detachment and humor.</p>
				  <a href="#" class="button">NOW PLAYING</a>
				  </div>
			  </div>		  
			  <img src="../../media/1.jpg"  >
			</div>
			
			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> AVENGERS ENDGAME </h2>
				  <p>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.
				  With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.</p>
				  <a href="#" class="button">NOW PLAYING</a>
				  </div>
			  </div>
			  <img src="../../media/4.jpg" >
			</div>

			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> THE LION KING </h2>
				  <p>After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.</p>
				  <a href="#" class="button">NOW PLAYING</a>
				  </div>
			  </div>		  
			  <img src="../../media/2.jpg" >
			</div>

			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> DUMBO </h2>
				  <p>A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, 
				  Dumbo and his friends discover dark secrets beneath its shiny veneer.</p>
				  <a href="#" class="button">NOW PLAYING</a>
				  </div>
			  </div>
			  <img src="../../media/3.jpg" >
			</div>
		
		

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
<!--
		-->	
		<!--
		</div>
		<div style="text-align:center">
				  <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		-->	
      
     </section>
	 
	<section id='about'>
        
     </section>
	<section id='pricing'>
     
     </section>
	<section id='now-showing'>
     <!--    <img src="../../media/website-under-construction.png" alt='Website Under Construction' />-->	
     </section>
	
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Put your name(s), student number(s) and group name here. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
	<button onclick="topFunction()" id="goTO" title="Go to top">&#8593;</button>
  </body>
	<script>
	
	document.getElementById("mobnav").onclick = function() {navShow()};
	
	function navShow() {
		var nav = document.getElementById("mobilenavi");
		
		if(nav.style.display=="none"){
			nav.style.display = "block";
		}else{
			nav.style.display = "none";
		}
	
	
	}
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
	window.onscroll = function() {myFunction()};

	
	var stickym = document.getElementById("navbar").offsetTop;
	var home = document.getElementById("home").offsetTop;
	var homesize = document.getElementById("home").offsetHeight;
	
	var about = document.getElementById("about").offsetTop;
	var aboutsize = document.getElementById("about").offsetHeight;
	
	var pricing = document.getElementById("pricing").offsetTop;
	var pricingsize = document.getElementById("pricing").offsetHeight;
	
	var now = document.getElementById("now-showing").offsetTop;
	var nowsize = document.getElementById("now-showing").offsetHeight;
	
	var h = window.innerHeight;

	function myFunction() {
		
		
		if (window.pageYOffset >= stickym) {
		document.getElementById("navbar").classList.add("sticky");
		document.getElementById("logo").style.opacity = "1";
		document.getElementById("goTO").style.display = "block";
		
		} else {
		document.getElementById("navbar").classList.remove("sticky");
		document.getElementById("logo").style.opacity = "0";
		document.getElementById("goTO").style.display = "none";
		
		}
		
		if (window.pageYOffset >= home-200 && window.pageYOffset < home+homesize-65) {
		document.getElementById("nav-id1").classList.add("active");
		document.getElementById("mobnav").innerHTML = "&#9776;";
		}else{
		document.getElementById("nav-id1").classList.remove("active");
		}
		
		if (window.pageYOffset >= about-65 && window.pageYOffset < about+aboutsize-65 ) {
		document.getElementById("nav-id2").classList.add("active");
		document.getElementById("mobnav").innerHTML = "ABOUT";
		}else{
		document.getElementById("nav-id2").classList.remove("active");
		}
		
		if (window.pageYOffset >= pricing-65 && window.pageYOffset < pricing+pricingsize-65 ) {
		document.getElementById("nav-id3").classList.add("active");
		document.getElementById("mobnav").innerHTML = "PRICING";
		}else{
		document.getElementById("nav-id3").classList.remove("active");
		}
		
		if (window.pageYOffset >= now-65 && window.pageYOffset < now+nowsize-65 ) {
		document.getElementById("nav-id4").classList.add("active");
		document.getElementById("mobnav").innerHTML = "NOW SHOWING";
		}else{
		document.getElementById("nav-id4").classList.remove("active");
		}
		
		
		

	}
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
		  slides[i].style.display = "none";  
	  }
	  
	  slides[slideIndex-1].style.display = "block";  
	  
	}
	


	</script>
</html>
