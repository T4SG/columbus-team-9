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
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <?php
                                if(isset($_GET['action']) && $_GET['action'] == 'YouToldLebron'){
                                    echo '<div class="alert alert-success">
                                         <strong>Success!</strong> Thanks for staying on track!
                                        </div>';
                                }
                                ?>
                                <h4 class="title">Keeping your promises</h4>
                            </div>
                            <div class="content">
                                <form action="report.php?action=YouToldLebron" method="post">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>What I promised to do</label>
                                                <input type="text" class="form-control"  placeholder="Went to Math class" value="" name="activity_name">
                                                <label for="new_activity">Date: <em>(MM/DD/YYYY)</em></label>
                                                <input type="date" value="<?php echo date('Y-m-d')?>" name="date" id="date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group" >
                                                <label>Did I do it?</label>
                                                <input type="radio" class="form-control" value="Yes" name="did_activity" onclick="toggle('did_activity')"> Yes
                                                <input type="radio" class="form-control" value="No" name="did_not_do_activity" onclick="toggle('did_not_do_activity')"> No
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="display:none;" id="did_not_do_activity">
                                                <label for="excuse">Why didn't you accomplish it?</label>
                                                <input type="text" class="form-control" name='excuse' placeholder="Because..." >
                                                <label for="improvement">How will you improve?</label>
                                                <input type="text" class="form-control" name='improvement 'placeholder="Next time I..." onkeyup="toggle('submit')">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group" style="display:none;" id="did_activity">
                                                <label for="excuse">Great thanks for keeping your side of the promise! Name one thing your learned!</label>
                                                <input type="text" class="form-control" name='excuse' placeholder="Did you know that Penguins have knees?"  onkeyup="toggle('submit')">
                                            </div>
                                        </div>

                                        <div style="display:none;" id='submit'><input type="submit" class="btn btn-info btn-fill pull-right">Tell Lebron!</input></div>
                                    </div>

                                    <!--<div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" placeholder="Company" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                                            </div>
                                        </div>
                                    </div>-->
                                    <!--
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" placeholder="City" value="Mike">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" placeholder="Country" value="Andrew">
                                            </div>
                                        </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Did you move? If you did let Lebron know!</label>
                                            <input type="text" class="form-control" placeholder="New Address" name="new_address">
                                        </div>
                                    </div>-->
                                    </form>
                            </div>

                        </div>
                    </div>
                </div

            </div>
        </div>
    </div>


</div>
</div>


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
<script>
    function toggle(id)
    {
        var e = document.getElementById(id);
        if (e.style.display == 'block' || e.style.display=='')
        {
            e.style.display = 'none';
        }
        else
        {
            e.style.display = 'block';
        }
    }
</script>
</html>