@extends('layouts.layout')

@section('title', 'BPDB HR Recruitment')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center align-items-center min-vh-75">
            <div class="col-12 col-md-10 col-lg-8">

                <div class="card shadow-sm border-0">
                    <div class="card-body text-center p-5">

                        <div class="mb-4">
                            <i class="bi bi-people-fill display-3 text-primary"></i>
                        </div>

                        <h1 class="fw-bold mb-3">
                            BPDB HR Recruitment
                        </h1>

                        <p class="text-muted mb-2">
                            Bangladesh Power Development Board
                        </p>

                        <p class="mb-4">
                            Human Resources Recruitment Management System
                        </p>

                        {{-- Temporary Login Button --}}
                        <button type="button" class="btn btn-primary btn-lg" disabled>
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            Login
                        </button>

                        <div class="mt-4">
                            <small class="text-muted">
                                Login functionality will be available soon.
                            </small>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
