<?php

namespace App\Enums\Client;

enum GenderEnum: string
{
    case MR = 'mr';
    case MME = 'mme';

    public function getGenter(): string
    {
        return match ($this) {
            self::MR => 'Monsieur',
            self::MME => 'Madame',
        };
    }
}
