<?php

namespace StackMachine\Exception;

/**
 * Class InvalidCharacterException
 * @package StackMachine\Exception
 */
class InvalidCharacterException extends \Exception
{
    const STATUS_CODE = 500;
    const MESSAGE = 'Invalid character';

    /**
     * InvalidCharacterException constructor.
     */
    public function __construct()
    {
        parent::__construct(
            StackEmptyException::MESSAGE,
            StackEmptyException::STATUS_CODE
        );
    }
}
