<?php 
	$Server   = "localhost"; 
	$UserName =  "test";
	$Password =  "test";
	$DBname   =  "Realstate"; 
	
	
	
	
	// Border Class $row = class property
	function ShowPropertyS ($row) {
		echo '
			 			<div class="col-md-4 col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> ' ;
                       echo    'postalcode =';
                       echo $row["Postalcode"];
                       echo ' </div>
                        <div class="panel-body">
                            <p>' ;
                            echo $row["address"]; 
                            echo'</p>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                </div> ' ;
             }
             
             
  //                makes query           
function      MakeQueryPropertySearch($BN, $x ,$xp){
	return      
					$q = "select P.address , P.meter , S.EstimatedWorth , P.Postalcode  from Property P , SaleProperty S 
							 where S.Postalcode = P.Postalcode and  P.BusinessNum = '$BN'and ('$x  '<S.EstimatedWorth or S.EstimatedWorth <'$xp')"; 
      }         
             
             /// Border class 
        function ShowFooter () {     
    	echo '
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    © 2015 YourCompany | By : <a href="http://www.designbootstrap.com/" target="_blank">DesignBootstrap</a>
                </div>

            </div>
        </div>
    </footer>
    
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>' ;
             
             }
             
             
	?>
	
	