<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\events;
use App\Models\eventImages;

class eventSeeder extends Seeder
{
    public function run()
    {
        events::factory()->count(100)->create()->each(function($eve) {
            $eve->images()->saveMany(eventImages::factory()->count(2)->make());
        });
    }
}
