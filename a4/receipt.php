<?php
session_start();
  if (!isset($_SESSION['cust'])) {
   	header("Location: index.php");
  } else {
	
	$invoiceNo=rand();
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
	$noSeats=$staQty+$stpQty+$stcQty+$fcaQty+$fcpQty+$fccQty;
	$totalcal=($staPrice*$staQty)+($stpPrice*$stpQty)+($stcPrice*$stcQty)+($fcaPrice*$fcaQty)+($fcpPrice*$fcpQty)+($fccPrice*$fccQty);
	$total=sprintf("%.2f", $totalcal);
	
	$cells = array_merge(  [ $date ], $_SESSION['cust'], $_SESSION['movie'], $_SESSION['seats'] ,(array) $total);
	if($_SESSION['status']=="ready"){
	$bookingfile = fopen("bookings.txt", "a") or die("Unable to open file!");
	fputcsv($bookingfile, $cells, "\t");
	fclose($bookingfile);	
	$_SESSION['status']="";
	}
  	$movietitle= array( 
    "ACT" => "Avengers Endgame", 
    "RMC" => "Top End Wedding", 
    "ANM" => "Dumbo",
	"AHF" => "The Happy Prince" ); 
	
	$movietimes= array( 
    "T12" => "12PM", 
    "T15" => "3PM", 
    "T18" => "6PM",
	"T21" => "9PM" );
	
	$moviedays= array( 
    "MON" => "Monday", 
    "TUE" => "Tuesday", 
    "WED" => "Wednesday",
	"THU" => "Thursday", 
    "FRI" => "Friday", 
    "SAT" => "Saturday",
	"SUN" => "Sunday" );
	
	?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Arapey|Roboto+Condensed&display=swap');
	body{
		font-family: 'Roboto Condensed', sans-serif;
		background: url(../../media/a.png);
    } 
@media print {
    body{
       width: 21cm;
        height: 29.7cm;
       
		background:white; 
    } 
	#page-wrap{
		max-width: 21cm;
        max-height: 29.7cm;
		background:white; 
		box-shadow: none;
		page-break-after: always;
	}
	
	.tickets{
		 width:100%; 
		height:100%;
		
		page-break-after: always;
		
	}
}
@media screen and (min-width: 1024px) {
	#page-wrap { max-width: 725px; }
}
#page-wrap { width: 100%; margin: 0 auto;border: 1px solid lightgrey;padding:20px;background:white;box-shadow: 0px 0px 9px 8px rgba(0, 0, 0, 0.4);margin-bottom:20px;}
h4{margin:5px;}
table { border-collapse: collapse; }
table td, table th { border: 1px solid black; padding: 5px; }
#header { height: 25px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white;  padding: 8px 0px; }
#address { width: 250px; height: 100px; float: left; }
#customer { overflow: hidden; }
#logo { text-align: right; float: right; position: relative; margin-top: 0px; border: 1px solid #fff; max-width: 240px; max-height: 100px; overflow: hidden; }
#customer-title { font-size: 20px; float: left; }
#stable { margin-top: 1px; width: 300px; float: right; }
#stable td { text-align: right;  }
.heading { text-align: left!important; background: lightgrey; }
#stable td textarea { width: 100%; height: 20px; text-align: right; }
#items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
#items th { background: lightgrey; }
#items tr.item-row td { border: 0px solid; vertical-align: top; text-align: center;}
#items tr.item-row { border: 1px solid; }
#items td.description { width: 40%; }
#items td.cost { width: 20%; }
#items td.qty { width: 20%; }
#items td.price { width: 20%; text-align: right !important; }
#items td.blank { border: 0; }
#items td.total {text-align: right !important; }
#items tr:nth-child(odd) { background-color: lightgrey;}
.tickets{text-align:left;background: url(../../media/tickets.png); width: 620px; height: 877px;background-size: 100% 100%; margin:20px;display: inline-block;}
.container{display: table;text-align: center;width: 100%;font-family: 'Arapey', serif;}
.ticket-info{ padding: 50px 40px 10px 40px;}
.ticket-footer{ padding: 0px 30px 0px 30px; display:flex;  flex-flow: row wrap; justify-content: space-around;}
.tickets img{width:100%;}
.footer-items{width:30%; text-align:center;}
</style>
<title>Customer Invoice</title>
</head>
<body>

	<div id="page-wrap">
		<h2 id="header">INVOICE</h2>
		<div id="identity">
            <p id="address">LUNARDO PLC
				29 Bulmans Road
				Melton South,VIC 3336
				Phone: (+61)  439 469 582
			</p>
            <div >
              <img id="logo" src="../../media/lunardo-Logo1.png" alt="logo" />
            </div>
		</div>
		<div style="clear:both"></div>
		<div id="customer">
            <div id="customer-title">
			<h4>Bill To:</h4>
			<p><?php echo $_SESSION['cust']['name'];?></p>
			<p><?php echo $_SESSION['cust']['email'];  ?></p>
			<p><?php echo $_SESSION['cust']['mobile'];?></p>
			</div>
            <table id="stable">
                <tr>
                    <td class="heading">Invoice #</td>
                    <td><p><?php echo $invoiceNo; ?></p></td>
                </tr>
                <tr>
                    <td class="heading">Date</td>
                    <td><p ><?php echo date('y/m/d'); ?></p></td>
                </tr>
				 <tr>
                    <td class="heading">Total</td>
                    <td><p >$<?php echo $total; ?></p></td>
                </tr>		
            </table>
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Description</th>
		      <th>Ticket Price</th>
		      <th>Quantity</th>
		      <th>Price</th>
		  </tr>
		  <?php foreach($_SESSION ['seats'] as $key => $value) {
			if($_SESSION['seats'][$key]!=""){
		  ?>
		  <tr class="item-row">
		      <td class="description"><p><?php echo $movietitle[$_SESSION ['movie']['id']]." - ".$moviedays[$_SESSION ['movie']['day']]." - ".$movietimes[$_SESSION ['movie']['hour']]." - Seat Type : ".$key; ?></p>
			  </td>
		      
		      <td class="cost"><p>$<?php echo sprintf("%.2f", $_SESSION['prices'][$_SESSION['movie']['day']][$key][$_SESSION['movie']['hour']]);;?></p></td>
		      <td class="qty"><p><?php echo $_SESSION['seats'][$key]; ?></p></td>
			  <td class="price"><p>*$<?php echo sprintf("%.2f", ($_SESSION['prices'][$_SESSION['movie']['day']][$key][$_SESSION['movie']['hour']])*($_SESSION['seats'][$key])) ;?></p></td>
		  </tr>
		  <?php }} ?>
		  <tr style="background:white;">
		      <td colspan="2" class="blank"> </td>
		      <td colspan="1" class="heading" >Subtotal</td>
		      <td colspan="1" class="total"><p>$<?php echo sprintf("%.2f", $total-($total/11)); ?></p></td>
		  </tr>
		  <tr style="background:white;">

		      <td colspan="2" class="blank"> </td>
		      <td colspan="1" class="heading">GST (1/11)</td>
		      <td colspan="1" class="total"><p>$<?php echo sprintf("%.2f", $total/11); ?></p></td>
		  </tr>
		  <tr style="background:white;">
		      <td colspan="2" class="blank"><p>* marked items are GST included prices.</p> </td>
		      <td colspan="1" class="heading" >Total</td>
		      <td colspan="1" class="total"><p>$<?php echo $total; ?></p></td>
		  </tr>
		
		</table>
		
		
	
	</div>
	<div class="container">
	
