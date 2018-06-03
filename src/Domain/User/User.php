<?php
  namespace App\Domain\User;
  use App\Domain\Mail\Mail;
  use App\Domain\Phone\Phone;
  use App\Domain\Club\Club;
  use App\Domain\Quote\Quote;
  use App\Domain\BirthDate\BirthDate;
  
  class User
  {
      private $mail;
      private $phone; /* Tiene que ser una clase */
      private $club;  /* Tiene que ser una clase (tendrá un identificador)*/
      private $quote; /* Tiene que ser una clase */
      private $birthDate; /*Tiene que ser una clase */
      private $name;
      private $firstSurname;
      private $secondSurname;
      private $language;
  

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


      public function setQuote(Quote $quote)
      {
          $this -> quote = $quote;
          return "OK";
      }

      public function getQuote()
      {
          return $this->quote;
      }

      public function setBirthDate(BirhDate $birthDate)
      {
          $this -> birthDate = $birthDate;
      }

      public function getBirthDate()
      {
          return $this -> birthDate;
      }

      public function setLanguage(string $language)
      {
          $this -> language = $language;
      }

      public function getLanguage()
      {
          return $this -> $language;
      }
      
      public function setName(string $name)
      {
          $this -> name = $name;
      }

      public function getName()
      {
          return $this -> name;
      }

      public function setFirstSurname($firstSurname)
      {
          $this -> firstSurname = $firstSurname;
      }

      public function getFirstSurname()
      {
          return $this -> firstSurname;
      }

      public function setSecondSurname($secondSurname)
      {
          $this -> secondSurname = $secondSurname;
      }

      public function getSecondSurname()
      {
          return $this -> secondSurname;
      }

  }

  