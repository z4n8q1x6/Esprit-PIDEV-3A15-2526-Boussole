<?php

namespace App\DTO;

class TransactionTypeTotalDTO
{
    public string $type;
    public float $total;

    public function __construct(string $type, $total)
    {
        $this->type = $type;
        $this->total = (float) $total;
    }
}
