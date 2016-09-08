<?php
namespace StackMachine;

class StackMachine
{
    const OPERATION_MULTIPLY = '*';
    const OPERATION_PLUS = '+';

    public function solution($string)
    {
        $stack = [];

        foreach (str_split($string) as $char) {
            switch($char){
                case StackMachine::OPERATION_MULTIPLY:
                    $value1 = array_pop($stack);
                    $value2 = array_pop($stack);
                    if ($value1 === null || $value2 === null) {
                        return -1;
                    }
                    $stack[] = $value1 * $value2;
                    break;
                case StackMachine::OPERATION_PLUS;
                    $value1 = array_pop($stack);
                    $value2 = array_pop($stack);
                    if ($value1 === null || $value2 === null) {
                        return -1;
                    }
                    $stack[] = $value1 + $value2;
                    break;
                default:
                    if (!is_numeric($char)) {
                        return -1;
                    }
                    $stack[] = (int) $char;
            }
        }

        return array_pop($stack);
    }
}
