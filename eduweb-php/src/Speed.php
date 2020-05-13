<?php

namespace Eduweb;

class Speed
{
    const MILES = 'mph';
    const KILOMETERS = 'km/h';

    protected $value = 0.0;
    protected $unit = self::KILOMETERS; // default value
    protected $validTypes = [self::KILOMETERS, self::MILES];

    public function __construct(float $value, ?string $type = null)
    {
        if (in_array($type, $this->validTypes, true)) {
            $this->unit = $type;
        }

        $this->value = $value;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return sprintf('%.2f %s', $this->value, $this->unit);
    }
}