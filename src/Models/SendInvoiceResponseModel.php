<?php

namespace KianKamgar\MoadianPhp\Models;

use KianKamgar\MoadianPhp\Interfaces\ResponseModelInterface;

class SendInvoiceResponseModel implements ResponseModelInterface
{
    private string $timestamp;
    private array $result;

    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    public function getResult(): array
    {
        return $this->result;
    }

    public function decodeResponse(array $response): ResponseModelInterface
    {
        $this->timestamp = $response['timestamp'];
        $this->result = [];

        foreach ($response['result'] as $item) {

            $this->result[] = (new SendInvoiceResultResponseModel())->decodeResponse($item);
        }

        return $this;
    }
}