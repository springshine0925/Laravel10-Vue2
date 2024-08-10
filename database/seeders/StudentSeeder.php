<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'firstname' => 'John',
            'middlename' => 'Smiss',
            'lastname' => 'Doe',
            'birthday'=> '2010-05-01'
        ]);
    }
}
