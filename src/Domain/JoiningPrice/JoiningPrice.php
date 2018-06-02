<?php
  namespace App\Domain\JoiningPrice;
  use App\Domain\Quote\Quote;
  use App\Domain\JoiningFee\JoiningFee;
  use App\Domain\AccessBracelet\AccessBracelet;

  class JoiningPrice
  {
      private $joiningPrice;
      private $quote;
      private $joiningFee;
      private $accessBracelet;

      public function setQuote(Quote $quote)
      {
          $this -> quote = $quote;
      }

      public function setJoiningFee(JoiningFee $joiningFee)
      {
          $this -> joiningFee = $joiningFee;
      }

      public function setAccessBracelet(AccessBracelet $accessBracelet)
      {
          $this -> accessBracelet = $accessBracelet;
      }

      public function getJoiningPrice()
      {
          $this -> joiningPrice = $this->quote->getQuotePrice()+$this->joiningFee->getJoiningFee()+$this->accessBracelet->getAccessBraceletPrice();
          return $this->joiningPrice;
      }
  }

