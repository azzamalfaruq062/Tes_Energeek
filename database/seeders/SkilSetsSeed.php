<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkilSetsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::create([
            'name' => 'PHP',
        ]);
        Skills::create([
            'name' => 'JavaScript',
        ]);
        Skills::create([
            'name' => 'Golang',
        ]);
        Skills::create([
            'name' => 'JQuary',
        ]);
        Skills::create([
            'name' => 'CSS',
        ]);
    }
}
