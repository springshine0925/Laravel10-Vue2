<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create([
        //     'firstname' => 'John',
        //     'middlename' => 'Smiss',
        //     'lastname' => 'Doe',
        //     'birthday'=> '2010-05-01'
        // ]);
        DB::table('student')->insert([
            'firstname' => "John",
            'middlename' => "Smith",
            'lastname' => "Doe",
            'birthday' => "2020-03-05",
            'start_session' => "2024-03-05",
            'end_session' => "2024-03-07",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
    }
}
