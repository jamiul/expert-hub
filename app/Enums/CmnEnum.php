<?php

namespace App\Enums;

abstract class CmnEnum
{
    const TITLE_MIN = 5;
    const TITLE_MAX = 50;
    const SUBTITLE_MIN = 4;
    const SUBTITLE_MAX = 20;
    const DESCRIPTION_MIN = 100;
    const DESCRIPTION_MAX = 1500;
    const BANNER_WIDTH = 1920;
    const BANNER_HEIGHT = 380;
    const IMAGE_SIZE = 2048; // 2 MB
    const ICON_SIZE = 512; // 0.5 MB
}