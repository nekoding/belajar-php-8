<?php

namespace Enggar\Php8;

class PhpUnion
{

    public function example(float|int $data): float|int
    {
        return $data;
    }

    public function example2(?string $nama): ?string
    {

        if (is_null($nama)) {
            return null;
        }

        return "Halo " . $nama; 

    }

}
