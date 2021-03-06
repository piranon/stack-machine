<?php
use PHPUnit\Framework\TestCase;
use StackMachine\StackMachine;

class StackMachineTest extends TestCase
{
    public function testPassThirteenPlusSixtyTwoMulSevenPlusMulShouldReturnSeventySix()
    {
        $expected = 76;

        $string = '13+62*7+*';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassNinetyNineMulPlusNinePlusPlusShouldReturnNinetyNine()
    {
        $expected = 99;

        $string = '99*9+9+';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassTripleOnePlusOneShouldReturnOne()
    {
        $expected = 1;

        $string = '111*1';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassElevenDoublePlusShouldReturnMinusOne()
    {
        $expected = -1;

        $string = '11++';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassElevenDoubleMultiplyShouldReturnMinusOne()
    {
        $expected = -1;

        $string = '11**';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassInvalidCharactersShouldReturnMinusOne()
    {
        $expected = -1;

        $string = '99#9&$9+';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }

    public function testPassEmptyStringShouldReturnMinusOne()
    {
        $expected = -1;

        $string = '';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }
}
