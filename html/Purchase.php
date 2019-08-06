<?php
   class Purchase {


      /* Member variables */
   private $ProductName;
   private $CustomerName;
   private $ProductSerialNmber;
   private $PaymentType;
   private $AgreedPrice;
   private $SaleDate;


      /* Member functions */
  		function __construct(PN,CN,PSN,PT,AP,SD){
        this->ProductName=N;
        this->CustomerName=CN;
        this->ProductSerialNmber=PSN;
        this->PaymentType=PT;
        this->AgreedPrice=AP;
        this->SaleDate=SD;


  		}





      function __destruct() {

      }


      /* get,set functions */


      this->CustomerName=CN;
      this->PaymentType=PT;
      this->AgreedPrice=AP;
      this->SaleDate=SD;


      public function setProductName($Name_){
           $this->ProductName = $Name_;
        }
        public function getProductName(){
           return $this->ProductName ;
        }
        public function setProductSerialNmber($PCN_){
             $this->ProductSerialNmber = $PCN_;
          }
          public function getProductSerialNmber(){
             return $this->ProductSerialNmber ;
          }
        public function setCustomerName($SN_){
             $this->CustomerName = $SN_;
          }
          public function getCustomerName(){
             return $this->CustomerName ;
          }
          public function setPaymentType($BD_){
               $this->PaymentType = $BD_;
            }
            public function getPaymentType(){
               return $this->PaymentType ;
            }
            public function setAgreedPrice($SD_){
                 $this->AgreedPrice = $SD_;
              }
              public function getAgreedPrice(){
                 return $this->AgreedPrice ;
              }
              public function setSaleDate($SD_){
                   $this->SaleDate = $SD_;
                }
                public function getSaleDate(){
                   return $this->SaleDate ;
                }


}
?>
