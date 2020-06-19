<?php
session_start();

				//	 including
          include_once "Db_info.php";

         include_once "Border.php";

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="moeinh77" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>admin manegment panel</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php
  Border::ShowHeader($_SESSION["UserName"]);

?>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Dashboard</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     MAIN MENU
                    </div>
                </div>

            </div>
            <div class="row">
                <a href="reports.php">
                 <div class="col-md-3 col-sm-3 col-xs-6" type="button">
                    <div class="dashboard-div-wrapper bk-clr-one">
                        <i  class="fa fa-search dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                              <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="99" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                              </div>

                        </div>
                         <h5>Reports</h5>
                    </div>
                </div>
            </a>
                <!-- Insert -->
                <a href="Insert.php">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-four">
                        <i  class="fa fa-building-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                          </div>
                        </div>
                         <h5>Insert</h5>
                    </div>
                </div>
                </a>
                <!-- end of Insert -->
                <a href="update.php">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-three">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>

                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
  </div>

</div>

                         <h5>Update </h5>
                    </div>
                </div>
                </a>
                <a href="delete.php">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa  fa-trash-o dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
  </div>

</div>
                         <h5>Delete </h5>
                    </div>
                </div>
				</a>
            </div>


        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->


    <?php

	 Border::ShowFooter();

    ?>

</body>
</html>
