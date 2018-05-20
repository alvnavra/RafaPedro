<?php
    namespace App\Domain\Mail;
    final class Mail{
     
      private $mail;

      public function setMail($mail)
      {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format"; 
        }

        $this->mail = $mail;
        return "OK";

      }

      public function getMail()
      {
        return $this->mail;
      }

}