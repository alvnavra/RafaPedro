<?php
  namespace App\Domain\Member;
  use App\Domain\User\User;
  use App\Domain\BankAccount\BankAccount;

  class Member extends User
  {
    private $joiningPrice;
    private $joiningDate;
    private $memberId;
    private $address;
    private $zipCode;
    private $city;
    private $identifactionType;
    private $identificationDocument;
    private $sex;
    private $bankAccount;

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

    public function setMemberId(MemberId $memberId)
    {
      $this -> memberId = $memberId;
    }

    public function getMemberId()
    {
      return $this -> memberId;
    }

    public function setCity(string $city)
    {
      $this -> city = $city;
    }

    public function getCity()
    {
      return $this -> city;
    }

    public function setZipCode(string $zipCode)
    {
        $this -> zipCode = $zipCode;      
    }
    
    public function getZipCode()
    {
        return $this -> zipCode;      
    }

    public function setIdentifactionType(string $identificationType)
    {
      $this -> identificationType = $identificationType;
    }

    public function getIdentifactionType()
    {
        return $this -> identificationType;
    }

    public function setIdentificationDocument(string $identificationDocument)
    {
      $this -> identificationDocument = $identificationDocument;
    }

    public function getIdentificationDocument()
    {
      return ($this -> identificationDocument);
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

    public function setBankAccount(BankAccount $bankAccount)    
    {
       $this -> bankAccount = $bankAccount;
    }

    public function getBankAccount()    
    {
       return $this -> bankAccount;
    }
  
  }