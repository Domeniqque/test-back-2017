<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Doctor::class)->create([
            'name' => 'Dr. Rodney Stratton',
            'phone' => '(985) 123-3410',
            'description' => 'Sed tristique turpis a libero malesuada, tincidunt elementum mauris euismod.',
            'speciality' => 'Physiotherapist',
            'photo' => "image/team-1.png",
        ]);

        factory(Doctor::class)->create([
            'name' => 'Dr. Lita White',
            'phone' => '(985) 231-1234',
            'description' => 'Maecenas commodo turpis adipiscing, malesuada ipsum in, molestie magna.',
            'speciality' => 'Neurosurgeon',
            'photo' => "image/team-2.png",
        ]);

        factory(Doctor::class)->create([
            'name' => 'Robert Brown, Prof.',
            'phone' => '(985) 231-1234',
            'description' => 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.',
            'speciality' => 'Anesthesiologist',
            'photo' => "image/team-3.png",
        ]);
    }
}