<?php 
			$ticketno=0;
			foreach($_SESSION ['seats'] as $key => $value) {
			if($_SESSION['seats'][$key]!=""){ 
			$i = 0; 
			while($i < $_SESSION['seats'][$key]){ 
			$i++;
			$ticketno++;
			
			
			?>
				
				
		<div class="tickets">
		<div class="ticket-info">
		<h4>LUNARDO CINEMA PRESENTS</h4>
		<h1><?php echo strtoupper($movietitle[$_SESSION ['movie']['id']]); ?></h1>
		</div>
		<img src="../../media/<?php echo $_SESSION ['movie']['id']; ?>.png">
		<div class="ticket-footer">
		<div class="footer-items">
		<h2>TICKET ID</h2>
		<h3><?php echo $invoiceNo; ?> [<?php echo $ticketno;?> of <?php echo $noSeats;?>]</h3>
		</div>
		<div class="footer-items">
		<h2>PURCHASED</h2>
		<h3><?php echo date('Y-M-d');?></h3>
		</div>
		<div class="footer-items" >
		<h2>SEAT </h2>
		<h3 ><?php echo $key;?></h3>
		</div>
		<div class="footer-items">
		<h2>PRICE</h2>
		<h3>$<?php echo sprintf("%.2f", ($_SESSION['prices'][$_SESSION['movie']['day']][$key][$_SESSION['movie']['hour']])) ;?></h3>
		</div>
		<div class="footer-items">
		<h2>DAY</h2>
		<h3><?php echo strtoupper($moviedays[$_SESSION ['movie']['day']]); ?></h3>
		</div>
		<div class="footer-items">
		<h2>TIME</h2>
		<h3><h3><?php echo strtoupper($movietimes[$_SESSION ['movie']['hour']]); ?></h3></h3>
		</div>
		</div>
		</div>

	<?php
	}
	} 
	} 
	?>
	
	
	</div>
	
</body>
</html>

<?php } ?>
