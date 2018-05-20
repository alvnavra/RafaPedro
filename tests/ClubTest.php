<?php
namespace App\Tests;
use App\Domain\Club\Club;
  use PHPUnit\Framework\TestCase;
    
  class ClubTest extends TestCase{

    private $club;

    public function setUp()
    {
      parent::setUp();
      $this->club = new Club();
    }

    public function testInvalidStringId()
    {
        $result = $this->club->setId("hola");
        $this->assertEquals("KO",$result);
    }

    public function testValidId()
    {
        $result = $this->club->setId(25);
        $this->assertEquals("OK",$result);
    }

}