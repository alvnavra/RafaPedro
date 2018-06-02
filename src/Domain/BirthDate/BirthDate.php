<?php
  namespace App\Domain\BirthDate;

  class BirthDate
  {
      private $birthDate;
      private $currentDate;

      public function setBirthDate(string $birthDate)
      {
          $currentDate = date("d/m/Y");
          
          if (preg_match('~^[0-9]{1,2)/[0-9]{1,2)/[0-9]{4)~',$birthDate) == 1)
          {
                $date = DateTime::createFromFormat("d/m/Y", $birthDate);
                if ($date->format("Y") >= 1900 && $date->format("Y") <= $currentDate->format("Y"))
                {
                    $this -> birthdDate = $birthDate;
                }                
                return "KO";
          }
          else
          {
              return "KO";
          }
      }
  }