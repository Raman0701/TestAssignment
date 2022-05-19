<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\events;

class eventsFactory extends Factory
{
    protected $model = events::class;

    public function definition()
    {
        return [
            'name' => 'event_'.Str::random(3)
        ];
    }
}
