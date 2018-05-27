<?php
  namespace App\Domain\User;
  use App\Domain\Mail\Mail;
  use App\Domain\Phone\Phone;
  use App\Domain\Club\Club;
  use App\Domain\Quote\Quote;
  
  class User
  {
      private $mail;
      private $phone; /* Tiene que ser una clase */
      private $club;  /* Tiene que ser una clase (tendrá un identificador)*/
      private $sex;
      private $quote; /* Tiene que ser una clase */


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

      public function setClub(Club $club)
      {
          $this->club = $club;
          return "OK";
      }

      public function getClub()
      {
          return $this->club;
      }

      public function setSex(string $sex)
      {
          $this -> sex = $sex;
          return "OK";

      }

      public function getSex()
      {
          return $this -> sex;

      }

      public function setQuote(Quote $quote)
      {
          $this -> quote = $quote;
          return "OK";
      }

      public function getQuote()
      {
          return $this->quote;
      }


  }

  