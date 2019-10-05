<?php
  session_start();
	
		
	$status=true;
	$hacker='';
	$total=0;
	$seaterror='';
	$errorcustomername='';
	$errorcustomeremail='';
	$errorcustomermobile='';
	$errorcustomercard='';
	$errorcustomerexpiry='';
	$bookingtitle='';
	$seatnumber_list =  array('1','2','3','4','5','6','7','8','9','10');
	$movie_list =  array('ACT', 'AHF', 'ANM', 'RMC');
	$day_list =  array('MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN');
	$hour_list =  array('T12', 'T15', 'T18', 'T21');

	if (isset($_POST['order'])) {
		$_SESSION['cart']='';
		$movietitle='';
		$daylong='';
		$daytime='';

		/* Hidden fields Validation */
		if(isset($_POST['movie']['id'])){
			if(!in_array($_POST['movie']['id'], $movie_list))
			{
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}else{
				if($_POST['movie']['id']=="ACT"){$movietitle="AVENGERS ENDGAME";}
				else if($_POST['movie']['id']=="AHF"){$movietitle="The Happy Prince";}
				else if($_POST['movie']['id']=="ANM"){$movietitle="Dumbo";}
				else if($_POST['movie']['id']=="RMC"){$movietitle="Top End Wedding";}
			}
		}else{
				$hacker='BOOKING FAILED! Please REFRESH the page and try again';
				$status=false;
		}
		if(isset($_POST['movie']['day'])){
			if(!in_array($_POST['movie']['day'], $day_list))
			{
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}else{
				if($_POST['movie']['day']=="MON"){$daylong=" - Monday";}
				else if($_POST['movie']['day']=="TUE"){$daylong=" - Tuesday";}
				else if($_POST['movie']['day']=="WED"){$daylong=" - Wednesday";}
				else if($_POST['movie']['day']=="THU"){$daylong=" - Thursday";}
				else if($_POST['movie']['day']=="FRI"){$daylong=" - Friday";}
				else if($_POST['movie']['day']=="SAT"){$daylong=" - Saturday";}
				else if($_POST['movie']['day']=="SUN"){$daylong=" - Sunday";}
			}
		}else{
				$hacker='BOOKING FAILED! Please REFRESH the page and try again';
				$status=false;
		}
		if(isset($_POST['movie']['hour'])){
			if(!in_array($_POST['movie']['hour'], $hour_list))
			{
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}else{
				if($_POST['movie']['hour']=="T12"){$daytime=" - 12pm";}
				else if($_POST['movie']['hour']=="T15"){$daytime=" - 3pm";}
				else if($_POST['movie']['hour']=="T18"){$daytime=" - 6pm";}
				else if($_POST['movie']['hour']=="T21"){$daytime=" - 9pm";}
			}
		}else{
				$hacker='BOOKING FAILED! Please REFRESH the page and try again';
				$status=false;
		}
		/* Title of booking section */
		$bookingtitle= $movietitle.$daylong.$daytime;
	
		/* Seat Validation */
		if(isset($_POST['seats']['STA'] )){
			if(in_array($_POST['seats']['STA'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['STA'];
				
			}else if($_POST['seats']['STA'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		if(isset($_POST['seats']['STP'] )){
			if(in_array($_POST['seats']['STP'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['STP'];
				
			}else if($_POST['seats']['STP'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		if(isset($_POST['seats']['STC'] )){
			if(in_array($_POST['seats']['STC'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['STC'];
				
			}else if($_POST['seats']['STC'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		if(isset($_POST['seats']['FCA'] )){
			if(in_array($_POST['seats']['FCA'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['FCA'];
				
			}else if($_POST['seats']['FCA'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		if(isset($_POST['seats']['FCP'] )){
			if(in_array($_POST['seats']['FCP'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['FCP'];
				
			}else if($_POST['seats']['FCP'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		if(isset($_POST['seats']['FCC'] )){
			if(in_array($_POST['seats']['FCC'], $seatnumber_list))
			{
				$total=$total+$_POST['seats']['FCC'];
				
			}else if($_POST['seats']['FCC'] !=''){
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
			}
		}
		
		if($total<1){
			$seaterror='Please Select seats';
			$status=false;
		}
		
		
		/* Customer details Validation */
		if(isset($_POST['cust']['name'] )){
			if(!preg_match("/^[a-z ,.'-]+$/i", $_POST['cust']['name'])){
				$errorcustomername="Please enter a valid Western Name.";
				$status=false;
			}
		}
		if(isset($_POST['cust']['email'] )){
			if(!preg_match("/^(([^<>()\[\]\\.,;:\s@']+(\.[^<>()\[\]\\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i", $_POST['cust']['email'])){
				$errorcustomeremail="Please enter a valid Email Address.";
				$status=false;
			}
		}
		if(isset($_POST['cust']['mobile'] )){
			if(!preg_match("/^[0-1]{1}[0-9]{9}$/", $_POST['cust']['mobile'])){
				$errorcustomermobile="Please enter a valid 10 digit Oz number.";
				$status=false;
			}
		}
		if(isset($_POST['cust']['card'] )){
			if(!preg_match("/^[0-9]{14,19}$/", $_POST['cust']['card'])){
				$errorcustomercard="Please enter a valid Card Number.";
				$status=false;
			}
		}
		if(isset($_POST['cust']['name'] )){
			if(!preg_match("/^[a-z ,.'-]+$/i", $_POST['cust']['name'])){
				$errorcustomername="Please enter a valid Western Name.";
				$status=false;
			}
		}
		if(isset($_POST['cust']['expiry'] )){
			
			if(date('Y-m')>=date('Y-m',strtotime($_POST['cust']['expiry']))){
				$errorcustomerexpiry="The card you entered is expired";
				$status=false;
			}
		}
		
		

		if ($status) {
			$_SESSION['cart']=$_POST;
			header("Location: receipt.php");
		} else {
						
		}

	}
    
  
	function preShow( $arr, $returnAsString=false ) {
	  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
	  if ($returnAsString)
		return $ret;
	  else 
		echo $ret; 
	}
	
	function printMyCode() {
	  $lines = file($_SERVER['SCRIPT_FILENAME']);
	  echo "<pre class='mycode'><ol>";
	  foreach ($lines as $line)
		 echo '<li>'.rtrim(htmlentities($line)).'</li>';
	  echo '</ol></pre>';
	}
		
	function php2js( $arr, $arrName ) {
	  $lineEnd="";
	  echo "<script>\n";
	  echo "/* Generated with A4's php2js() function */";
	  echo "  var $arrName = ".json_encode($arr, JSON_PRETTY_PRINT);
	  echo "</script>\n\n";
	}


?>