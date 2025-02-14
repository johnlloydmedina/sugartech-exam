<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'first_name' => 'Juan',
                'last_name' => 'Dela Cruz',
                'gender' => 'Male',
                'birthday' => '1990-05-15',
                'monthly_salary' => 50000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Maria',
                'last_name' => 'Santos',
                'gender' => 'Female',
                'birthday' => '1995-08-22',
                'monthly_salary' => 45000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Pedro',
                'last_name' => 'Gomez',
                'gender' => 'Male',
                'birthday' => '1987-12-10',
                'monthly_salary' => 60000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'first_name' => 'Anna',
                'last_name' => 'Reyes',
                'gender' => 'Female',
                'birthday' => '1998-03-30',
                'monthly_salary' => 40000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
