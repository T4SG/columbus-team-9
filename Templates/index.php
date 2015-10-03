<?php
session_start();
include('../includes/header.php');
?>


<body>

<div class="wrapper">
    <?php include('../includes/sidebar.php');?>

    <div class="main-panel">
        <?php include('../includes/navbar.php');?>

        <div class="content" style="height:90%;padding:0px;">
          <div id="lebron-area"style="padding:10px;">
              <a class="twitter-timeline" href="https://twitter.com/KingJames" data-widget-id="650175493866684416" data-chrome="nofooter noheader noborder transparent">>Tweets by @KingJames</a>
          </div>
          <div id="menu-area" style="padding:0px;">
              <a href="report.php">
                <div class="menu-box" id="top-left">
                  <p class="menu-title">REPORTING</p>
                  <img src="../assets/img/checkmark21.png" style="width:100px;height:100px;">
                </div>
              </a>
              <a href="profile.php">
                <div class="menu-box" id="top-right">
                  <p class="menu-title">ME</p>
                  <img src="../assets/img/user168.png" style="width:100px;height:100px;">
                </div>
              </a>
              <a href="rewards.php">
                <div class="menu-box" id="bottom-left">
                  <p class="menu-title">REWARDS</p>
                  <img src="../assets/img/premium1.png" style="width:100px;height:100px;">
                </div>
              </a>
              <a href="fullcalendar.php">
                <div class="menu-box" id="bottom-right">
                  <p class="menu-title">CALENDAR</p>
                  <img src="../assets/img/calendar146.png" style="width:100px;height:100px;">
                </div>
              </a>
          </div>
        </div>

    </div>
</div>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

</body>

    <!--   Core JS Files   -->
    <script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="../assets/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="../assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="../assets/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

</html>
