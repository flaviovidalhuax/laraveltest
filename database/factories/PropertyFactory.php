<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Feacture;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->word,
            "img"=>rand(10000,5000),
            "price"=>rand(1,10),
            "room"=>rand(1,10),
            "bathrooms"=>rand(1,10),
            "user_id"=>User::factory(),
            "feacture_id"=>Feacture::factory()
        ];
    }
}
