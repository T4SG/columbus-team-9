<style>
	.btn-info {
		color:#FFF;
		 margin-bottom: 10px;
	}
	
	.btn {
		background-color: #1DC7EA;
	}
</style>

<?php
/**
 * Created by PhpStorm.
 * User: montanawong
 * Date: 10/3/15
 * Time: 02:50
 */
session_start();
include_once('../php/functions.php');
$student_id = $_SESSION['student_id'];
include('../includes/header.php');
?>


<body>

<div class="wrapper">
    <?php include('../includes/sidebar.php'); ?>

    <div class="main-panel">
        <?php include('../includes/navbar.php');?>

	<div class="container">
		<div class="title">
			<h2>Rewards</h2>
		</div>
		<!--<div class="boxA">


			<div class="box margin-btm">
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
			</div>

		</div>-->
		<div class="boxB">
            <?php echo getRewardInfo($_SESSION['student_id']);?>
		</div>

	</div>
</div>

</body>
</html>
