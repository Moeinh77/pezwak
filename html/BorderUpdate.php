<?php
	class UpdateBorder
	{
		############################################

             ##################################



#################################
      function ShowCustomerBoxes(){ # customer
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

  		    }

  		    #########################

  		    function ShowUserBoxes(){ # its for user
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">User Name</label>
	    											<input type="text" class="form-control" name="UserName" value="">
    											</div>



												<div class="form-group col-md-4 ">
    												<label for="fl">Password</label>
    												<input type="Text" class="form-control" name="Password" value="">
    											</div>
    											<div class="form-group col-md-4 ">

    												<label for="FT">SSN</label>
    												<input type="text" class="form-control" name="SSN" value="">

    											</div>


    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="SubmitUser"  id="emam" value="SubmitUser" >Submit</button>
                             			</div>
                                   </form>';
  		  		    }


#################################################


  		   function  ShowPurchaseBoxes() { # its for purchase
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


    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="SubmitPurchase"  id="emam" value="SubmitPurchase" >Submit</button>
                             			</div>

                                   </form>';

  		   }
##############################################################

		function  ShowProductBoxes() //its for product
		{
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
		}
#################################################################




##################################################################

  		     function  ShowAlert($num) {

			if($num == 1 )
			{
  		      echo'             <div class="col-md-12">
  		      						<div class="alert alert-danger">
                             <strong>ALERT EXAMPLE :</strong>
                             <br  >Wrong Input  . Your Entered Values are totally wrong check them again .
                              </br>
                          </div>
                          </div>
                         ';
  		    }
  		   if($num == 2 )
			{
  		      echo'             <div class="col-md-12">
  		      						<div class="alert alert-danger">
                             <strong>ALERT EXAMPLE :</strong>
                             <br  >Data Not Found  .One of the inserted values can not be found in data base .
                              </br>
                          </div>
                          </div>
                         ';
  		    }



	}
}

?>
