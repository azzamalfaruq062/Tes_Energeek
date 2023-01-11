<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobs::create([
            'name' => 'Komisaris',
        ]);
        
        Jobs::create([
            'name' => 'Direktur',
        ]);

        Jobs::create([
            'name' => 'Kepala Devisi',
        ]);

        Jobs::create([
            'name' => 'Supervisor',
        ]);
    }
}
