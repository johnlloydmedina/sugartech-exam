@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Employee Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $employee->first_name }} {{ $employee->last_name }}</h5>
            <p class="card-text"><strong>Gender:</strong> {{ $employee->gender }}</p>
            <p class="card-text"><strong>Birthday:</strong> {{ $employee->birthday }}</p>
            <p class="card-text"><strong>Monthly Salary:</strong> ${{ number_format($employee->monthly_salary, 2) }}</p>
            <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection
