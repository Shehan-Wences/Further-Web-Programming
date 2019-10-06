<?php
session_start();
  if (!isset($_SESSION['cust'])) {
   	header("Location: index.php");
  } else {
	
	$date=date('d/m h:i');
	$name=$_SESSION['cust']['name'];
	$email=$_SESSION['cust']['email'];
	$mobile=$_SESSION['cust']['mobile'];
	$movie=$_SESSION['movie']['id'];
	$day=$_SESSION['movie']['day'];
	$hour=$_SESSION['movie']['hour'];
	
	$staPrice=$_SESSION['prices'][$day]['STA'][$hour];
	if($_SESSION ['seats']['STA']==''){
		$staQty=0;
	}else{
		$staQty=$_SESSION ['seats']['STA'];
	}
	
	$stpPrice=$_SESSION['prices'][$day]['STP'][$hour];
	if($_SESSION['seats']['STP']==''){
		$stpQty=0;
	}else{
		$stpQty=$_SESSION ['seats']['STP'];
	}
	
	$stcPrice=$_SESSION['prices'][$day]['STC'][$hour];
	if($_SESSION ['seats']['STC']==''){
		$stcQty=0;
	}else{
		$stcQty=$_SESSION ['seats']['STC'];
	}
	
	$fcaPrice=$_SESSION['prices'][$day]['FCA'][$hour];
	if($_SESSION ['seats']['FCA']==''){
		$fcaQty=0;
	}else{
		$fcaQty=$_SESSION ['seats']['FCA'];
	}
	
	$fcpPrice=$_SESSION['prices'][$day]['FCP'][$hour];
	if($_SESSION ['seats']['FCP']==''){
		$fcpQty=0;
	}else{
		$fcpQty=$_SESSION ['seats']['FCP'];
	}
	
	$fccPrice=$_SESSION['prices'][$day]['FCC'][$hour];
	if($_SESSION ['seats']['FCC']==''){
		$fccQty=0;
	}else{
		$fccQty=$_SESSION ['seats']['FCC'];
	}
	
	$total=($staPrice*$staQty)+($stpPrice*$stpQty)+($stcPrice*$stcQty)+($fcaPrice*$fcaQty)+($fcpPrice*$fcpQty)+($fccPrice*$fccQty);
	$cells = array_merge(  [ $date ], $_SESSION['cust'], $_SESSION['movie'], $_SESSION['seats'] ,(array) $total);
	$bookingfile = fopen("bookings.txt", "a") or die("Unable to open file!");
	fputcsv($bookingfile, $cells, "\t");
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


