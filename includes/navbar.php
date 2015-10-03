<nav class="navbar navbar-default navbar-static-top" style="height:40px;background-color:#002D62;">
    <div class="container-fluid">
        <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2" style="padding-top:0px;color:white;">
                <span class="sr-only">Toggle navigation</span>
                <span style="color:white;" class="icon-bar"></span>
                <span style="color:white;" class="icon-bar"></span>
                <span style="color:white;" class="icon-bar"></span>
            </button>
            
            <a class="navbar-brand" href="index.php" style="padding-top:10px;color:white;">Welcome <?php echo $_SESSION['first_name']?></a>
            
            <p style="color:white;font-size:20px;text-align:right;padding-top:10px;">$<?php echo $_SESSION['promise_cash'];?></p>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
            </ul>
        </div>
    </div>
</nav>
