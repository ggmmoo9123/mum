<?php 
//$basic_url = "http://localhost:78/projects/UE%20Web%20work/proc/";
// $host = $_SERVER['HTTP_HOST'];
// $basic_url = "http://".$host."/beta/";

include '../../srv-conn.php'; 


$ubase="base_url"; 
        
$sql_url="select * from base_url where type='$ubase'";  

$result_url=mysqli_query($con,$sql_url);

$row_url= (mysqli_fetch_array($result_url,MYSQLI_ASSOC));
$basic_url =  $row_url['urlname'];


?>

<meta name=”robots” content=”index,follow”>



	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">


	<!-- Animate.css -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="https://ue.edu.pk/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/owl.carousel.min.css">
	<link rel="stylesheet" href="https://ue.edu.pk/css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="https://ue.edu.pk/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="https://ue.edu.pk/css/style.css">

	<!-- Modernizr JS -->
	<script src="https://ue.edu.pk/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="<?php //echo $basic_url; ?>js/respond.min.js"></script>
	<![endif]-->

	