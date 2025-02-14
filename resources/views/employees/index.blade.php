@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between">
        <h2>Employee List</h2>
        <a href="{{ route('employees.create') }}" class="btn btn-success mb-3">Add Employee</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Monthly Salary</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $key => $employee)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <td>{{ $employee->gender }}</td>
                <td>{{ $employee->birthday }}</td>
                <td>₱{{ number_format($employee->monthly_salary, 2) }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info btn-sm">Show</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
