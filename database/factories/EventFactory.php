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
            'event_time_from'=>$this->faker->time(),
            'event_time_to'=>$this->faker->time(),
            'event_title'=>$this->faker->company,
            'event_desc'=>$this->faker->text,
            'event_location'=>$this->faker->city,
            'event_coordinates'=>$this->faker->longitude,
            'is_active'=>$this->faker->boolean
        ];
    }
}
