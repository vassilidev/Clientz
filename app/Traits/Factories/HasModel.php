<?php

namespace App\Traits\Factories;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

trait HasModel
{
    /**
     * @param string $model
     *
     * @return Model
     */
    private function getModel(string $model): Model
    {
        /** @var Model $model */
        $returnModel = $model::query()->inRandomOrder()->first();

        return (!$returnModel && in_array(HasFactory::class, class_uses(new $model), true))
            ? $model::factory()->create()->first()
            : $returnModel;
    }
}
