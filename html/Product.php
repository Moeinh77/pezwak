<?php
   class Product {


      /* Member variables */
       private  $Name;
	     private  $SerialNumber;
       private  $SupportDate;
       private  $BuildDate;


      /* Member functions */
  		function __construct(N,SN,SD,BD){
        this->Name=N;
        this->SerialNumber=SN;
        this->SupportDate=SD;
        this->BuildDate=BD;

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
        public function setSerialNumber($SN_){
             $this->SerialNumber = $SN_;
          }
          public function getSerialNumber(){
             return $this->SerialNumber ;
          }
          public function setBuildDate($BD_){
               $this->BuildDate = $BD_;
            }
            public function getBuildDate(){
               return $this->BuildDate ;
            }
            public function setSupportDate($SD_){
                 $this->SerialNumber = $SD_;
              }
              public function getSupportDate(){
                 return $this->SupportDate ;
              }


}
?>
