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

</head>
<body>
<?php
  Border::ShowHeader($_SESSION["UserName"]);

?>

         <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Insert</h4>

                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                     Insert what you want!
                    </div>
                </div>
            </div>

     <div class="col-md-12 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Insert BOX
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
                                            <label for="fl">UserName</label>
                                            <input type="Text" class="form-control" name="UserName" value="">
                                          </div>

                                                            <div class="form-group col-md-4 ">
                                                                <label for="fl">Password</label>
                                                                <input type="Text" class="form-control" name="Password" value="">
                                                              </div>

                                                              <div class="form-group col-md-4 ">
                                                                <label for="FT">SSN</label>
                                                                <input type="text" class="form-control" name="SSN" value="">
                                                              </div>

                                                              <div class="form-group col-md-4 ">
                                                                    <label for="fl">Phone</label>
                                                                    <input type="Text" class="form-control" name="Phone" value="">
                                                                  </div>

                                                              <div class="form-group col-md-3 ">
                                                              <button type="submit" class="btn btn-primary" name="SubmitUser"  id="emam" value="SubmitUser" >Submit</button>
                                                                      </div>
                                                                       </form>';
                                      ?>


                              </div>

                              <div class="tab-pane fade" id="customer-pills">

                                   <?php
                                      // //UpdateBorder::ShowRentFormInsert();

                                      echo '<form method="post" action="" >
                                                                      <div class="form-group col-md-4 ">
                                                            <label for="Value">User Name</label>
                                                              <input type="text" class="form-control" name="UserName" value="">
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
                                                            <button type="submit" class="btn btn-primary" name="SubmitCustomer"  id="emam" value="SubmitCustomer" >Submit</button>
                                                                    </div>
                                                                     </form>';


                                      ?>


                              </div>


                              <div class="tab-pane fade" id="product-pills">
                                    <?php
                                        //UpdateBorder::ShowSaleAgreementFormInsert();

                                        echo '<form class="form" method="post" action="">

                                                            <div class="form-group col-md-3 ">
                                                              <label for="PT">Software Name</label>
                                                              <input type="text" class="form-control" name="Name" value="">
                                                            </div>

                                                          <div class="form-group col-md-3 ">
                                                              <label for="fl">Serial Number</label>
                                                              <input type="Text" class="form-control" name="SerialNumber" value="">
                                                            </div>
                                                            <div class="form-group col-md-3 ">

                                                              <label for="FT">Build Date</label>
                                                              <input type="text" class="form-control" name="BuildDate" value="">

                                                            </div>
                                                            <!-- -->
                                                            <div class="form-group col-md-3 ">
                                                            <label for="Value">Support Date</label>
                                                              <input type="text" class="form-control" name="SupportDate" value="">
                                                            </div>


                                                            <div class="form-group col-md-4 ">
                                                            <button type="submit" class="btn btn-primary" name="SubmitProduct"  id="emam" value="SubmitProduct" >Submit</button>
                                                                    </div>
                                                                     </form>';

                                     ?>
                                </div>



                              <div class="tab-pane fade " id="purchase-pills">

                      <?php
                          //UpdateBorder::ShowBuyerFormInsert();
                          echo '<form class="form" method="post" action="">
                                                    <div class="form-group col-md-4 ">
                                          <label for="Value">Product Name</label>
                                            <input type="text" class="form-control" name="ProductName" value="">
                                          </div>

                                          <div class="form-group col-md-4 ">
                                            <label for="PT">Customer Name</label>
                                            <input type="text" class="form-control" name="CustomerName" value="">
                                          </div>

                                        <div class="form-group col-md-4 ">
                                            <label for="fl">Product Serial Nmber</label>
                                            <input type="Text" class="form-control" name="ProductSerialNmber" value="">
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

                                          <div class="form-group col-md-12 ">

                                              <label for="FT">Due Date</label>
                                              <input type="text" class="form-control" name="DueDate" value="">

                                            </div>

                                          <div class="form-group col-md-3 ">
                                          <button type="submit" class="btn btn-primary" name="SubmitPurchase"  id="emam" value="SubmitPurchase" >Submit</button>
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


        if (isset($_POST['SubmitUser']))
        {
          $Phone_=(int)$_POST['Phone'];
        $Username_=$_POST['UserName'];
        $Password_=$_POST['Password'];
        $SSN_   =$_POST['SSN'];

					$q =  "Insert into User Values ('$Username_','$Password_','$SSN_','$Phone_' );";

            $result=$mysqli->query( $q ) ;

             if ($result === TRUE) {
                echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "<br>" . $mysqli->error;
            }


        }

        //////////////////////////////////
        //////////////////////////////////
        if (isset($_POST['SubmitCustomer']))
        {

            $Username_=$_POST['UserName'];
        $Phone_=$_POST['Phone'];
        $Address_   =$_POST['Address'];

        $q =  "Insert into Customer Values ('$Username_','$Phone_','$Address_' );";


            $result=$mysqli->query( $q ) ;

             if ($result === TRUE) {
                echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "<br>" . $mysqli->error;
            }


        }

        //////////////////////////////////
        //////////////////////////////////
        if (isset($_POST['SubmitProduct']))
        {

        $SupportDate_=$_POST['SupportDate'];
        $BuildDate_=$_POST['BuildDate'];
        $SerialNumber_   = $_POST['SerialNumber'];
        $SerialNumber_=$SerialNumber_ + 0;
        $Name_=$_POST['Name'];

        echo $SerialNumber_;

        $q =  "Insert into Product Values
        ('$Name_','$SerialNumber_','$BuildDate_','$SupportDate_ ');";


            $result=$mysqli->query( $q ) ;

             if ($result === TRUE) {
                echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "<br>" . $mysqli->error;
            }


        }

        //////////////////////////////////
        //////////////////////////////////
        if (isset($_POST['SubmitPurchase']))
        {

        $ProductName_=$_POST['ProductName'];
        $CustomerName_=$_POST['CustomerName'];
        $ProductSerialNmber_  = $_POST['ProductSerialNmber']+0;
        $PaymentType_=$_POST['PaymentType'];
        $AgreedPrice_=$_POST['AgreedPrice'];
        $AgreedPrice_=$AgreedPrice_+0 ;
        $SaleDate_=$_POST['SaleDate'];
        $DueDate_=$_POST['DueDate'];

        $q =  "Insert into Purchase Values
        ('$ProductName_','$CustomerName_','$ProductSerialNmber_','$PaymentType_ ','$AgreedPrice_','$SaleDate_','$DueDate_');";


            $result=$mysqli->query( $q ) ;

             if ($result === TRUE) {
                echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "<br>" . $mysqli->error;
            }


        }



        }





          ?>


           </div>

      </div>


  <?php

 Border::ShowFooter();

  ?>
  </body>
</html>
