<?php

namespace App\DTO;

class AboutApartDTO
{
    public int $about_us_id;
    public string $set_title = '';
    public string $description = '';
    public string $icon = '';
    public string $type = '';
    public bool $active = true;

    public function __construct($aboutApart) {
        // dd($aboutApart);
        // dd(isset($aboutApart));
        if (($aboutApart)) {
            $this->about_us_id = $aboutApart->about_us_id ?? null;
            $this->set_title = $aboutApart->set_title ?? '';
            $this->description = $aboutApart->description ?? '';
            $this->icon = $aboutApart->icon ?? '';
            $this->type = $aboutApart->type ?? '';
            $this->active = $aboutApart->active ?? true;
        }
    }
}