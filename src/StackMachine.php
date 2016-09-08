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
                    $stack[] = array_pop($stack) * array_pop($stack);
                    break;
                case StackMachine::OPERATION_PLUS;
                    $stack[] = array_pop($stack) + array_pop($stack);
                    break;
                default:
                    $stack[] = $char;
            }
        }

        return array_pop($stack);
    }
}
