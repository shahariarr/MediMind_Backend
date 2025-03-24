@extends('layout.app')

@section('content')
<div class="container-fluid hero-section py-5">
    <div class="row align-items-center">
        <div class="col-lg-6 px-4 py-5">
            <h1 class="display-4 fw-bold text-primary mb-3">Hi to MediMind</h1>
            <p class="lead mb-4">Your comprehensive healthcare management solution. Schedule appointments, track medications, and manage your health records all in one place.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a href="{{url('/userLogin')}}" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Get Started</a>
                <a href="{{url('/about')}}" class="btn btn-outline-secondary btn-lg px-4">Learn More</a>
            </div>
        </div>
        <div class="col-lg-6 text-center">
            <img src="{{ asset('images/images (1).png') }}" alt="MediMind Healthcare" class="img-fluid" style="max-height: 400px;">
        </div>
    </div>
</div>

<div class="container py-5">
    <h2 class="text-center mb-5">Key Features</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <h5 class="card-title">Appointment Management</h5>
                    <p class="card-text">Schedule and track your medical appointments with ease.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                        <i class="bi bi-capsule"></i>
                    </div>
                    <h5 class="card-title">Medication Tracking</h5>
                    <p class="card-text">Set reminders and track your medication schedule.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mb-3">
                        <i class="bi bi-file-medical"></i>
                    </div>
                    <h5 class="card-title">Health Records</h5>
                    <p class="card-text">Store and access your medical history securely.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2>Why Choose MediMind?</h2>
                <ul class="list-unstyled mt-3">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> User-friendly interface</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Secure and private</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Accessible anywhere, anytime</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Comprehensive health management</li>
                </ul>
                <a href="{{url('/userLogin')}}" class="btn btn-primary mt-3">Start Here</a>
            </div>
            <div class="col-lg-6 text-center">
                <img src="{{ asset('images/images (1).png') }}" alt="MediMind Dashboard" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .hero-section {
        background-color: #f8f9fa;
    }

    .feature-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }

    .card {
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }
</style>
@endpush

@push('scripts')
<script>
    // You can add any JavaScript functionality here
</script>
@endpush
