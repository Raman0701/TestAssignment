<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\eventImages;

class eventImagesFactory extends Factory
{
    protected $model = eventImages::class;

    public function definition()
    {
        $ids = eventImages::pluck('id')->toArray();
        return [
            'event_id' => $this->faker->randomElement($ids),
            //'image' => $this->faker->image('public/images/',400,300)
        ];
    }
}
