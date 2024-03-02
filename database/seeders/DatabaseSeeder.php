<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory()
            ->count(3)
            ->has(Event::factory()->count(2))
            ->create();

        $categories = Category::all();
        $events = Event::all();

        $images = ['1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg'];

        foreach ($categories as $category) {
            $imageName = array_shift($images);
            DB::table('images')->insert([
                'path' => $imageName,
                'imageable_id' => $category->id,
                'imageable_type' => 'App\Models\Category',
            ]);
        }

        foreach ($events as $event) {

            $imageName = array_shift($images);

            DB::table('images')->insert([
                'path' => $imageName,
                'imageable_id' => $event->id,
                'imageable_type' => 'App\Models\Event',
            ]);
        }

    }
}
