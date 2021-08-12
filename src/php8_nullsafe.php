<?php

namespace Enggar\Php8;

class Nullsafe
{

    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function hello(): self
    {
        echo "Halo " . $this->name;

        return $this;
    }

    public function goodbye(): string
    {
        return "Goodbye " . $this->name;
    }

    public function getName(): self|null
    {

        if (empty($this->name)) {
            return null;
        }

        echo $this->name;

        return $this;
    }

}