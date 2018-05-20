<?php
    namespace App\Tests;

    use App\Domain\Phone\Phone;
    use PHPUnit\Framework\TestCase;

    class PhoneTest extends TestCase
    {
        public function testSpanishMobile()
        {
            $phone = new Phone();
            $result = $phone->setPhone('+34626430093');
            $this->assertEquals(true,$result);
        }

        public function testSpanishFixPhone()
        {
            $phone = new Phone();
            $result = $phone->setPhone('+34935802472');
            $this->assertEquals(true,$result);
            
        }
        public function testSpanishFixPhoneWithoutCountry()
        {
            $phone = new Phone();
            $result = $phone->setPhone('935802472');
            $this->assertEquals(true,$result);
            
        }
        public function testSpanishFixPhoneWithoutCountryWithScores()
        {
            $phone = new Phone();
            $result = $phone->setPhone('93-580-24-72');
            $this->assertEquals(true,$result);
            
        }

        public function testSpanishMobileStartingWith6()
        {
            $phone = new Phone();
            $result = $phone->setPhone('626430093');
            $this->assertEquals(true,$result);
            
        }        
        
        public function testVeryShortPhone()
        {
            $phone = new Phone();
            $result = $phone->setPhone('626');
            $this->assertEquals(false,$result);
            
        }        

    }