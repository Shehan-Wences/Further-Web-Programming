<?php
session_start();
  if (!isset($_SESSION['cart'])) {
   	header("Location: index.php");
  } else {
 //   create receipt with
 //     SESSION data
 //   stay on this page  
  }
?>
