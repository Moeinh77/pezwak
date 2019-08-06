<?php
	include_once "Person.php";
   class Customer extends Person  {


      /* Member variables */
       private  $Budget;


      /* Member functions */
  		public function __construct($N,$P,$A){
				parent::__construct($N,$P,$A);
				// echo 'ok';
  		}





      function __destruct() {

      }


      /* get,set functions */



	  public function setBudget($Budget){
         $this->Budget = $Budget;
      }
      public function getBudget(){
         return $this->Budget ;
      }





}
?>
