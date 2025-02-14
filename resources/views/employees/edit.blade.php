@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">Edit Employee</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name', $employee->first_name) }}" required>
                    @error('first_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name', $employee->last_name) }}" required>
                    @error('last_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Gender</label>
                    <select name="gender" class="form-select @error('gender') is-invalid @enderror" required>
                        <option value="Male" {{ $employee->gender == 'Male' ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ $employee->gender == 'Female' ? 'selected' : '' }}>Female</option>
                    </select>
                    @error('gender')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Birthday</label>
                    <input type="date" name="birthday" class="form-control @error('birthday') is-invalid @enderror" value="{{ old('birthday', $employee->birthday) }}" required>
                    @error('birthday')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Monthly Salary</label>
                    <input type="number" name="monthly_salary" class="form-control @error('monthly_salary') is-invalid @enderror" value="{{ old('monthly_salary', $employee->monthly_salary) }}" required>
                    @error('monthly_salary')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-warning">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
