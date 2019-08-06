<?php
   session_start();

				//	 including
      include_once "Db_info.php";
      // include_once "CLasses.php";
      // include_once "Customer.php";
 			 // include_once  "BorderUpdate.php";
        include_once "Border.php";


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="NorVanK" />
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
                    <h4 class="page-head-line">Update</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     Edit what you want!
                    </div>
                </div>
            </div>

     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Update BOX
                        </div>
                        <div class="panel-body">

                            <ul class="nav nav-pills">
                                <li class=""><a href="#user-pills" data-toggle="tab">User</a>
                                </li>
                                <li class=""><a href="#customer-pills" data-toggle="tab">Customer</a>
                                </li>
                                <li class=""><a href="#product-pills" data-toggle="tab">Product</a>
                                </li>
                                <li class=""><a href="#purchase-pills" data-toggle="tab">Purchase</a>
                                </li>

                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade" id="user-pills">
      		                              <?php
      		                              	//UpdateBorder::ShowSaleFormInsert();
                                          echo '<form method="post" action="" >

                                          <div class="form-group col-md-4 ">
                                            <label for="fl">SNN</label>
                                            <input type="Text" class="form-control" name="SSN" placeholder="please enter your SSN ">
                                          </div>


                                        												<div class="form-group col-md-4 ">
                                          												<label for="fl">Password</label>
                                          												<input type="Text" class="form-control" name="Password" value="">
                                          											</div>

                                                                <div class="form-group col-md-4 ">
                                                                  <label for="fl">Phone</label>
                                                                  <input type="Text" class="form-control" name="Phone" value="">
                                                                </div>

                                          											<div class="form-group col-md-3 ">
                                        												<button type="submit" class="btn btn-primary" name="EditUser"  id="emam" value="EditUser" >Submit</button>
                                                                   			</div>
                                                                         </form>';
      		                              ?>


                                </div>

                                <div class="tab-pane fade" id="customer-pills">

                                     <?php
      		                              // //UpdateBorder::ShowRentFormInsert();

                                        echo '<form method="post" action="" >
                                                                        <div class="form-group col-md-4 ">
                                                              <label for="Value">Customer Name</label>
                                                                <input type="text" class="form-control" name="UserName" value=""
                                                                placeholder="Enter the name of the customer">
                                                              </div>

                                                              <div class="form-group col-md-4 ">
                                                                <label for="PT">Address</label>
                                                                <input type="text" class="form-control" name="Address" value="">
                                                              </div>

                                                            <div class="form-group col-md-4 ">
                                                                <label for="fl">Phone</label>
                                                                <input type="Text" class="form-control" name="Phone" value="">
                                                              </div>


                                                              <div class="form-group col-md-3 ">
                                                              <button type="submit" class="btn btn-primary" name="EditCustomer"  id="emam" value="EditCustomer" >Submit</button>
                                                                      </div>
                                                                       </form>';


                                        ?>


                                </div>


                                <div class="tab-pane fade" id="product-pills">
                                			<?php
                                					//UpdateBorder::ShowSaleAgreementFormInsert();

                                          echo '<form class="form" method="post" action="">

                                          <div class="form-group col-md-3 ">
                                            <label for="PT">Serial Number</label>
                                            <input type="text" class="form-control" name="SerialNumber"
                                            placeholder="Enter the serial number" value="">
                                          </div>
                                                              <div class="form-group col-md-3 ">
                                                                <label for="PT">Software Name</label>
                                                                <input type="text" class="form-control" name="Name" value="">
                                                              </div>

                                                              <div class="form-group col-md-3 ">
                                                                <label for="FT">Build Date</label>
                                                                <input type="text" class="form-control" name="BuildDate" value="">

                                                              </div>
                                                              <div class="form-group col-md-3 ">
                                                              <label for="Value">Support Date</label>
                                                                <input type="text" class="form-control" name="SupportDate" value="">
                                                              </div>


                                                              <div class="form-group col-md-4 ">
                                                              <button type="submit" class="btn btn-primary" name="EditProduct"  id="emam" value="EditProduct" >Submit</button>
                                                                      </div>
                                                                       </form>';

                                			 ?>
                                	</div>



                                <div class="tab-pane fade " id="purchase-pills">

												<?php
														//UpdateBorder::ShowBuyerFormInsert();
                            echo '<form class="form" method="post" action="">

                            <div class="form-group col-md-4 ">
                            <label for="Value">Product Serial Number</label>
                            <input type="text" class="form-control" name="ProductSerialNmber"
                            placeholder="Enter the Product Serial Number" value="">
                            </div>

                            <div class="form-group col-md-4 ">
                            <label for="Value">Customer Name</label>
                            <input type="text" class="form-control" name="CustomerName"
                            placeholder="Enter the Customer name" value="">
                            </div>


                                                      <div class="form-group col-md-4 ">
                     	 											<label for="Value">Product Name</label>
                  	    											<input type="text" class="form-control" name="ProductName" value="">
                      											</div>

                      											<div class="form-group col-md-6 ">
                      												<label for="FT">Payment Type</label>
                      												<input type="text" class="form-control" name="PaymentType" value="">
                      											</div>

                      											<div class="form-group col-md-6 ">
                      												<label for="FT">Agreed Price</label>
                      												<input type="text" class="form-control" placeholder="Enter in Milion Toman" name="AgreedPrice" >
                      											</div>

                  												<div class="form-group col-md-12 ">

                      												<label for="FT">Sale Date</label>
                      												<input type="text" class="form-control" name="SaleDate" value="">

                      											</div>


                      											<div class="form-group col-md-3 ">
                    												<button type="submit" class="btn btn-primary" name="EditPurchase"  id="emam" value="EditPurchase" >Submit</button>
                                               			</div>

                                                     </form>';

														   ?>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
                <!-- -->


            <!-------------------------------------------- -->

            <?php





