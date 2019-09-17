	
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

	function bookingUpdate(id,day, time,name) {
		var daylong,daytime;
		if(day=="MON"){daylong=" - Monday";}
		else if(day=="TUE"){daylong=" - Tuesday";}
		else if(day=="WED"){daylong=" - Wednesday";}
		else if(day=="THU"){daylong=" - Thursday";}
		else if(day=="FRI"){daylong=" - Friday";}
		else if(day=="SAT"){daylong=" - Saturday";}
		else if(day=="SUN"){daylong=" - Sunday";}
		
		if(time=="T12"){daytime=" - 12pm";}
		else if(time=="T15"){daytime=" - 3pm";}
		else if(time=="T18"){daytime=" - 6pm";}
		else if(time=="T21"){daytime=" - 9pm";}
		
		document.getElementById("booking-title").innerHTML = name+daylong+daytime;
		document.getElementById("booking-form").reset();
		document.getElementById("booking-total").innerHTML="Total : ";
		
		document.getElementById("movie-id").value=id;
		document.getElementById("movie-day").value=day;
		document.getElementById("movie-hour").value=time;
		document.getElementById("booking").style.display = "block"; 
		document.getElementById("booking").scrollIntoView();
		
	}	
	
	
	document.getElementById("movieCardACT").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "flex"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelAHF").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
		document.getElementById("synopsis-head").style.display = "block"; 
		document.getElementById("booking-form").reset();
		document.getElementById("booking").style.display = "none";
		document.getElementById("synopsis").scrollIntoView();
		
    } 
	document.getElementById("movieCardRMC").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "flex"; 
		document.getElementById("moviePanelAHF").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
		document.getElementById("synopsis-head").style.display = "block"; 
		document.getElementById("booking-form").reset();
		document.getElementById("booking").style.display = "none";
		document.getElementById("synopsis").scrollIntoView();
    }
	document.getElementById("movieCardAHF").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelAHF").style.display = "flex"; 
		document.getElementById("moviePanelANM").style.display = "none"; 
		document.getElementById("synopsis-head").style.display = "block"; 
		document.getElementById("booking-form").reset();
		document.getElementById("booking").style.display = "none";
		document.getElementById("synopsis").scrollIntoView();
    }
	document.getElementById("movieCardANM").onclick = function(){ 
  
        document.getElementById("moviePanelACT").style.display = "none"; 
		document.getElementById("moviePanelRMC").style.display = "none"; 
		document.getElementById("moviePanelAHF").style.display = "none"; 
		document.getElementById("moviePanelANM").style.display = "flex"; 
		document.getElementById("synopsis-head").style.display = "block"; 
		document.getElementById("booking-form").reset();
		document.getElementById("booking").style.display = "none";
		document.getElementById("synopsis").scrollIntoView();
    }
	
	
	function totalCal() {
		var sta = document.getElementById("seats-STA").value;
		var stp = document.getElementById("seats-STP").value;
		var stc = document.getElementById("seats-STC").value;
		var fca = document.getElementById("seats-FCA").value;
		var fcp = document.getElementById("seats-FCP").value;
		var fcc = document.getElementById("seats-FCC").value;
		var day = document.getElementById("movie-day").value;
		var time= document.getElementById("movie-hour").value;
		var total=0;
		
		if(day=="MON" || day=="WED"){
			total= sta*14.00+stp*12.50+stc*11.00+fca*24.00+fcp*22.50+fcc*21.00;
			
		}else if(day=="TUE" || day=="THU" || day=="FRI"){
			
			if(time=="T12"){
				total= sta*14.00+stp*12.50+stc*11.00+fca*24.00+fcp*22.50+fcc*21.00;
			}else{
				total= sta*19.80+stp*17.50+stc*15.30+fca*30.00+fcp*27.00+fcc*24.00;
			}
		}else{
			total= sta*19.80+stp*17.50+stc*15.30+fca*30.00+fcp*27.00+fcc*24.00;
		}
		
		
		
		document.getElementById("booking-total").innerHTML="Total : A$ "+total.toFixed(2);
		
	}
	
	function validateForm() {
	  
		var name=document.getElementById("cust-name").value;
		var email=document.getElementById("cust-email").value;
		var mobile=document.getElementById("cust-mobile").value.replace(/\s+/g, '');
		var card=document.getElementById("cust-card").value.replace(/\s+/g, '');
		var expiry=document.getElementById("cust-expiry").value;
		var now = new Date();
		var sta = document.getElementById("seats-STA").value;
		var stp = document.getElementById("seats-STP").value;
		var stc = document.getElementById("seats-STC").value;
		var fca = document.getElementById("seats-FCA").value;
		var fcp = document.getElementById("seats-FCP").value;
		var fcc = document.getElementById("seats-FCC").value;
		var day = document.getElementById("movie-day").value;
		
		var patternname = /^[a-z ,.'-]+$/i;
		var patternemail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
		var patternphone =/^[0-1]{1}[0-9]{9}$/;
		var patterncard =/^[0-9]{14,19}$/;
		
		
		var stat=true;
		var error="";
	  if(!patternname.test(name)){
		document.getElementById("cust-name").style.border = "1.5px solid red";
		error=error+"Please enter a valid Western Name.";
		stat=false;		
	  }
	  if(!patternemail.test(email)){
		  document.getElementById("cust-email").style.border = "1.5px solid red"; 
		  error=error+"<br />Please enter a valid Email Address.";
		  stat=false;
	  }
	  if(!patternphone.test(mobile)){
		  document.getElementById("cust-mobile").style.border = "1.5px solid red"; 
		  error=error+"<br />Please enter a valid 10 digit Oz number.";
		  stat=false;
	  }
	  if(!patterncard.test(card)){
		  document.getElementById("cust-card").style.border = "1.5px solid red"; 
		  error=error+"<br />Please enter a valid Card Number.";
		  stat=false;
	  }
	  if(now.getTime()> new Date(expiry).getTime() || expiry==""){
		  document.getElementById("cust-expiry").style.border = "1.5px solid red"; 
		  error=error+"<br />The card you entered is expired";
		  stat=false;
	  }
	  if((sta+stp+stc+fca+fcp+fcc)<1){
		  error=error+"<br />Please Select seats";
		  stat=false;
	  }
		
	  
	  if(stat== false){
		  
		  document.getElementById("error-message").innerHTML = error; 
		   
		  return false;
		 
	  }else{
		  document.getElementById("error-message").innerHTML = ""; 
	  }
	 
		
		
	  
	}
	function errorFunc(id){
		
		document.getElementById(id).style.border = "1.5px solid lightgray";
		
	}