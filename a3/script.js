	
	document.getElementById("mobnav").onclick = function() {navShow()};

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
	
	function navShow() {
		var nav = document.getElementById("mobilenavi");
		
		if(nav.style.display==='block'){
			nav.style.display = 'none';
		}else{
			nav.style.display = 'block';
		}
	
	
	}
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
	
	

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
		
		if (window.pageYOffset >= home-200 && window.pageYOffset < home+homesize-30) {
		document.getElementById("nav-id1").classList.add("active");
		document.getElementById("mobnav").innerHTML = "&#9776;";
		}else{
		document.getElementById("nav-id1").classList.remove("active");
		}
		
		if (window.pageYOffset >= about-30 && window.pageYOffset < about+aboutsize-30 ) {
		document.getElementById("nav-id2").classList.add("active");
		document.getElementById("mobnav").innerHTML = "ABOUT";
		}else{
		document.getElementById("nav-id2").classList.remove("active");
		}
		
		if (window.pageYOffset >= pricing-30 && window.pageYOffset < pricing+pricingsize-30 ) {
		document.getElementById("nav-id3").classList.add("active");
		document.getElementById("mobnav").innerHTML = "PRICING";
		}else{
		document.getElementById("nav-id3").classList.remove("active");
		}
		
		if (window.pageYOffset >= now-30  ) {
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
	
	function aboutfunc(evt, tabname) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(tabname).style.display = "block";
	  evt.currentTarget.className += " active";
	}

	
	document.getElementById("movieCardACT").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "flex"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelDRM").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
  
    } 
	document.getElementById("movieCardRMC").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "flex"; 
		document.getElementById("moviePanelDRM").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
  
    }
	document.getElementById("movieCardDRM").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelDRM").style.display = "flex"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
  
    }
	document.getElementById("movieCardANM").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelDRM").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "flex"; 
  
    }
	
		