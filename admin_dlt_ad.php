<?php
	include "conn.php";
	session_start();
    $conn = connect::connected(); 
     $adId = $_GET['adId'];
 
      $query = $conn->query("delete from postad where postId=$adId");
	echo "<script>window.location='adminallproduct.php?submit=deleted';</script>";

?>