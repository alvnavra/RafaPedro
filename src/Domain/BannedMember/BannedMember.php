<?php
      namespace App\Domain\BannedMember;
      use App\Domain\Mail\Mail;
      use App\Domain\Phone\Phone;
      use App\Domain\MemberId\MemberId;

      class BannedMember
      {
          private $mail;
          private $phone;
          private $memberId;

          public function setMail(Mail $mail)
          {
              $this->mail = $mail;
              return "OK";
          }
    
          public function getMail()
          {
              return $this->mail;
          }
    
          public function setPhone(Phone $phone)
          {
              $this->phone = $phone;
              return "OK";
          }
    
          public function getPhone()
          {
              return $this->phone;
          }
    
          public function setMemberId(MemberId $memberId)
          {
            $this -> memberId = $memberId;
          }
      
          public function getMemberId()
          {
            return $this -> memberId;
          }
                    
      }
    