<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Unit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $u = new Unit;
        $u->name = 'marine';
        $u->description = 'man with gun';
        $u->image_path = '/img/marine.webp';
        $u->hp = 45;
        $u->armor = 0;
        $u->speed = 3.15;
        $u->attack_number = 1;
        $u->attack_damage = 6;
        $u->attack_speed = 0.61;
        $u->price_minerals = 50;
        $u->save();

        $u = new Unit;
        $u->name = 'zergling';
        $u->description = 'the destroyer of worlds if no AOE';
        $u->image_path = '/img/zergling.webp';
        $u->hp = 35;
        $u->armor = 0;
        $u->speed = 4.13;
        $u->attack_number = 1;
        $u->attack_damage = 5;
        $u->attack_speed = 0.5;
        $u->price_minerals = 25;
        $u->save();

        $u = new Unit;
        $u->name = 'hydralisk';
        $u->description = 'expensive marine with no hitscan';
        $u->image_path = '/img/hydralisk.webp';
        $u->hp = 90;
        $u->armor = 0;
        $u->speed = 3.15;
        $u->attack_number = 1;
        $u->attack_damage = 12;
        $u->attack_speed = 0.59;
        $u->price_minerals = 100;
        $u->price_vespene = 50;
        $u->save();
    }
}
