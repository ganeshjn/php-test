<?php

require 'Calculator.php';

class CalculatorTests extends PHPUnit\Framework\TestCase
{
  private $calculator;
  protected function setup()
  {
    $this->calculator = new Calculator();
  }
  protected function teardown()
  {
    $this->calculator = NULL;
  }
  public function addDataProvider()
  {
    return array(
      array(1, 2, 3),
      array(0, 0, 0),
      array(-1, -1, -2),
    );
  }
  /**
   * @dataProvider addDataProvider
   */
  public function testAdd($a, $b, $expected)
  {
    $result = $this->calculator->add($a, $b);
    $this->assertEquals($expected, $result);
  }
}
