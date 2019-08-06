<?php
   session_start();

				//	 including
      include_once "Db_info.php";
      include_once "Customer.php";
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
                    <h4 class="page-head-line">Delete</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     Delete what you want!
                    </div>
                </div>
            </div>

     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Delete BOX
                        </div>
                        <div class="panel-body">

                            <ul class="nav nav-pills">

                                <li class=""><a href="#customer-pills" data-toggle="tab">Customer</a>
                                </li>
                                <li class=""><a href="#product-pills" data-toggle="tab">Product</a>
                                </li>
                                <li class=""><a href="#purchase-pills" data-toggle="tab">Purchase</a>
                                </li>

                            </ul>

                            <div class="tab-content">


                                <div class="tab-pane fade" id="customer-pills">

                                     <?php

                                           $q1 =  "SELECT * From Customer ;";
                                           $result = $mysqli->query($q1);
                                           echo '<br><br>';
                                          echo '<form class="form" method="post" action="">
                                          <div class="form-group col-md-3 ">
                                             <select name="CustomerName" class="form-control" id="sel1">"';
                                               while ($temp = $result->fetch_assoc() ){
                                                 echo "<option value='".$temp['Name']."'>".$temp['Name']."</option>";
                                               }
                                             echo "</select></div>";

                                             echo '<br><div class="form-group col-md-4 " >
                                             <button type="submit" class="btn btn-primary" name="DeleteCustomer"  id="emam" value="DeleteCutomer" >Delete</button>
                                                     </div>
                                                      </form>';
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
                                          <select name="SerialNumber" class="form-control" id="sel2">"';
                                            while ($temp = $result->fetch_assoc() ){
                                              echo "<option value='".$temp['SerialNumber']."'>".$temp['Name']."</option>";
                                            }
                                          echo "</select></div>";

                                          echo '<br><div class="form-group col-md-4 " >
                                          <button type="submit" class="btn btn-primary" name="DeleteProduct"  id="emam" value="DeleteProduct" >Delete</button>
                                                  </div>
                                                   </form>';
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
                                          <select name="ProductSerialNmber-CustomerName" class="form-control" id="sel3">"';
                                            while ($temp = $result->fetch_assoc() ){
                                              $pc=$temp['ProductSerialNmber'].','.$temp['CustomerName'];
                                              echo "<option value='".$pc."'>"
                                              .$temp['ProductName'].' sold to : '.$temp['CustomerName']."</option>";
                                            }
                                          echo "</select></div>";

                                          echo '<br><div class="form-group col-md-4 " >
                                          <button type="submit" class="btn btn-primary" name="DeletePurchase"  id="emam" value="DeletePurchase" >Delete</button>
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
          echo $_POST['CustomerName'];
          $Customername_=$_POST['CustomerName'];


          $q =  "DELETE From Customer Where Name='$Customername_';";


							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record Deleted successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


			 		}

					//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['DeleteProduct']))
					{

					$SerialNumber_  =(int)$_POST['SerialNumber'];

          $q =  "DELETE From Product Where SerialNumber='$SerialNumber_';";


							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record Deleted successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


			 		}

			 		//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['DeletePurchase']))
					{

        	$arr_=explode(',',$_POST['ProductSerialNmber-CustomerName'],2);
          echo $arr_[1];
					$ProductSerialNmber_  = (int)$arr_[0];
          $CustomerName_  = $arr_[1];


					$q = "DELETE FROM Purchase
          Where ProductSerialNmber='$ProductSerialNmber_' AND CustomerName='$CustomerName_' ";
          echo $q;
							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record Deleted successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


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
