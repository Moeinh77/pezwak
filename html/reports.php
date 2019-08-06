<?php
   session_start();

				//	 including
      include_once "Db_info.php";
      // include_once "Customer.php";
        include_once "Border.php";
        $mysqli = new mysqli($Server, $UserName, $Password, $DBname);


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

</head>
<body>
<?php
  Border::ShowHeader($_SESSION["UserName"] , $_SESSION["RSname"]);

?>

         <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Reports</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     Reports
                    </div>
                </div>
            </div>

     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Info BOX
                        </div>
                        <div class="panel-body">

                            <ul class="nav nav-pills">

                              <li class=""><a href="#product-pills" data-toggle="tab">Products</a>
                              </li>
                                <li class=""><a href="#Debts-pills" data-toggle="tab">Debts</a>
                                </li>

                                <li class=""><a href="#bug-pills" data-toggle="tab">Reported Bugs</a>
                                </li>

                            </ul>

                            <div class="tab-content">


                                <div class="tab-pane fade" id="Debts-pills">

                                     <?php
                                            $today=date("Y-m-d",time());
                                           $q1 =  "SELECT * From Purchase Where DueDate < '$today' ;";
                                           $result = $mysqli->query($q1);
                                           echo '<br><br>';
                                           echo '<form class="form" method="post" action="">
                                           <div class="form-group col-md-3 ">
                                              <select name="ProductSerialNmber-CustomerName" class="form-control" style="width: 300px;" id="sel1">    "';
                                                while ($temp = $result->fetch_assoc() ){
                                                  $pc=$temp['ProductSerialNmber'].','.$temp['CustomerName'];
                                                  echo "<option value='".$pc."'>"
                                                  .$temp['ProductName'].' sold to : '.$temp['CustomerName'].'  |  Due date: '.$temp['DueDate']."</option>";
                                                }
                                              echo "</select></div>";

                                              // echo '<br><div class="form-group col-md-4 " >
                                              // <button type="submit" class="btn btn-primary" name="DeletePurchase"  id="emam" value="DeletePurchase" ></button>
                                              //         </div>';
                                              echo'         </form>';
		                              // //UpdateBorder::ShowRentFormInsert();

                                        ?>


                                </div>


                                <div class="tab-pane fade" id="product-pills">
                                  <?php

                                        $q1 =  "SELECT * From Product ;";
                                        $result = $mysqli->query($q1);
                                        echo '<br><br>';
                                       echo '<form class="form" method="post" action="">
                                       <div class="form-group col-md-3 ">
                                          <select name="SerialNumber" class="form-control" style="width: 300px;" id="sel1">    "';
                                            while ($temp = $result->fetch_assoc() ){
                                              echo "<option value='".$temp['SerialNumber']."'>".$temp['Name']."</option>";
                                            }
                                          echo "</select></div>";

                                          // echo '<br><div class="form-group col-md-4 " >
                                          // <button type="submit" class="btn btn-primary" name="DeleteProduct"  id="emam" value="DeleteProduct" ></button>
                                          //         </div>';
                                            echo'       </form>';
                               // //UpdateBorder::ShowRentFormInsert();

                                     ?>
                                	</div>



                                <div class="tab-pane fade " id="purchase-pills">

                                  <?php

                                        $q1 =  "SELECT * From Purchase ;";
                                        $result = $mysqli->query($q1);
                                        echo '<br><br>';
                                       echo '<form class="form" method="post" action="">
                                       <div class="form-group col-md-3 ">
                                          <select name="ProductSerialNmber-CustomerName">"';
                                            while ($temp = $result->fetch_assoc() ){
                                              $pc=$temp['ProductSerialNmber'].','.$temp['CustomerName'];
                                              echo "<option value='".$pc."'>"
                                              .$temp['ProductName'].' sold to : '.$temp['CustomerName']."</option>";
                                            }
                                          echo "</select></div>";

                                          echo '<br><div class="form-group col-md-4 " >
                                          <button type="submit" class="btn btn-primary" name="DeletePurchase"  id="emam" value="DeletePurchase" ></button>
                                                  </div>
                                                   </form>';
                               // //UpdateBorder::ShowRentFormInsert();

                                     ?>
                                </div>

                                <div class="tab-pane fade " id="bug-pills">

                                  <?php

                                        $q1 =  "SELECT * From Bugs ;";
                                        $result = $mysqli->query($q1);
                                        echo '<br><br>';
                                       echo '<form class="form" method="post" action="">
                                       <div class="form-group col-md-3 ">
                                          <select name="ProductSerialNmber-CustomerName">"';
                                            while ($temp = $result->fetch_assoc() ){
                                              $pc=$temp['reporter'].','.$temp['report'];
                                              echo "<option value='".$pc."'>"
                                              .$temp['reporter'].' : '.$temp['report']."</option>";
                                            }
                                          echo "</select></div>";

                                          echo '<br><div class="form-group col-md-4 " >
                                                  </div>
                                                   </form>';
                                // //UpdateBorder::ShowRentFormInsert();

                                     ?>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->


            <!-------------------------------------------- -->

            <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {


			 		//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['DeleteCustomer']))
					{
            // echo 'hi';
          // $customer=new Customer($_POST['UserName'],$_POST['Phone'],$_POST['Address']);
          // echo $customer;
          // echo $_POST['CustomerName'];
          // $Customername_=$_POST['CustomerName'];
          //
          //
          // $q =  " From Customer Where Name='$Customername_';";
          //
          //
					// 		$result=$mysqli->query( $q ) ;
          //
					// 		 if ($result === TRUE) {
          //        echo "Record Deleted successfully";
					// 		} else {
   				// 			 echo "Error: " . $sql . "<br>" . $mysqli->error;
					// 		}
          //

			 		}

					//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['DeleteProduct']))
					{

					// $SerialNumber_  =(int)$_POST['SerialNumber'];
          //
          // $q =  " From Product Where SerialNumber='$SerialNumber_';";
          //
          //
					// 		$result=$mysqli->query( $q ) ;
          //
					// 		 if ($result === TRUE) {
          //        echo "Record Deleted successfully";
					// 		} else {
   				// 			 echo "Error: " . $sql . "<br>" . $mysqli->error;
					// 		}


			 		}

			 		//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['DeletePurchase']))
					{

        	// $arr_=explode(',',$_POST['ProductSerialNmber-CustomerName'],2);
          // echo $arr_[1];
					// $ProductSerialNmber_  = (int)$arr_[0];
          // $CustomerName_  = $arr_[1];
          //
          //
					// $q = " FROM Purchase
          // Where ProductSerialNmber='$ProductSerialNmber_' AND CustomerName='$CustomerName_' ";
          // echo $q;
					// 		$result=$mysqli->query( $q ) ;
          //
					// 		 if ($result === TRUE) {
          //        echo "Record Deleted successfully";
					// 		} else {
   				// 			 echo "Error: " . $sql . "<br>" . $mysqli->error;
					// 		}
          //
          //
			 		}

					}





            ?>

             <!-------------------------------------------- -->




             </div>

        </div>


    <?php

	 Border::ShowFooter();

    ?>
    </body>
</html>
