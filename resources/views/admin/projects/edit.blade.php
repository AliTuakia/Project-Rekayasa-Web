@extends('admin.template')
@section('title', 'Edit Project')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white py-3 d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-0 fw-bold">Edit Data Project</h5>
                <a href="{{ route('admin.project.index') }}" class="btn btn-sm btn-secondary">
                    &larr; Kembali
                </a>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label fw-semibold">Judul Project <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $project->title) }}" placeholder="Masukkan judul project" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="teknologi" class="form-label fw-semibold">Teknologi <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('teknologi') is-invalid @enderror" id="teknologi" name="teknologi" value="{{ old('teknologi', $project->teknologi) }}" placeholder="Contoh: Laravel, Bootstrap, MySQL" required>
                            @error('teknologi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label fw-semibold">Status <span class="text-danger">*</span></label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="">-- Pilih Status --</option>
                                <option value="Selesai" {{ strtolower(old('status', $project->status)) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="In Progress" {{ strtolower(old('status', $project->status)) == 'in progress' ? 'selected' : '' }}>In Progress</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label fw-semibold">Gambar Project</label>
                        @if($project->image)
                            <div class="mb-2" id="current-image-wrapper">
                                <p class="text-muted small mb-1">Gambar saat ini:</p>
                                <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->title }}" class="img-thumbnail" style="max-height: 150px;">
                            </div>
                        @endif

                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                        <small class="text-muted d-block mt-1">Format gambar: JPG, JPEG, PNG, WEBP (Maks. 2MB). Biarkan kosong jika tidak ingin mengubah gambar.</small>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mt-2" id="preview-wrapper" style="display: none;">
                            <p class="text-muted small mb-1">Gambar baru:</p>
                            <img id="image-preview" src="#" alt="Preview Gambar Baru" class="img-thumbnail" style="max-height: 150px;">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="description" class="form-label fw-semibold">Deskripsi Project <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="5" placeholder="Tuliskan deskripsi lengkap mengenai project..." required>{{ old('description', $project->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('admin.project.index') }}" class="btn btn-outline-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary px-4">Update Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function previewImage(event) {
        const input = event.target;
        const previewWrapper = document.getElementById('preview-wrapper');
        const preview = document.getElementById('image-preview');

        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                previewWrapper.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        } else {
            previewWrapper.style.display = 'none';
        }
    }
</script>
@endpush
