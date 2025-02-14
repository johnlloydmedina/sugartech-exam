<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function index()
    {
        $male_count = Employee::where('gender', 'Male')->count();
        $female_count = Employee::where('gender', 'Female')->count();
        $average_age = Employee::all()->avg('age');
        $total_salary = Employee::sum('monthly_salary');

        return view('summary', compact('male_count', 'female_count', 'average_age', 'total_salary'));
    }
}
