<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedal>
 */
class PedalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $brands = ['BOSS', 'Ibanez', 'Electro-Harmonix', 'Dunlop', 'MXR', 'TC Electronic'];
        $types = ['Distortion', 'Overdrive', 'Delay', 'Wah', 'Chorus', 'Tuner'];
        $colors = ['Orange', 'Green', 'Silver', 'Black', 'Blue', 'White'];
        $models = [
            'DS-1',       
            'TS9',        
            'Memory Man', 
            'Cry Baby',   
            'M234',       
            'Polytune'
        ];

        return [       
            'brand' => $this->faker->randomElement($brands),
            'model' => $this->faker->randomElement($models),
            'type' => $this->faker->randomElement($types),
            'color' => $this->faker->randomElement($colors),
            'price' => $this->faker->randomFloat(2, 5000, 20000),
            'image' => 'images/' . strtolower(str_replace(' ', '-', $this->faker->randomElement($models))) . '.png', 
        ];
    }
}
