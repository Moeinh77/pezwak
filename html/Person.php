<?php
   class Person {


      /* Member variables */
       private  $Name;
       private  $Phone;
       private  $Address;
       private  $SSN;

      /* Member functions */


	  public function __construct($N_,$P_,$A_) {
      echo 'ok1';

      $this->Name=$N_;
      $this->Phone=$P_;
      $this->Address=$A_;
      echo 'ok2';
      }



      function __destruct() {

      }


      /* get,set functions */


      public function setName($Name_){
         $this->Name = $Name_;
      }
      public function getName(){
         return $this->Name ;
      }



      public function setPhone($Phone_){
         $this->Phone = $Phone_;
      }
      public function getPhone(){
         return $this->Phone ;
      }

	  public function setAddress($Address_){
         $this->Address = $Address_;
      }
      public function getAddress(){
         return $this->Address ;
      }


}
?>
