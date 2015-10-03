<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <script src="../assets/js/chart.js"></script>

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>

  <div class="wrapper">
      <?php include('../includes/sidebar.php');?>

      <div class="main-panel">
          <?php include('../includes/navbar.php');?>

          <div class="content" style="height:90%;padding:0px;">
            <div id="menu-area" style="padding:0px;">
                <p style="font-size:20px;">Student Attendance by Month</p>
                <canvas id="myChart1" width="400" height="300"></canvas>
                <canvas id="myChart2" width="400" height="300"></canvas>
            </div>
          </div>

      </div>
  </div>

  <script>
    var ctx = document.getElementById("myChart1").getContext("2d");

    var data1 = {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [
        {
            label: "Attendence",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [65, 59, 80, 81, 70, 63, 64, 78]
        },
      ]
    };
    var myLineChart = new Chart(ctx).Line(data1);
    ctx = document.getElementById("myChart2").getContext("2d");

    var data2 = [
    {
        value: 300,
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Red"
    },
    {
        value: 50,
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Green"
    },
    {
        value: 100,
        color: "#FDB45C",
        highlight: "#FFC870",
        label: "Yellow"
    }
  ]

    var myPieChart = new Chart(ctx).Pie(data2);

  </script>
</body>
</html>
