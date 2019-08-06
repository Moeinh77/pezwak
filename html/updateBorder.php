<?php 
  
  include_once "PropertyClass.php"; 
  
	class UpdateBorder	
	{
		############################################
		
             ##################################
             

             
#################################             
      function ShowRentFormUpdate(){
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Name</label>
	    											<input type="text" class="form-control" name="Name" value=""> 
    											</div>
    											
    											<div class="form-group col-md-4 ">
    												<label for="PT">Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-4 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">SSN</label>
    												<input type="text" class="form-control" name="Ssn" value=""> 
    												
    											</div> 
    											   											
    												<div class="form-group col-md-4 ">
    									
    												<label for="FT">Meter</label>
    												<input type="number" class="form-control" name="Meter" value=""> 
    												
    											</div>
    											
    												<div class="form-group col-md-4 ">
    									
    												<label for="FT">Build Date</label>
    												<input type="Date" class="form-control" name="Bdate" > 
    												
    											</div>
    											
    											<!--     new row        -->
    											
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">Estimated Rent</label>
    												<input type="number" class="form-control" placeholder="Enter in Toman" name="Rentestimate" > 
    												
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">Estimated Mortage</label>
    												<input type="number" placeholder="Enter in Milion Toman" class="form-control" name="Mortage" > 
    												
    											</div>
    											
												<div class="form-group col-md-4 ">
    									
    												<label for="FT">PostalCode</label>
    												<input type="text" class="form-control" name="Postalcode" value=""> 
    												
    											</div>    											
    											
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value="0"> 
    												
    											</div>    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit2" >Submit</button>
                             			</div>
                                   </form>';  		
  		
  		    }  
  		       
  		    #########################
  		    
  		    function ShowSaleFormUpdate(){
		echo '<form method="post" action="" >
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Name</label>
	    											<input type="text" class="form-control" name="Name" value=" ';
	    										 
	    											echo '"> 
    											</div>
    											
    											<div class="form-group col-md-4 ">
    												<label for="PT">Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-4 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">SSN</label>
    												<input type="text" class="form-control" name="Ssn" value=""> 
    												
    											</div> 
    											   											
    												<div class="form-group col-md-4 ">
    									
    												<label for="FT">Meter</label>
    												<input type="number" class="form-control" name="Meter" value=""> 
    												
    											</div>
    											
    												<div class="form-group col-md-4 ">
    									
    												<label for="FT">Build Date</label>
    												<input type="Date" class="form-control" name="Bdate" > 
    												
    											</div>
    											
    											<!--     new row        -->
    											
    											<div class="form-group col-md-6 ">
    									
    												<label for="FT">Estimated Worth</label>
    												<input type="number" placeholder="Enter in Milion Toman" class="form-control" name="Value" > 
    												
    											</div>
    											
												<div class="form-group col-md-6 ">
    									
    												<label for="FT">PostalCode</label>
    												<input type="text" class="form-control" name="Postalcode" value=""> 
    												
    											</div>    											
    											
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value=""> 
    												
    											</div>    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit1" >Submit</button>
                             			</div>
                                   </form>';  		
  		  		    }
  		    
  		    
#################################################  		    
  		    function ShowRenterFormUpdate(){
echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Name</label>
	    											<input type="text" class="form-control" name="Name" value=""> 
    											</div>
    											
    											<div class="form-group col-md-4 ">
    												<label for="PT">Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-4 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">SSN</label>
    												<input type="text" class="form-control" name="Ssn" value=""> 
    												
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT"> Rent</label>
    												<input type="number" class="form-control" placeholder="Enter in Toman" name="Rentestimate" > 
    												
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT"> Mortage</label>
    												<input type="number" placeholder="Enter in Milion Toman" class="form-control" name="Mortage" > 
    												
    											</div> 
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value=""> 
    												
    											</div>   											
    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit3" >Submit</button>
                             			</div>
                                   </form>';
  		    }
 ######################################################## 
 
   		    
  		   function  ShowBuyerFormUpdate() {
  		   	echo '<form class="form" method="post" action=""> 
                                    <div class="form-group col-md-4 ">
   	 											<label for="Value">Name</label>
	    											<input type="text" class="form-control" name="Name" value=""> 
    											</div>
    											
    											<div class="form-group col-md-4 ">
    												<label for="PT">Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-4 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-6 ">
    									
    												<label for="FT">SSN</label>
    												<input type="text" class="form-control" name="Ssn" value=""> 
    												
    											</div>
    											<div class="form-group col-md-6 ">
    									
    												<label for="FT"> Budget</label>
    												<input type="number" class="form-control" placeholder="Enter in Milion Toman Toman" name="Budget" > 
    												
    											</div>
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value=""> 
    												
    											</div>   											
    											
    											
    											<div class="form-group col-md-3 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit4" >Submit</button>
                             			</div>
  		   
                                   </form>';
                                   
  		   }
##############################################################

		function  ShowSaleAgreementFormUpdate()
		{
			echo '<form class="form" method="post" action=""> 
                                     <div class="form-group col-md-3 ">
   	 											<label for="Value">Seller Name</label>
	    											<input type="text" class="form-control" name="Name" value=""> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Seller Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Owner SSN</label>
    												<input type="text" class="form-control" name="OSsn" value=""> 
    												
    											</div> 
    											<!-- -->
    											<div class="form-group col-md-3 ">
   	 											<label for="Value">Buyer SSN</label>
	    											<input type="text" class="form-control" name="BSSN" value=""> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Price</label>
    												<input type="number" class="form-control" name="Price" placeholder="Enter Price in toman"> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Sell Date</label>
    												<input type="date" class="form-control" name="SDate" value=""> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Comission</label>
    												<input type="text" class="form-control" name="Comission" value=""> 
    												
    											</div> 
    											
    											
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value=""> 
    												
    											</div>										
    											
    											
    											
    											<div class="form-group col-md-4 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit5" >Submit</button>
                             			</div>
                                   </form>';
		}  		   
#################################################################
function  ShowRentAgreementFormUpdate()
		{
			echo '<form class="form" method="post" action=""> 
                                     <div class="form-group col-md-3 ">
   	 											<label for="Value">Seller Name</label>
	    											<input type="text" class="form-control" name="Name" value=""> 
    											</div>
    											
    											<div class="form-group col-md-3 ">
    												<label for="PT">Seller Sname</label>
    												<input type="text" class="form-control" name="Sname" value=""> 
    											</div>
    											
												<div class="form-group col-md-3 ">
    												<label for="fl">Phone</label>
    												<input type="Text" class="form-control" name="Phone" value=""> 
    											</div>
    											<div class="form-group col-md-3 ">
    									
    												<label for="FT">Owner SSN</label>
    												<input type="text" class="form-control" name="OSsn" value=""> 
    												
    											</div> 
    											<!-- -->
    											<div class="form-group col-md-4 ">
   	 											<label for="Value">Renter SSN</label>
	    											<input type="text" class="form-control" name="BSSN" value=""> 
    											</div>
    											
    											<div class="form-group col-md-4 ">
    												<label for="PT">Rent</label>
    												<input type="number" class="form-control" name="Price" placeholder="Enter Price in toman"> 
    											</div>
    											
												<div class="form-group col-md-4 ">
    												<label for="fl">Mortage</label>
    												<input type="number" class="form-control" name="Mortage" placeholder="Enter Price in toman"> 
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">Comission</label>
    												<input type="text" class="form-control" name="Comission" value=""> 
    												
    											</div> 
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">Duration</label>
    												<input type="number" class="form-control" name="number" placeholder="Enter number of months"> 
    												
    											</div>
    											<div class="form-group col-md-4 ">
    									
    												<label for="FT">Start Date</label>
    												<input type="date" class="form-control" name="Sdate" value=""> 
    												
    											</div>
    											
    											
												<div class="form-group col-md-12 ">
    									
    												<label for="FT">Address</label>
    												<input type="text" class="form-control" name="Address" value=""> 
    												
    											</div>										
    											
    											
    											
    											<div class="form-group col-md-4 ">
  												<button type="submit" class="btn btn-primary" name="submit"  id="emam" value="Submit5" >Submit</button>
                             			</div>
                                   </form>';
		}  		 
  		 
  		 
  		 
  		 
  		   
##################################################################
  		    
  		        
             
                 
             
	
}
	
?>