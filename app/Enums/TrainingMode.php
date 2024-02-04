<?php

namespace App\Enums;

enum TrainingMode: string
{
    case Zoom = 'Zoom Link';
    case FaceToFace = 'Face To Face';

    public function icon(): string
    {
        return match ($this) {
            TrainingMode::Zoom => 'video',
            TrainingMode::FaceToFace => 'green',
        };
    }
}
