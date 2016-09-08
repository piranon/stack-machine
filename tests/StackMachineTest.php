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

    public function testPassNinetyNineMulPlusNinePlusPlusShouldReturnNine()
    {
        $expected = 99;

        $string = '99*9+9+';
        $stackMachine = new StackMachine();
        $result = $stackMachine->solution($string);

        $this->assertSame($expected, $result);
    }
}
