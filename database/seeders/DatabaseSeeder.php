<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Company;
use App\Models\Department;
use App\Models\Problem;
use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        Company::factory(3)->create();
        Department::factory(3)->create();
        Board::factory(3)->create();
        Problem::factory(3)->create();
        Task::factory(3)->create();



    }
}
