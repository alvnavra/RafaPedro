<?php
  namespace App\Domain\AccessBracelet;
  use App\Domain\MemberId\MemberId;

  final class AccessBracelet
  {
      private $accessBraceletMemberCode;
      private $accessBraceletPrice;

      public function setAccessBraceletMemberCode(MemberId $braceletCode)
      {
          $this -> accessBraceletMemberCode = $braceletCode;
      }

      public function getAccessBraceletMemberCode()
      {
          return $this -> accessBraceletMemberCode;
      }

      public function setAccessBraceletPrice(int $braceletPrice)
      {
          $this -> accessBraceletPrice = $braceletPrice;
      }

      public function getAccessBraceletPrice()
      {
          return $this -> accessBraceletPrice;
      }
  }