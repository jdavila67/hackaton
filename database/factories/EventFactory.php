<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'event_date'=>$this->faker->dateTime,
            'event_duration_time'=>$this->faker->numberBetween(1,24),
            'event_title'=>$this->faker->company,
            'event_desc'=>$this->faker->text,
            'event_location'=>$this->faker->text,
            'event_coordinates'=>$this->faker->longitude,
            'is_active'=>$this->faker->boolean
        ];
    }
}
