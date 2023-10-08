<?php

namespace App\DTO;

class DummyDTO
{
    public string $message;

    public function toArray(): array
    {
        return [
            'state' => $this->state->value,
            'message' => $this->message
        ];
    }
}
