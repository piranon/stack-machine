<?php
namespace StackMachine\Model;

use StackMachine\Exception\StackEmptyException;

/**
 * Class Stack
 * @package StackMachine\Model
 */
class Stack
{
    /**
     * @var array
     */
    private $stack = [];

    /**
     * Returns top element of stack
     *
     * @return mixed
     * @throws StackEmptyException
     */
    public function pop()
    {
        if ($this->isEmpty()) {
            throw new StackEmptyException();
        }

        return array_pop($this->stack);
    }

    /**
     * Push value to the stack
     *
     * @param $value
     * @return mixed
     */
    public function push($value)
    {
        return $this->stack[] = $value;
    }

    /**
     * Returns true, if stack is empty
     *
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->stack);
    }
}
