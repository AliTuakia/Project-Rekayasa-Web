@extends('layouts.app')

@section('title', 'Project Detail - ' . $project->title)

@section('content')
<div class="container mt-5">
    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Kembali
        </a>
    </div>
    <div class="row justify-content-center g-4">
        <div class="col-md-7">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}"
                    class="img-fluid h-100 w-100" style="min-height: 300px; object-fit: cover;">

            </div>
        </div>
        <div class="col-md-5">
            <div class="card h-100 ">
                <h5 class="card-title">Detail Project</h5>
                <div class="card-body">
                    <span
                        class="badge {{ $project->status === 'Selesai' ? 'bg-success' : 'bg-warning' }}">{{ $project->status }}</span>
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                </div>
                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small class="text-muted">Tech: {{ $project->teknologi }}</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection