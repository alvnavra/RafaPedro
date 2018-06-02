<?php
  namespace App\Domain\Member;
  use App\Domain\User\User;

  class Member extends User
  {
    private $joiningPrice;
    private $joiningDate;
    private $memberId;
    private $name;
    private $firstSurname;
    private $secondSurname;
    private $address;
    private $zipCode;
    private $city;
    private $identifactionType;
    private $identificationDocument;
    private $sex;
    private $bankAcount;

    public function setJoiningPrice(JoiningPrice $joiningPrice)
    {
      $this -> joiningPrice = $joiningPrice;
    }

    public function getJoiningPrice()
    {
      return $this -> joiningPrice;
    }

    public function setJoiningDate(date $joiningDate)
    {
      $this -> joiningDate = $joiningDate;
    }

    public function getJoiningDate()
    {
      return $this -> joiningDate;
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
  
  }