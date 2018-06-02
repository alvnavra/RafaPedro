<?php
  namespace App\Domain\Quote;
  use App\Domain\AccessTime\AccessTime;
  use App\Domain\Ancillary\Ancillary;

  Class Quote
  {
      private $name;
      private $description;
      private $ancillary; /*Deberá ser una clase*/
      private $accessTime; /*Deberá ser una clase*/
      private $quotePrice;
      private $joiningPrice;
      private $nextBillNotification;
      private $joiningDate;

      public function setName(string $name)
      {
          $this -> name = $name;
      }

      public function getName()
      {
          return $this -> name;
      }

      public function setDescription(string $description)
      {
          $this -> description = $description;
      }

      public function getDescription()
      {
          return $this -> description;
      }

      public function setAccessTime(AccessTime $accessTime)
      {
          $this -> accessTime = $accessTime;
      }

      public function getAccessTime()
      {
          return $this -> accessTime;
      }

      public function setAncillary(Ancillary $ancillary)
      {
          $this -> ancillary = $ancillary;
      }

      public function getGift()
      {
          return $this -> gift;
      }

      public function setQuotePrice(int $quotePrice)
      {
         if ($quotePrice > 0)
         {
             $this->quotePrice = $quotePrice;
             return "OK";
         }
         else 
         {
             return "KO";
        }
      }

      public function getQuotePrice()
      {
          return $this->quotePrice;
      }

      public function setJoiningPrice(int $joiningPrice)
      {
         if ($joiningPrice > 0)
         {
             $this->joiningPrice = $joiningPrice;
             return "OK";
         }
         else 
         {
             return "KO";
        }
      }

      public function getJoiningPrice()
      {
          return $this->joiningPrice;
      }

  }