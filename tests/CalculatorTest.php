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
        $resultado = $this->calculator->somar(-2, -3);
        $this->assertEquals(-5, $resultado);
    }

    public function testSomarWithZero()
    {
        $resultado = $this->calculator->somar(0, 5);
        $this->assertEquals(5, $resultado);
    }
        // subtrair
        public function testSubtrairSimples()
        {
            $this->assertEquals(2, $this->calculator->subtrair(5, 3));
        }
        public function testSubtrairNegativo()
        {
            $this->assertEquals(-1, $this->calculator->subtrair(2, 3));
        }

        // multiplicar
        public function testMultiplicarPositivos()
        {
            $this->assertEquals(6, $this->calculator->multiplicar(2, 3));
        }
        public function testMultiplicarComZero()
        {
            $this->assertEquals(0, $this->calculator->multiplicar(2, 0));
        }
        public function testMultiplicarNegativo()
        {
            $this->assertEquals(-6, $this->calculator->multiplicar(-2, 3));
        }

        // dividir
        public function testDividirExata()
        {
            $this->assertEquals(2, $this->calculator->dividir(6, 3));
        }
        public function testDividirDecimal()
        {
            $this->assertEquals(2.5, $this->calculator->dividir(5, 2));
        }
        public function testDividirPorZero()
        {
            $this->expectException(\InvalidArgumentException::class);
            $this->calculator->dividir(5, 0);
        }

        // potencia
        public function testPotenciaPositiva()
        {
            $this->assertEquals(8, $this->calculator->potencia(2, 3));
        }
        public function testPotenciaZero()
        {
            $this->assertEquals(1, $this->calculator->potencia(5, 0));
        }
        public function testPotenciaNegativa()
        {
            $this->assertEquals(0.25, $this->calculator->potencia(2, -2));
        }

        // raizQuadrada
        public function testRaizQuadradaPositiva()
        {
            $this->assertEquals(3, $this->calculator->raizQuadrada(9));
        }
        public function testRaizQuadradaZero()
        {
            $this->assertEquals(0, $this->calculator->raizQuadrada(0));
        }
        public function testRaizQuadradaNegativa()
        {
            $this->expectException(\InvalidArgumentException::class);
            $this->calculator->raizQuadrada(-4);
        }

        // fatorial
        public function testFatorialZero()
        {
            $this->assertEquals(1, $this->calculator->fatorial(0));
        }
        public function testFatorialUm()
        {
            $this->assertEquals(1, $this->calculator->fatorial(1));
        }
        public function testFatorialMaior()
        {
            $this->assertEquals(24, $this->calculator->fatorial(4));
        }
        public function testFatorialNegativo()
        {
            $this->expectException(\InvalidArgumentException::class);
            $this->calculator->fatorial(-2);
        }

        // ehPar
        public function testEhParPositivoPar()
        {
            $this->assertTrue($this->calculator->ehPar(4));
        }
        public function testEhParPositivoImpar()
        {
            $this->assertFalse($this->calculator->ehPar(3));
        }
        public function testEhParZero()
        {
            $this->assertTrue($this->calculator->ehPar(0));
        }
        public function testEhParNegativoPar()
        {
            $this->assertTrue($this->calculator->ehPar(-2));
        }
        public function testEhParNegativoImpar()
        {
            $this->assertFalse($this->calculator->ehPar(-3));
        }

        // media
        public function testMediaVariosNumeros()
        {
            $this->assertEquals(3, $this->calculator->media([1,2,3,4,5]));
        }
        public function testMediaUnicoNumero()
        {
            $this->assertEquals(10, $this->calculator->media([10]));
        }
        public function testMediaArrayVazio()
        {
            $this->expectException(\InvalidArgumentException::class);
            $this->calculator->media([]);
        }

        // maiorNumero
        public function testMaiorNumeroPositivos()
        {
            $this->assertEquals(5, $this->calculator->maiorNumero([1,2,3,4,5]));
        }
        public function testMaiorNumeroNegativos()
        {
            $this->assertEquals(-1, $this->calculator->maiorNumero([-1,-2,-3,-4,-5]));
        }
        public function testMaiorNumeroMisto()
        {
            $this->assertEquals(10, $this->calculator->maiorNumero([-10, 0, 10]));
        }
        public function testMaiorNumeroArrayVazio()
        {
            $this->expectException(\InvalidArgumentException::class);
            $this->calculator->maiorNumero([]);
        }
}