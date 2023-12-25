<?php

namespace App\DTO;

class AboutApartDTO
{
    public int $about_us_id = 1;
    public string $set_title = '';
    public string $description = '';
    public string $icon = '';
    public string $type = '';
    public bool $active = true;

    public function __construct($aboutApart) {
        // dd(isset($aboutApart));
        if (count($aboutApart) > 0) {
            $this->about_us_id = $aboutApart->about_us_id ?? 1;
            $this->set_title = $aboutApart->set_title ?? '';
            $this->description = $aboutApart->description ?? '';
            $this->icon = $aboutApart->icon ?? '';
            $this->type = $aboutApart->type ?? '';
            $this->active = $aboutApart->active ?? true;
        }
    }
}