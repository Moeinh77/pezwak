<?php
	include_once "Person.php";
   class Customer extends Person  {


      /* Member variables */
       private  $Password;
	     private  $SSN;


      /* Member functions */
  		function __construct($N,$P,$S,$Ph,$A){
				parent::__construct($N,$Ph,$A);
        $this->Password=$P;
				$this->SSN=$S
  		}





      function __destruct() {

      }


      /* get,set functions */




			public function setSSN($SSN_){
					 $this->SSN = $SSN_;
				}
				public function getSSN(){
					 return $this->SSN ;
				}
        public function setSSN($Password_){
             $this->Password = $Password_;
          }
          public function getPassword(){
             return $this->Password ;
          }


}
?>
