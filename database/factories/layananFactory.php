<?php

namespace Database\Factories;

use App\Models\layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

class layananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = layanan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_layanan' => $this->faker->word,
        'keterangan' => $this->faker->word,
        'foto' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
