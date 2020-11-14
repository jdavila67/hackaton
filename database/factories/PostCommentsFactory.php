<?php

namespace Database\Factories;

use App\Models\Organization;
use App\Models\Post;
use App\Models\PostComments;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostCommentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostComments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                    'comment'=>$this->faker->catchPhrase,
                    'post_id' => Post::all()->random()->id
        ];
    }
}
