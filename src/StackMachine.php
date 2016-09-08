<?php
namespace StackMachine;

use StackMachine\Exception\InvalidCharacterException;
use StackMachine\Model\Stack;

/**
 * Class StackMachine
 * @package StackMachine
 */
class StackMachine
{
    const OPERATION_MULTIPLY = '*';
    const OPERATION_PLUS = '+';

    /**
     * @param string $input
     * @return int
     */
    public function solution($input)
    {
        $stack = new Stack();

        try {
            $stack = $this->processString($input, $stack);
        } catch (\Exception $e) {
            return -1;
        }

        return $stack->pop();
    }

    /**
     * Processes a string of characters
     *
     * @param string $input
     * @param Stack $stack
     * @return Stack
     * @throws InvalidCharacterException
     */
    private function processString($input, Stack $stack)
    {
        foreach (str_split($input) as $character) {
            switch($character){
                case StackMachine::OPERATION_MULTIPLY:
                    $stack->push($stack->pop() * $stack->pop());
                    break;
                case StackMachine::OPERATION_PLUS;
                    $stack->push($stack->pop() + $stack->pop());
                    break;
                default:
                    $stack->push($this->validateCharacter($character));
            }
        }

        return $stack;
    }

    /**
     * Validate the character should be numeric
     *
     * @param string $character
     * @return int
     * @throws InvalidCharacterException
     */
    private function validateCharacter($character)
    {
        if (is_numeric($character) === false) {
            throw new InvalidCharacterException();
        }

        return (int)$character;
    }
}
