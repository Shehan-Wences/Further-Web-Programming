<?php
session_start();
  if (!isset($_SESSION['cart'])) {
   	header("Location: index.php");
  } else {
	
	$date=date('Y-m-d');
	$name=$_SESSION['cart']['cust']['name'];
	$email=$_SESSION['cart']['cust']['email'];
	$mobile=$_SESSION['cart']['cust']['mobile'];
	$movie=$_SESSION['cart']['movie']['id'];
	$day=$_SESSION['cart']['movie']['day'];
	$hour=$_SESSION['cart']['movie']['hour'];
	
	$staPrice=$_SESSION['prices'][$day]['STA'][$hour];
	if($_SESSION['cart']['seats']['STA']==''){
		$staQty=0;
	}else{
		$staQty=$_SESSION['cart']['seats']['STA'];
	}
	
	$stpPrice=$_SESSION['prices'][$day]['STP'][$hour];
	if($_SESSION['cart']['seats']['STP']==''){
		$stpQty=0;
	}else{
		$stpQty=$_SESSION['cart']['seats']['STP'];
	}
	
	$stcPrice=$_SESSION['prices'][$day]['STC'][$hour];
	if($_SESSION['cart']['seats']['STC']==''){
		$stcQty=0;
	}else{
		$stcQty=$_SESSION['cart']['seats']['STC'];
	}
	
	$fcaPrice=$_SESSION['prices'][$day]['FCA'][$hour];
	if($_SESSION['cart']['seats']['FCA']==''){
		$fcaQty=0;
	}else{
		$fcaQty=$_SESSION['cart']['seats']['FCA'];
	}
	
	$fcpPrice=$_SESSION['prices'][$day]['FCP'][$hour];
	if($_SESSION['cart']['seats']['FCP']==''){
		$fcpQty=0;
	}else{
		$fcpQty=$_SESSION['cart']['seats']['FCP'];
	}
	
	$fccPrice=$_SESSION['prices'][$day]['FCC'][$hour];
	if($_SESSION['cart']['seats']['FCC']==''){
		$fccQty=0;
	}else{
		$fccQty=$_SESSION['cart']['seats']['FCC'];
	}
	
	$total=($staPrice*$staQty)+($stpPrice*$stpQty)+($stcPrice*$stcQty)+($fcaPrice*$fcaQty)+($fcpPrice*$fcpQty)+($fccPrice*$fccQty);
	
	$bookingfile = fopen("bookings.csv", "a") or die("Unable to open file!");
	
	//$txt = "Date\tName\tEmail\tMobile\tMovieID\tDay\tHour\tSTA\tQty\tSTP\tQty\tSTC\tQty\tFCA\tQty\tFCP\tQty\tFCC\tQty\tTotal".PHP_EOL;
	//fwrite($bookingfile, $txt);
	//$txt = $date."\t".$name."\t".$email."\t".$mobile."\t".$movie."\t".$day."\t".$hour."\t".$staPrice."\t".$staQty."\t".$stpPrice."\t".$stpQty."\t".$stcPrice."\t".$stcQty."\t".$fcaPrice."\t".$fcaQty."\t".$fcpPrice."\t".$fcpQty."\t".$fccPrice."\t".$fccQty."\t".$total.PHP_EOL;
	//fwrite($bookingfile, $txt);
	//$txt =  array("Date","Name","Email","Mobile","MovieID","Day","Hour","STA","Qty","STP","Qty","STC","Qty","FCA","Qty","FCP","Qty","FCC","Qty","Total");
	//fputcsv($bookingfile, $txt);
	$txt =  array($date,$name,$email,$mobile,$movie,$day,$hour,$staPrice,$staQty,$stpPrice,$stpQty,$stcPrice,$stcQty,$fcaPrice,$fcaQty,$fcpPrice,$fcpQty,$fccPrice,$fccQty,$total);
	fputcsv($bookingfile, $txt);
	
	
	
	fclose($bookingfile);	

	
	
	
	
  }
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{
		margin: 30mm 45mm 30mm 45mm; 
		background:green;
    } 
@media print {
    body{
        width: 21cm;
        height: 29.7cm;
        margin: 30mm 45mm 30mm 45mm; 
		background:green;
    } 
}
</style>
<title>Customer Invoice</title>
</head>
<body>

<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>


