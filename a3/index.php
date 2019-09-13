<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 3</title>
    
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
				  <h2> AVENGERS ENDGAME </h2>
				  <p>After the devastating events of Avengers: Infinity War (2018), the universe is in ruins.
				  With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos' actions and restore balance to the universe.</p>
				  <a href="#now-showing" class="button">NOW PLAYING</a>
				  </div>
			  </div>
			  <img src="../../media/4.jpg" >
			</div>
			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> THE HAPPY PRINCE </h2>
				  <p>The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic 
				  distance and regards the difficulties that beset his life with detachment and humor.</p>
				  <a href="#now-showing" class="button">NOW PLAYING</a>
				  </div>
			  </div>		  
			  <img src="../../media/1.jpg"  >
			</div>
			
		

			<div class="mySlides fade">
			  <div class="slidetext">
				  <div>
				  <h2> THE LION KING </h2>
				  <p>After the murder of his father, a young lion prince flees his kingdom only to learn the true meaning of responsibility and bravery.</p>
				  <a href="#now-showing" class="button">NOW PLAYING</a>
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
				  <a href="#now-showing" class="button">NOW PLAYING</a>
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
	
		<h2 id="who"> WHO ARE WE ..</h2>
		<div class="tab">
		  <button class="tablinks active" onclick="aboutfunc(event, 'Abouttab')">About Us</button>
		  <button class="tablinks" onclick="aboutfunc(event, 'News')">Comfortable Seats</button>
		  <button class="tablinks" onclick="aboutfunc(event, 'Projectors')">Immersive Experience</button>
		</div>
		<div id="Abouttab" class="tabcontent" style="display:block;">
		<div class="flex-headline">
		  <h3>BIT OF HISTORY</h3>
		  </div>
			<div class="flex-container">
				<p class="aboutPara">The Lunardo Cinema is steeped in rich history and tradition. Built in 1937 and now Heritage Listed,
				it is one of the only 2 original Art Deco Cinemas remaining in Sydney.  Family owned, independent, and still offering the lowest price movie tickets around, the cinema has survived a fascinating history of tumultuous change and holds an important place in the local culture.  This heritage and unique design adds to the charm and warmth of the Ritz Cinema that other venues cannot match.</p>
				<p class="aboutPara">The Lunardo Cinema is steeped in rich history and tradition. Built in 1937 and now Heritage Listed,
				it is one of the only 2 original Art Deco Cinemas remaining in Sydney.  Family owned, independent, and still offering the lowest price movie tickets around, the cinema has survived a fascinating history of tumultuous change and holds an important place in the local culture.  This heritage and unique design adds to the charm and warmth of the Ritz Cinema that other venues cannot match.</p>
				
			</div>
		</div>

		<div id="News" class="tabcontent">
		<div class="flex-headline">
		  <h3>SEATING</h3>
		 </div>
		  <div class="flex-container">
		  <div class="chair">
		  <img class="imgfix" src="../../media/seat1.png" >
		  <div class="title"><h3>Standard Seats</h3></div>
		  </div>
		  <div>
			<p>The cinema has reopened after extensive improvements and renovations.We bring the best seats there is to offer along with the best new movies.</p>
			<p class="seatsinfo">&#10003; Luxurious aesthetic</p>
			<p class="seatsinfo">&#10003; Fully reclining seat</p>
			<p class="seatsinfo">&#10003; Two individual motors</p>
			<p class="seatsinfo">&#10003; Central processor</p>
			<p class="seatsinfo">&#10003; Footrest sensor option</p>
			<p class="seatsinfo">&#10003; Easy lift system</p>
			<p class="seatsinfo">&#10003; Underseat lighting</p>
			<p class="seatsinfo">&#10003; Autoreturn footrest option</p>
			</div>
			<div class="chair">
			<img class="imgfix" src="../../media/seat2.png" >
			<div class="title"><h3>First Class Seats</h3></div>
			</div>
			</div>

		 
		</div>

		<div id="Projectors" class="tabcontent">
		
		<div class="flex-headline">
		<h3 >DOLBY VISION</h3>
		</div>
		<div class="flex-container">
		  <img id ="dolbyimage" src="../../media/dolby.jpg" >
		  <div>
		  <p >The projection and sound systems are upgraded with 3D Dolby Vision projection and Dolby Atmos.</p>
		  
		  <p>Dolby Vision™ was designed for the cinema to deliver incredible color, a million-to-one contrast ratio, and twice the brightness of standard screens.
		  Powered by dual-laser projection technology and engineered for a consistent experience, Dolby Vision lets you see more of the story.</p>
		  </div>
		  
		  </div>
		</div>
		
    </section>
	<section id='pricing'>
	<h2 id="price">PRICING</h2>
	<p id="pricingpara">Lowest Prices for all categories and Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
 Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies </p>
	<div class="pricing-flex">
	  <div class="ticket-flex">
		  <h2>Standard Adult</h2>
		  <h3>Monday and Wednesday</h3>
		  <p>14.00 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>14.00 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>19.80 AUD</p>
		  <h4>Seat Code : STA</h4>
	  </div>
	  <div class="ticket-flex">
		  <h2>Standard Concession</h2>
		  <h3>Monday and Wednesday</h3>
		  <p>12.50 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>12.50 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>17.50 AUD</p>
		  <h4>Seat Code : STP</h4>
	  </div>
	  <div class="ticket-flex">
		  <h2>Standard Child</h2>
		  <h3>Monday and Wednesday</h3>
		  <p>11.00 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>11.00 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>15.30 AUD</p>
		  <h4>Seat Code : STC</h4>
	  </div>
	  <div class="ticket-flex">
		  <h2>First Class Adult</h2>
	  	  <h3>Monday and Wednesday</h3>
		  <p>24.00 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>24.00 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>30.00 AUD</p>
		  <h4>Seat Code : FCA</h4>
	  </div>
	  <div class="ticket-flex">
		  <h2>First Class Concession</h2>
	  	  <h3>Monday and Wednesday</h3>
		  <p>22.50 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>22.50 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>27.00 AUD</p>
		  <h4>Seat Code : FCP</h4>
	  </div>
	  <div class="ticket-flex">
		  <h2>First Class Child</h2>
	  	  <h3>Monday and Wednesday</h3>
		  <p>21.00 AUD</p>
		  <h3>Weekdays 12pm</h3>
		  <p>21.00 AUD</p>
		  <h3>Every Other Time</h3>
		  <p>24.00 AUD</p>
		  <h4>Seat Code : FCC</h4>
	  </div>
	</div>
     
     </section>
	<section id='now-showing'>
	<h2 id="showing">NOW - SHOWING</h2>
     <div class="now-flex">
		  <div id="movieCardDRM" class="movie-flex">
			<img  src="../../media/m1.jpg" >
			<h2>The Happy Prince (R)</h2>
			<p>Wednesday - 12pm</p>
			<p>Thursday - 12pm</p>
			<p>Friday - 12pm</p>
			<p>Saturday - 9pm</p>
			<p>Sunday - 9pm</p>
		  </div>
		  <div id="movieCardACT" class="movie-flex">
			<img  src="../../media/m2.jpg" >
			<h2>Avengers : Endgame (PG)</h2>
			<p>Wednesday - 9pm</p>
			<p>Thursday - 9pm</p>
			<p>Friday - 9pm</p>
			<p>Saturday - 6pm</p>
			<p>Sunday - 6pm</p>
		  </div>
		   <div id="movieCardANM" class="movie-flex">
			<img  src="../../media/m3.jpg" >
			<h2>Dumbo (G)</h2>
			<p>Monday - 12pm</p>
			<p>Tuesday - 12pm</p>
			<p>Wednesday - 6pm</p>
			<p>Thursday - 6pm</p>
			<p>Friday - 6pm</p>
			
			<p>Sunday - 12pm</p>
		  </div>
		  <div id="movieCardRMC" class="movie-flex">
			<img  src="../../media/m4.jpg" >
			<h2>Top End Wedding (G)</h2>
			<p>Monday - 6pm</p>
			<p>Tuesday - 6pm</p>
			<p>Saturday - 3pm</p>
			<p>Sunday - 3pm</p>
		  </div>
	  </div>
    
     </section>
	 <section id='synopsis'>
		 <div id="moviePanelACT" class="synopsis-container">
			 <div class="synopsis-description">
			 <h2>AVENGERS : ENDGAME (PG)</h2>
			 <p>After half of all life is snapped away by Thanos, the Avengers are left scattered and divided. Now with a way
			 to reverse the damage, the Avengers and their allies must assemble once more and learn to put differences aside in
			 order to work together and set things right. Along the way, the Avengers realize that sacrifices must be made as they
			 prepare for the ultimate final showdown with Thanos, which will result in the heroes fighting the biggest battle they have ever faced.</p>
			 </div>
			 <div class="synopsis-trailer">
			  <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
			</div>
			 <div class="synopsis-booking">
				<h2>Make a Booking :</h2>
				<button type="button">Wednesday - 9pm</button>
				<button type="button">Thursday - 9pm</button>
				<button type="button">Friday - 9pm</button>
				<button type="button">Saturday - 6pm</button>
				<button type="button">Sunday - 6pm</button>
				
			 </div>
		 
		 </div>
		 
		 <div id="moviePanelRMC" class="synopsis-container">
			 <div class="synopsis-description">
			 <h2>Top End Wedding (G)</h2>
			 <p>Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone
			 AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.</p>
			 </div>
			 <div class="synopsis-trailer">
			  <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			 <div class="synopsis-booking">
				<h2>Make a Booking :</h2>
				<button type="button">Monday - 6pm</button>
				<button type="button">Tuesday - 6pm</button>
				<button type="button">Saturday - 3pm</button>
				<button type="button">Sunday - 3pm</button>
		
			
			 </div>
		 
		 </div>
		 
		 <div id="moviePanelANM" class="synopsis-container">
			 <div class="synopsis-description">
			 <h2>Dumbo (G)</h2>
			 <p>Struggling circus owner Max Medici enlists a former star and his two children to care for Dumbo, a baby elephant
			 born with oversized ears. When the family discovers that the animal can fly, it soon becomes the main attraction -- bringing
			 in huge audiences and revitalizing the run-down circus. The elephant's magical ability also draws the attention of V.A. Vandevere,
			 an entrepreneur who wants to showcase Dumbo in his latest, larger-than-life entertainment venture.</p>
			 </div>
			 <div class="synopsis-trailer">
			  <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			 <div class="synopsis-booking">
				<h2>Make a Booking :</h2>
				<button type="button">Monday - 12pm</button>
				<button type="button">Tuesday - 12pm</button>
				<button type="button">Wednesday - 6pm</button>
				<button type="button">Thursday - 6pm</button>
				<button type="button">Friday - 6pm</button>
				<button type="button">Sunday - 12pm</button>
				
			 </div>
		 
		 </div>
		 
		 <div id="moviePanelDRM" class="synopsis-container">
			 <div class="synopsis-description">
			 <h2>The Happy Prince (R)</h2>
			 <p>His body ailing, Oscar Wilde lives out his last days in exile, observing the difficulties and failures surrounding him with ironic detachment,
			 humour, and the wit that defined his life.</p>
			 </div>
			 <div class="synopsis-trailer">
			  <iframe src="https://www.youtube.com/embed/hs7AtqZE4Mg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		
			</div>
			 <div class="synopsis-booking">
				<h2>Make a Booking :</h2>
				<button type="button">Wednesday - 12pm</button>
				<button type="button">Thursday - 12pm</button>
				<button type="button">Friday - 12pm</button>
				<button type="button">Saturday - 9pm</button>
				<button type="button">Sunday - 9pm</button>
		
			 </div>
		 
		 </div>
		 
	 </section>
	
    </main>

    <footer>
	<section id="footer1">
	<div><p>LUNARDO PLC,29 Bulmans Road,Melton South,VIC 3336</p></div>
	<div><p>lunardo@gmail.com</p></div>
	<div><p>+61 439 469 582</p></div>
	</section>
	<section id="footer2">
      <div><p>&copy;<script>document.write(new Date().getFullYear());</script><a href="https://github.com/s3757847/wp">  Shehan Chandrasekara - s3757847</a> Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</p></div>
      <div><p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</p></div>
      <div><button id='toggleWireframeCSS' style="color:white;" onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
	 </section>
    </footer>
	<button onclick="topFunction()" id="goTO" title="Go to top">&#8593;</button>
  </body>
	<script type="text/javascript" src="script.js"></script>  
	
</html>
