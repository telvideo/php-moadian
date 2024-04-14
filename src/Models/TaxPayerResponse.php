<?php

namespace KianKamgar\MoadianPhp\Models;

use KianKamgar\MoadianPhp\Interfaces\ResponseModel;

class TaxPayerResponse implements ResponseModel
{
    private string $nameTrade;
    private string $taxpayerStatus;
    private string $nationalId;

    public function getNameTrade(): string
    {
        return $this->nameTrade;
    }

    public function getTaxpayerStatus(): string
    {
        return $this->taxpayerStatus;
    }

    public function getNationalId(): string
    {
        return $this->nationalId;
    }

    public function decodeResponse(array $response): ResponseModel
    {
        $this->nameTrade = $response['nameTrade'];
        $this->taxpayerStatus = $response['taxpayerStatus'];
        $this->nationalId = $response['nationalId'];

        return $this;
    }
}