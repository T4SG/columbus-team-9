<?php

session_start();
include_once('../php/functions.php');
include('../includes/header.php');
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : TailPiece
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130902

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>

<div id="page">
	<div class="container">
		<div class="title">
			<h2>Rewards</h2>
			<p>Place holder</p>
		</div>
		<div class="boxA">

            <?php echo getRewardInfo($_SESSION['student_id']);?>
			<!--<div class="box margin-btm">
				<img src="images/backpack.jpg" width="320"  alt="" />
				<div class="details">
					<p>Backpack</p>
				</div>
				<a class="button">$50</a>
			</div>
			<div class="box margin-btm">
				<img src="images/football.jpg" width="320" alt="" />
				<div class="details">
					<p>Football</p>
				</div>
				<a class="button">$100</a>
			</div>
			<div class="box">
				<img src="images/ipad.jpg" width="320" alt="" />
				<div class="details">
					<p>iPad</p>
				</div>
				<a class="button">$150</a>
			</div>-->

		</div>
		<div class="boxB">
			<div class="box">
				<img src="images/macbook.png" width="320" alt="" />
				<div class="details">
					<p>MacBook</p>
				</div>
				<a class="button">$350</a>
			</div>
			<div class="box">
				<img src="images/iwatch.jpg" width="320"  alt="" />
				<div class="details">
					<p>iWatch</p>
				</div>
				<a class="button">$250</a>
			</div>



		</div>

	</div>
</div>

</body>
</html>
