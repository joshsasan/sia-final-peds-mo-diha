<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedal;

class PedalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pedals = [
            [
                'image' => 'images/distortion.png',
                'brand' => 'BOSS',
                'model' => 'DS-1',
                'type' => 'Distortion',
                'color' => 'Orange',
                'price' => 5999.00,
            ],
            [
                'image' => 'images/overdrive.png',
                'brand' => 'Ibanez',
                'model' => 'TS9',
                'type' => 'Overdrive',
                'color' => 'Green',
                'price' => 9999.00,
            ],
            [
                'image' => 'images/delay.png',
                'brand' => 'Electro-Harmonix',
                'model' => 'Memory Man',
                'type' => 'Delay',
                'color' => 'Silver',
                'price' => 18999.00,
            ],
            [
                'image' => 'images/wah.png',
                'brand' => 'Dunlop',
                'model' => 'Cry Baby',
                'type' => 'Wah',
                'color' => 'Black',
                'price' => 7999.00,
            ],
            [
                'image' => 'images/chorus.png',
                'brand' => 'MXR',
                'model' => 'M234',
                'type' => 'Chorus',
                'color' => 'Blue',
                'price' => 7499.00,
            ],
        ];
        
        foreach ($pedals as $pedal) {
            Pedal::create($pedal);
        }
    }
}
