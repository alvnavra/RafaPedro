<?php
  /*
    Ejecución de las pruebas:
    vendor/phpunit/phpunit/phpunit --bootstrap ./vendor/autoload.php ./src/Blog/Tests/MailTest.php
  */  
  namespace App\Tests;
  use App\Domain\Mail\Mail;
  use PHPUnit\Framework\TestCase;
    
  class MailTest extends TestCase{

    public function setUp()
    {
      parent::setUp();
    }

    /**
     * @param $originaResult
     * @param $expectedResult
     * @dataProvider mailsProvider
     */
    public function testIfTheMailLengthIsTooLongAndTheFormatIsRight($originaResult,$expectedResult)
    {
      $this -> assertEquals($originaResult,$expectedResult);
    }

    public static function mailsProvider(){

        $mail = new Mail();
        return array(
          array($mail->setMail('pepe@gmail.com'),"OK"),
          array($mail->setMail('pepe@'),"Invalid email format"),
          array($mail->setMail(''),"Invalid email format"),
          array($mail->setMail('.@.'),"Invalid email format"),
          array($mail->setMail('josecisneros1@gmail.com'),"OK"),
          array($mail->setMail('josecisneros_1@gmail.com'),"OK"),
          array($mail->setMail('joseci@neros_1@gmail.com'),"Invalid email format"),
        );
    }


  }