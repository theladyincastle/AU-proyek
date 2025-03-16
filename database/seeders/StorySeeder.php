<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;

class StorySeeder extends Seeder
{
    public function run()
    {
        Story::create([
            'title' => 'Alternate Universe: The Beginning',
            'synopsis' => 'A journey into an unknown world filled with mystery.',
            'cover_image' => 'cover1.jpg'
        ]);

        Story::create([
            'title' => 'Parallel Worlds: A New Chapter',
            'synopsis' => 'An adventure through different timelines.',
            'cover_image' => 'cover2.jpg'
        ]);
    }
}

