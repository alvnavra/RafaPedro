<?php
  namespace App\Domain\Quote;

  Class Quote
  {
      private $name;
      private $description;
      private $gift; /*Deberá ser una clase*/
      private $accessTime; /*Deberá ser una clase*/
      private $quotePrice;
      private $joiningPrice;
      private $joiningFee;
      private $nextBillNotification;
      private $joiningDate;
      private $totalAmmountToPay;

      public function setPrice(int $price)
      {
         if ($price > 0)
         {
             $this->price = $price;
             return "OK";
         }
         else 
         {
             return "KO";
        }
      }

      public function getPrice()
      {
          return $this->price;
      }

  }