<?php 

use PHPUnit\Framework\TestCase;
use App\Calculator;
class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testSomar()
    {
       $a = 5;
        $b = 3;
        $esperado = 8;

        $resultado = $this->calculator->somar($a, $b);
        $this->assertEquals($esperado, $resultado);
    }

    public function testSomarWithNegativeNumbers()
    {
        $result = $this->calculator->somar(-2, -3);
        $this->assertEquals(-5, $result);
    }

    public function testSomarWithZero()
    {
        $result = $this->calculator->somar(0, 5);
        $this->assertEquals(5, $result);
    }
}