<?php

namespace App\Enums;

enum LanguageProficiency: string
{
    case Basic = 'Basic';
    case Conversational = 'Conversational';
    case Fluent = 'Fluent';
    case Native = 'Native';
}
