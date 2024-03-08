<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

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

        Role::updateOrCreate(['name' => 'participant']);
        Role::updateOrCreate(['name' => 'organiser']);
        Role::updateOrCreate(['name' => 'admin']);


        Permission::updateOrCreate(['name' => 'list users']);
        Permission::updateOrCreate(['name' => 'delete users']);
        Permission::updateOrCreate(['name' => 'create event']);
        Permission::updateOrCreate(['name' => 'edit event']);
        Permission::updateOrCreate(['name' => 'delete event']);
        Permission::updateOrCreate(['name' => 'verify event']);
        Permission::updateOrCreate(['name' => 'create category']);
        Permission::updateOrCreate(['name' => 'edit category']);
        Permission::updateOrCreate(['name' => 'delete category']);
        Permission::updateOrCreate(['name' => 'create category']);
        Permission::updateOrCreate(['name' => 'make reservation']);
        Permission::updateOrCreate(['name' => 'valider reservation']);

        $user = Admin::create([
            'name' => 'admin',
            'email' => 'admin@evnto.com',
            'password' => Hash::make('password'),
        ]);
        $user->assignRole('admin');




        $role = Role::findByName('admin');

        $role->givePermissionTo('verify event');
        $role->givePermissionTo('list users');
        $role->givePermissionTo('delete users');
        $role->givePermissionTo('create category');
        $role->givePermissionTo('edit category');
        $role->givePermissionTo('delete category');


    }
}
