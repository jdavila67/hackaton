<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'address_line_one'=>$this->faker->streetAddress,
            'address_line_two'=>$this->faker->streetAddress,
            'address_line_three'=>$this->faker->streetAddress,
            'zip_code'=>$this->faker->postcode,
            'zip_code_plus'=>$this->faker->postcode,
            'city'=>$this->faker->city,
            'state'=>$this->faker->state,
            'country'=>$this->faker->country,
            'is_postal'=>$this->faker->boolean
        ];
    }
}
