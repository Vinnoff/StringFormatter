<?php
  use lib\StringFormatter;
  class StringFormatterTest extends \PHPUnit_Framework_TestCase
  {

      public function setUp()
      {
          $this->stringFormatter = new StringFormatter();
          $this->firstString = 'Pilou';
          $this->secondString = 'pAla';
      }


      public function testConcat()
      {
          $this->assertSame('PiloupAla', $this->stringFormatter->concat($this->firstString, $this->secondString));
      }

      public function testToCamelCase()
      {
          $result = $this->stringFormatter->toCamelCase($this->firstString, $this->secondString);
          $this->assertSame('PilouPala', $result);
      }

      public function testPrefix()
      {
          $result = $this->stringFormatter->prefix($this->firstString, $this->secondString);
          $this->assertSame('pAlaPilou', $result);

          $result = $this->stringFormatter->prefix($this->firstString, $this->secondString, true);
          $this->assertSame('PalaPilou', $result);
      }

      public function testSuffix()
      {
          $result = $this->stringFormatter->suffix($this->firstString, $this->secondString);
          $this->assertSame("PiloupAla", $result);

          $result = $this->stringFormatter->suffix($this->firstString, $this->secondString, true);
          $this->assertSame("PilouPala", $result);
      }
  }
?>
