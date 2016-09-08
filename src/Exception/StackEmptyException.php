<?php

namespace StackMachine\Exception;

/**
 * Class StackEmptyException
 * @package StackMachine\Exception
 */
class StackEmptyException extends \Exception
{
    const STATUS_CODE = 500;
    const MESSAGE = 'Stack empty';

    /**
     * StackEmptyException constructor.
     */
    public function __construct()
    {
        parent::__construct(
            StackEmptyException::MESSAGE,
            StackEmptyException::STATUS_CODE
        );
    }
}
