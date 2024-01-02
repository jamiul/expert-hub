<?php

namespace App\Enums;

enum AboutUsEnum: int
{
    case TitleMin = 5;
    case TitleMax = 60;
    case SubtitleMin = 4;
    case SubtitleMax = 30;
    case DescriptionMin = 100;
    case DescriptionMax = 1500;
    case BannerWidth = 1920;
    case BannerHeight = 380;
    case ImageSize = 2048; // 2 MB
    case IconSize = 512; // 0.5 MB
}
