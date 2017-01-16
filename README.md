# stack-machine [![Build Status](https://travis-ci.org/piranon/stack-machine.svg?branch=master)](https://travis-ci.org/piranon/stack-machine)

A stack machine is a simple system that performs arithmetic operations on an input string of numbers and operators

## Installation

Simply to add a dependency on `piranon/stack-machine` to your project's `composer.json` file.

    {
        "require": {
            "piranon/stack-machine": "1.0.*"
        },
        "repositories": [
            {
                "type": "vcs",
                "url":  "git@github.com:piranon/stack-machine.git"
            }
        ]
    }

## Usage

```php
<?php

$stackMachine = new \StackMachine\StackMachine();
$result = $stackMachine->solution('13+62*7+*');

var_dump($result);
```
