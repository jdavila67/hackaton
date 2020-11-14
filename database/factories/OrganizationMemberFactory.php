<?php

namespace Database\Factories;

use App\Models\OrganizationMember;
use Illuminate\Database\Eloquent\Factories\Factory;


class OrganizationMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrganizationMember::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                    'name'=>$this->faker->name,
                    'role'=>$this->faker->sentence(1,true),
                    'picture'=>$this->faker->password
        ];

    }
}
