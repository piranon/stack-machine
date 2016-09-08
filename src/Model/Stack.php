<?php
namespace StackMachine\Model;

use StackMachine\Exception\StackEmptyException;

class Stack
{
    private $stack = [];

    public function pop()
    {
        if ($this->isEmpty()) {
            throw new StackEmptyException();
        }

        return array_pop($this->stack);
    }

    public function push($value)
    {
        return $this->stack[] = $value;
    }

    public function isEmpty()
    {
        return empty($this->stack);
    }
}
