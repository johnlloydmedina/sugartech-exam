@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">Summary</h2>

    <div class="row">
        <!-- Male Count -->
        <div class="col-md-3">
            <div class="card bg-primary text-white shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Male Employees</h5>
                    <p class="card-text display-6">{{ $maleCount }}</p>
                </div>
            </div>
        </div>

        <!-- Female Count -->
        <div class="col-md-3">
            <div class="card bg-danger text-white shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Female Employees</h5>
                    <p class="card-text display-6">{{ $femaleCount }}</p>
                </div>
            </div>
        </div>

        <!-- Average Age -->
        <div class="col-md-3">
            <div class="card bg-warning text-dark shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Average Age</h5>
                    <p class="card-text display-6">{{ number_format($averageAge, 2) }}</p>
                </div>
            </div>
        </div>

        <!-- Total Salary -->
        <div class="col-md-3">
            <div class="card bg-success text-white shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">Total Monthly Salary</h5>
                    <p class="card-text display-6">${{ number_format($totalSalary, 2) }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Button to Employee Management -->
    {{-- <div class="mt-4">
        <a href="{{ route('employees.index') }}" class="btn btn-dark btn-lg">Manage Employees</a>
    </div> --}}
</div>
@endsection
