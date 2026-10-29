@extends('admin.template')
@section('title', 'Halaman Project')
@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card border-0 shadow-sm">
            <div class="card-body">
        <div class="d-flex justify-content-between align-items-center card-header">
            <h5 class="card-title mb-0">Data Project</h5>
            <a href="{{ route('admin.project.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered w-100" id="tb_project">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Deksripsi</th>
                        <th>Tekonologi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
                @foreach ($projects as $index => $project)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><img src="{{ asset('images/' . $project->image) }}" class="img-thumbnail" style="width: 80px; height: 50px; object-fit: cover;"></td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->teknologi}}</td>
                        <td>{{ $project->status }}</td>
                        <td>
                            <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            @csrf
                            @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
@push ('scripts')
    <script>
        $(document).ready(function() {
            $('#tb_project').DataTable();
        });
    </script>
@endpush