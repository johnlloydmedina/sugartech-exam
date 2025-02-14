<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // Count Male & Female Employees
        $maleCount = Employee::where('gender', 'Male')->count();
        $femaleCount = Employee::where('gender', 'Female')->count();

        // Calculate Average Age
        $averageAge = Employee::selectRaw('AVG(TIMESTAMPDIFF(YEAR, birthday, CURDATE())) as avg_age')
            ->value('avg_age');

        // Calculate Total Monthly Salary
        $totalSalary = Employee::sum('monthly_salary');

        return view('dashboard', compact('maleCount', 'femaleCount', 'averageAge', 'totalSalary'));
    }
}

