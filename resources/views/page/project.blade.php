@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <div class="mb-4 text-center">
            <h2 class="fw-bold">Portofolio Project</h2>
<p class="text-muted">Daftar project mahasiswa universitas pamulang</p>
</div>

<div class="row justify-content-center g-4">
    @foreach ($projects as $project)
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="card-img-top"
                    style="height: 200px; object-fit: cover;">

                <div class="card-body">
                    <span
                        class="badge {{ $project->status === 'Selesai' ? 'bg-success' : 'bg-warning' }}">
                        {{ $project->status }}
                    </span>

                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ Str::limit($project->description, 50) }}</p>
                </div>

                <div class="card-footer bg-white border-0 pb-3">
                    <div class="mb-2">
                        <small class="text-muted">Tech: {{ $project->teknologi }}</small>
                    </div>

                    <a href="{{ route('project.show', $project->id) }}" class="btn
                    btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="d-flex justify-content-center mt-4">
    {{ $projects->links('pagination::bootstrap-5') }}
</div>
@endsection