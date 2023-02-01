<?php

namespace App\Enums\Client;

enum GenderEnum: string
{
    case MR = 'mr';
    case MME = 'mme';

    /**
     * @return string
     */
    public function getLong(): string
    {
        return match ($this) {
            self::MR => __('generic.gender.mr.long'),
            self::MME => __('generic.gender.mme.long'),
        };
    }
}
