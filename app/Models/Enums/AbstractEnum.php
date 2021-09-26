<?php

namespace App\Models\Enums;

use InvalidArgumentException;
use ReflectionClass;

abstract class AbstractEnum {
    protected mixed $value;

    public function __construct($value)
    {
        if (!in_array($value, static::getOptions())) {
            throw new InvalidArgumentException('constant not found for value ' . $value);
        }

        $this->value = $value;
    }

    public static function getOptions(): array
    {
        $constants = (new ReflectionClass(static::class))->getConstants();

        return array_values($constants);
    }

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
    }
}
