<?php

  include_once "CLasses.php";
	class DeleteBorder
	{

      function ShowCustomerBoxes(){

			echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Postal Code</label>
	    											<input type="text" class="form-control" name="Postalcode" value="">
    											</div>

    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit2" >Submit</button>
                             			</div>
                                   </form>';

  		    }

  		    #########################

  		    function ShowUserBoxes(){
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Postal code</label>
	    											<input type="text" class="form-control" name="Postalcode" value="">
    											</div>

    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit1" >Submit</button>
                             			</div>
                                   </form>';
  		  		    }


#################################################
  		    function ShowProductBoxes(){
echo '<form class="form" method="post" action="">
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">SSN</label>
	    											<input type="text" class="form-control" name="Ssn" value="">
    											</div>


    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit3" >Submit</button>
                             			</div>
                                   </form>';
  		    }
 ########################################################


  		   function  ShowPurchaseBoxes() {
  		   	echo '<form class="form" method="post" action="">
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">SSN</label>
	    											<input type="text" class="form-control" name="Ssn" value="">
    											</div>

    											<div class="form-group col-md-12 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Dubmit4" >Submit</button>
                             			</div>

                                   </form>';

  		   }
##############################################################

##################################################################
  	function  ShowDeleteUser($obj)
  	{


  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicon-home"></span> </div>

                        <br >
                        <h3>
                          Sale Property To Be Deleted :
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Postal Code :';echo 	$obj->getPostalCode();
                   echo       ' </br>Owner Name :';echo $obj->getName();echo ' '; echo $obj->getSname();

                     echo      '<br />Owner Phone:'; echo $obj->getPhone();




     				 echo
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >

	    											<input type="text" class="form-control" style="visibility: hidden;" name="Postalcode" value="';
	    											echo $obj->getPostalCode();
	    											 echo '">
    											</div>

     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DSP" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ;

  	}
  	#########################

    function  ShowDeletePurchase($obj)
  	{


  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicons-user-remove"></span> </div>

                        <br >
                        <h3>
                          Sale Property To Be Deleted :
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Ssn  :';echo 	$obj->getSsn();
                   echo       ' </br> Name :';echo $obj->getName();echo ' '; echo $obj->getSname();

                     echo      '<br /> Phone:'; echo $obj->getPhone();




     				 echo
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >

	    											<input type="text" class="form-control" style="visibility: hidden;" name="Ssn" value="';
	    											echo $obj->getSsn();
	    											 echo '">
    											</div>

     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DR" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ;

  	}


    function  ShowDeleteProduct($obj)
  	{


  	echo '                                    <div class="col-md-6">
                        <div class="alert alert-warning">
                         <div class="col-md-7 col-sm-offset-5">
                            <span style="font-size: 50px;" class="glyphicon glyphicons-user-remove"></span> </div>

                        <br >
                        <h3>
                          Sale Property To Be Deleted :
                          </h3>
                          </br>
                           <br>Address : ';
                           echo   $obj->getAddress();
                         echo   '   Ssn  :';echo 	$obj->getSsn();
                   echo       ' </br> Name :';echo $obj->getName();echo ' '; echo $obj->getSname();

                     echo      '<br /> Phone:'; echo $obj->getPhone();




     				 echo
     				 	' <div class" col-md-12">
     				 	<form method="post" action="" >

	    											<input type="text" class="form-control" style="visibility: hidden;" name="Ssn" value="';
	    											echo $obj->getSsn();
	    											 echo '">
    											</div>

     				 	<button type="submit" class="btn btn-danger" name="submit"  id="emam" value="DS" >Delete</button>
     				 	</form>
                        </div>
                        </div>
                    </div>' ;

  	}



}

?>
