<?php

session_start();
include_once('../php/functions.php');
include('../includes/header.php');
?>

<body>

<div id="page">
	<div class="container">
		<div class="title">
			<h2>Rewards</h2>
			<p>Place holder</p>
		</div>
		<div class="boxA">

            <?php// echo getRewardInfo($_SESSION['student_id']);?>
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
            <?php echo getRewardInfo($_SESSION['student_id']);?>
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
