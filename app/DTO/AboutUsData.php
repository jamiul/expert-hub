<?php

namespace App\DTO;

class AboutUsData
{
    public string $header_title = '';
    public string $header_image = '';
    public string $area_title = '';
    public string $area_subtitle = '';
    public string $area_description = '';
    public string $instructor_title = '';
    public string $instructor_subtitle = '';
    public array $instructor_list = [];
    public string $mission_title = '';
    public string $mission_subtitle = '';
    public string $mission_description = '';
    public string $mission_image = '';
    public string $apart_title = '';
    public string $apart_subtitle = '';
    public string $team_title = '';
    public string $team_subtitle = '';
    public string $team_description = '';
    public array $team_list = [];
    public string $story_title = '';
    public string $story_subtitle = '';
    public string $story_description = '';
    public string $story_image = '';

    public function __construct($about)
    {
        if ($about) {
            $this->header_title = $about->header_title ?? '';
            $this->header_image = $about->header_image ?? '';
            $this->area_title = $about->area_title ?? '';
            $this->area_subtitle = $about->area_subtitle ?? '';
            $this->area_description = $about->area_description ?? '';
            $this->instructor_title = $about->instructor_title ?? '';
            $this->instructor_subtitle = $about->instructor_subtitle ?? '';
            $this->instructor_list = $about->instructor_list ?? [];
            $this->mission_title = $about->mission_title ?? '';
            $this->mission_subtitle = $about->mission_subtitle ?? '';
            $this->mission_description = $about->mission_description ?? '';
            $this->mission_image = $about->mission_image ?? '';
            $this->apart_title = $about->apart_title ?? '';
            $this->apart_subtitle = $about->apart_subtitle ?? '';
            $this->team_title = $about->team_title ?? '';
            $this->team_subtitle = $about->team_subtitle ?? '';
            $this->team_description = $about->team_description ?? '';
            $this->team_list = $about->team_list ?? [];
            $this->story_title = $about->story_title ?? '';
            $this->story_subtitle = $about->story_subtitle ?? '';
            $this->story_description = $about->story_description ?? '';
            $this->story_image = $about->story_image ?? '';
        }
    }
}