$mysqli = new mysqli($Server, $UserName, $Password, $DBname);
				// sale form
            if($_SERVER["REQUEST_METHOD"] == "POST") {


					if (isset($_POST['EditUser']))
					{

        	$Username_=$_SESSION["UserName"];
					$Password_=$_POST['Password'];
					$SSN_   =$_POST['SSN'];
          $Phone_=(int)$_POST['Phone'];

					$q =  "UPDATE User SET Password='$Password_',Phone='$Phone_'
           Where SSN='$SSN_' AND Username='$Username_';";


							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
    							echo "Record updated successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


			 		}

			 		//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['EditCustomer']))
					{
            // echo 'hi';
          // $customer=new Customer($_POST['UserName'],$_POST['Phone'],$_POST['Address']);
          // echo $customer;
        	$Customername_=$_POST['UserName'];
					$Phone_=(int)$_POST['Phone'];
					$Address_   =$_POST['Address'];

          $q =  "UPDATE Customer SET Address='$Address_',Phone='$Phone_'
                            Where Name='$Customername_' ;";


							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record updated successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


			 		}

					//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['EditProduct']))
					{

        	$SupportDate_=$_POST['SupportDate'];
					$BuildDate_=$_POST['BuildDate'];
					$SerialNumber_  =(int)$_POST['SerialNumber'];
					$Name_=$_POST['Name'];

					$q =  "UPDATE Product SET
					Name='$Name_',BuildDate='$BuildDate_',SupportDate='$SupportDate_'
          Where SerialNumber='$SerialNumber_';";


							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record updated successfully";
							} else {
   							 echo "Error: " . $sql . "<br>" . $mysqli->error;
							}


			 		}

			 		//////////////////////////////////
			 		//////////////////////////////////
			 		if (isset($_POST['EditPurchase']))
					{

        	$ProductName_=$_POST['ProductName'];
					$CustomerName_=$_POST['CustomerName'];
					$ProductSerialNmber_  = (int)$_POST['ProductSerialNmber'];
					$PaymentType_=$_POST['PaymentType'];
					$AgreedPrice_=(int)$_POST['AgreedPrice'];
					$SaleDate_=$_POST['SaleDate'];

					$q = "UPDATE Purchase Set ProductName='$ProductName_',
          PaymentType='$PaymentType_',
          AgreedPrice='$AgreedPrice_',
          SaleDate='$SaleDate_'
          Where CustomerName='$CustomerName_' AND ProductSerialNmber='$ProductSerialNmber_'; ";

							$result=$mysqli->query( $q ) ;

							 if ($result === TRUE) {
                 echo "Record updated successfully";
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
