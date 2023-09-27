<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => 1, 'name' => 'Firman', 'score' => 80],
            ['id' => 2, 'name' => 'Panji', 'score' => 90],
            ['id' => 3, 'name' => 'Utama', 'score' => 100],
        ];

        DB::table('students')->insert($data);
    }
}
