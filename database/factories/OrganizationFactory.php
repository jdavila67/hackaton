<?php

namespace Database\Factories;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrganizationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Organization::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->company,
            'description'=>$this->faker->text,
            'mission'=>$this->faker->text,
            'vision'=>$this->faker->text,
            'email'=>$this->faker->unique()->companyEmail,
            'phone_number_one'=>$this->faker->phoneNumber,
            'phone_number_two'=>$this->faker->phoneNumber,
            'org_logo'=>$this->faker->rgbColor
        ];
    }
}
