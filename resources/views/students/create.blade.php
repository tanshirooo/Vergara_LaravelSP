@extends('layout')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            {{-- Professional Card Layout --}}
            <div class="card shadow-sm border-0">
                <div class="card-header bg-success text-white py-3">
                    <h4 class="mb-0"><i class="bi bi-person-plus-fill me-2"></i>Add New Student</h4>
                </div>
                
                <div class="card-body p-4">
                    <form method="POST" action="{{ url('/students') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-bold">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                <input name="name" class="form-control" placeholder="Enter full name" value="{{ old('name') }}" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                                <input name="email" type="email" class="form-control" placeholder="email@example.com" value="{{ old('email') }}" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-7 mb-3">
                                <label class="form-label fw-bold">Course</label>
                                <input name="course" class="form-control" placeholder="e.g. BSIT" value="{{ old('course') }}">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label class="form-label fw-bold">Year Level</label>
                                <select name="year" class="form-select">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="1" {{ old('year') == '1' ? 'selected' : '' }}>1st Year</option>
                                    <option value="2" {{ old('year') == '2' ? 'selected' : '' }}>2nd Year</option>
                                    <option value="3" {{ old('year') == '3' ? 'selected' : '' }}>3rd Year</option>
                                    <option value="4" {{ old('year') == '4' ? 'selected' : '' }}>4th Year</option>
                                </select>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{ url('/students') }}" class="btn btn-light px-4">Cancel</a>
                            <button type="submit" class="btn btn-success px-5 shadow-sm">
                                <i class="bi bi-check-circle me-1"></i> Save Student
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection