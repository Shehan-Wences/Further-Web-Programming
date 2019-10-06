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
	

	//Seat pricing given in A2
	$prices = array( 
    
    "MON" => array(	"STA" => array("T12" => 14.00,"T15" => 14.00,"T18" => 14.00,"T21" => 14.00),
					"STP" => array("T12" => 12.50,"T15" => 12.50,"T18" => 12.50,"T21" => 12.50),
					"STC" => array("T12" => 11.00,"T15" => 11.00,"T18" => 11.00,"T21" => 11.00),
					"FCA" => array("T12" => 24.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00),
					"FCP" => array("T12" => 22.50,"T15" => 22.50,"T18" => 22.50,"T21" => 22.50),
					"FCC" => array("T12" => 21.00,"T15" => 21.00,"T18" => 21.00,"T21" => 21.00)), 
    "TUE" => array(	"STA" => array("T12" => 14.00,"T15" => 19.80,"T18" => 19.80,"T21" => 19.80),
					"STP" => array("T12" => 12.50,"T15" => 17.50,"T18" => 17.50,"T21" => 17.50),
					"STC" => array("T12" => 11.00,"T15" => 15.30,"T18" => 15.30,"T21" => 15.30),
					"FCA" => array("T12" => 24.00,"T15" => 30.00,"T18" => 30.00,"T21" => 30.00),
					"FCP" => array("T12" => 22.50,"T15" => 27.00,"T18" => 27.00,"T21" => 27.00),
					"FCC" => array("T12" => 21.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00)), 
    "WED" => array(	"STA" => array("T12" => 14.00,"T15" => 14.00,"T18" => 14.00,"T21" => 14.00),
					"STP" => array("T12" => 12.50,"T15" => 12.50,"T18" => 12.50,"T21" => 12.50),
					"STC" => array("T12" => 11.00,"T15" => 11.00,"T18" => 11.00,"T21" => 11.00),
					"FCA" => array("T12" => 24.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00),
					"FCP" => array("T12" => 22.50,"T15" => 22.50,"T18" => 22.50,"T21" => 22.50),
					"FCC" => array("T12" => 21.00,"T15" => 21.00,"T18" => 21.00,"T21" => 21.00)),
	"THU" => array(	"STA" => array("T12" => 14.00,"T15" => 19.80,"T18" => 19.80,"T21" => 19.80),
					"STP" => array("T12" => 12.50,"T15" => 17.50,"T18" => 17.50,"T21" => 17.50),
					"STC" => array("T12" => 11.00,"T15" => 15.30,"T18" => 15.30,"T21" => 15.30),
					"FCA" => array("T12" => 24.00,"T15" => 30.00,"T18" => 30.00,"T21" => 30.00),
					"FCP" => array("T12" => 22.50,"T15" => 27.00,"T18" => 27.00,"T21" => 27.00),
					"FCC" => array("T12" => 21.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00)),
	"FRI" => array(	"STA" => array("T12" => 14.00,"T15" => 19.80,"T18" => 19.80,"T21" => 19.80),
					"STP" => array("T12" => 12.50,"T15" => 17.50,"T18" => 17.50,"T21" => 17.50),
					"STC" => array("T12" => 11.00,"T15" => 15.30,"T18" => 15.30,"T21" => 15.30),
					"FCA" => array("T12" => 24.00,"T15" => 30.00,"T18" => 30.00,"T21" => 30.00),
					"FCP" => array("T12" => 22.50,"T15" => 27.00,"T18" => 27.00,"T21" => 27.00),
					"FCC" => array("T12" => 21.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00)),
	"SAT" => array(	"STA" => array("T12" => 19.80,"T15" => 19.80,"T18" => 19.80,"T21" => 19.80),
					"STP" => array("T12" => 17.50,"T15" => 17.50,"T18" => 17.50,"T21" => 17.50),
					"STC" => array("T12" => 15.30,"T15" => 15.30,"T18" => 15.30,"T21" => 15.30),
					"FCA" => array("T12" => 30.00,"T15" => 30.00,"T18" => 30.00,"T21" => 30.00),
					"FCP" => array("T12" => 27.00,"T15" => 27.00,"T18" => 27.00,"T21" => 27.00),
					"FCC" => array("T12" => 24.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00)),
	"SUN" => array( "STA" => array("T12" => 19.80,"T15" => 19.80,"T18" => 19.80,"T21" => 19.80),
					"STP" => array("T12" => 17.50,"T15" => 17.50,"T18" => 17.50,"T21" => 17.50),
					"STC" => array("T12" => 15.30,"T15" => 15.30,"T18" => 15.30,"T21" => 15.30),
					"FCA" => array("T12" => 30.00,"T15" => 30.00,"T18" => 30.00,"T21" => 30.00),
					"FCP" => array("T12" => 27.00,"T15" => 27.00,"T18" => 27.00,"T21" => 27.00),
					"FCC" => array("T12" => 24.00,"T15" => 24.00,"T18" => 24.00,"T21" => 24.00))
	);
	
	// Actual movie times given in A2
	$movietimes = array( 
    "ACT" => array( "WED" => "T21","THU" => "T21","FRI" => "T21","SAT" => "T18","SUN" => "T18" ), 
    "RMC" => array( "MON" => "T18","TUE" => "T18","SAT" => "T15","SUN" => "T15" ), 
    "ANM" => array( "MON" => "T12","TUE" => "T12","WED" => "T18","THU" => "T18","FRI" => "T18","SAT" => "T12","SUN" => "T12"),
	"AHF" => array( "WED" => "T12","THU" => "T12","FRI" => "T12","SAT" => "T21","SUN" => "T21")
	); 
	
	$_SESSION['prices']=$prices;
	
	if (isset($_POST['order'])) {
		$_SESSION['cart']='';
		$movietitle='';
		$daylong='';
		$daytime='';

		/* Hidden fields Validation */
		if(isset($_POST['movie']['id'])){
			if(!in_array($_POST['movie']['id'], array_keys($movietimes)))
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
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
		}
		if(isset($_POST['movie']['day']) && $hacker != "BOOKING Failed! Stop Hacking" ){
			if(!in_array($_POST['movie']['day'], array_keys($movietimes[$_POST['movie']['id']])))
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
				$hacker='BOOKING Failed! Stop Hacking';
				$status=false;
		}
		if(isset($_POST['movie']['hour']) && $hacker != "BOOKING Failed! Stop Hacking"){
		if($_POST['movie']['hour']!= $movietimes[$_POST['movie']['id']][$_POST['movie']['day']])
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
				$hacker='BOOKING Failed! Stop Hacking';
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
			
			$_SESSION['cust']=array_slice($_POST['cust'], 0, 3, true) ;
			$_SESSION['movie']=$_POST['movie'];
			$_SESSION['seats']=$_POST['seats'];
			
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