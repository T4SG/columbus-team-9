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

  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

  <script src="../assets/js/chart.js"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class="wrapper">
      <div class="main-panel">

        <nav class="navbar navbar-default navbar-static-top" style="height:50px;background-color:#002D62;">
            <div class="container-fluid">
                <p style="color:white;font-size:30px;float:left;margin-left:20px;">Metrics<p>
                <div style="padding-top:3px;">
                  <a style="color:white;font-size:20px;float:right;" href="login.html">Logout</a>
                </div>
            </div>
        </nav>

      <div class="main-panel">

          <div class="content" style="height:90%;padding:0px;">
            <div id="menu-area" style="padding:0px;">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-6">
                    <p style="font-size:20px;padding-left:110px;">Student Attendance by Month</p>
                    <canvas id="myChart1" width="330" height="300" style="padding-left:90px;"></canvas>
                  </div>
                  <div class="col-sm-6">
                    <p style="font-size:20px;padding-left:80px;">Event Participation</p>
                    <canvas id="myChart2" width="300" height="300" style="padding-left:30px;"></canvas>
                  </div>
                </div>
              </div>
              <div class="container" style="padding-top:20px;">
                <h2>Student Activities</h2>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Firstname</th>
                      <th>Lastname</th>
                      <th>Activity</th>
                      <th>Approved</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>Attendance</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>Volunteer Event</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>Attendance</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                    <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>Attendance</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                    <tr>
                      <td>Mary</td>
                      <td>Moe</td>
                      <td>Exam Grade (95%)</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                    <tr>
                      <td>July</td>
                      <td>Dooley</td>
                      <td>Volunteer Event</td>
                      <td>
                          <input type="checkbox">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div style="margin:10px;margin-right:130px;float:right;">
                <input type="submit" value="Enter Information">
              </div>
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

    options = {
      animationSteps : 50,
    }

    var myPieChart = new Chart(ctx).Pie(data2, options);

  </script>


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

</body>
</html>
