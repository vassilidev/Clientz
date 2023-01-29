<?php

namespace App\Enums\Client;

enum GenderEnum: string
{
    case MR = 'mr';
    case MME = 'mme';

    public function getGender(): string
    {
        return match ($this) {
            self::MR => __('generic.gender.mr'),
            self::MME => __('generic.gender.mme'),
        };
    }
}
