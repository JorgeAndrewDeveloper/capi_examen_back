<?php

namespace Database\Factories;

use App\Models\UserAdress;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserAdressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserAdress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'adress' => $this->faker->address(),
            'exterior_number' => $this->faker->numberBetween($min = 10, $max = 1000),
            'suburb' => $this->faker->cityPrefix(),
            'zipcode' => $this->faker->numberBetween($min = 10000, $max = 99999),
            'city' => $this->faker->city()
        ];
    }
}
