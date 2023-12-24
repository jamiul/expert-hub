<?php

namespace App\DTO;

use App\Models\AboutUs;

class AboutUsData
{
    public $header_subtitle;
    public $instructor_list;

    public function __construct(AboutUs $aboutUs)
    {
        $this->header_subtitle = $aboutUs->header_subtitle ?? '';
        $this->instructor_list = $aboutUs->instructor_list ?? [];
    }
}
