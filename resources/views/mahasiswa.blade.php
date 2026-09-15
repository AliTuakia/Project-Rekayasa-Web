<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-light">

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="card shadow border-0">

                    <div class="card-header bg-primary text-white text-center py-4">
                        <h2 class="mb-0">
                            Profile Mahasiswa
                        </h2>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <div class="bg-primary text-white rounded-circle
                                    d-inline-flex align-items-center
                                    justify-content-center"
                                style="width: 90px; height: 90px;">

                                <span class="fs-1">
                                    {{ strtoupper(substr($mahasiswa['nama'], 0, 1)) }}
                                </span>

                            </div>

                            <h4 class="mt-3 mb-1">
                                {{ $mahasiswa['nama'] }}
                            </h4>

                            <p class="text-muted mb-0">
                                {{ $mahasiswa['prodi'] }}
                            </p>
                        </div>

                        <hr>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                NIM
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['nim'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                Nama
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['nama'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                Prodi
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['prodi'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                Alamat
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['alamat'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                Kampus
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['kampus'] }}
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-4 fw-bold">
                                Email
                            </div>

                            <div class="col-8">
                                {{ $mahasiswa['email'] }}
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4 fw-bold">
                                Status
                            </div>

                            <div class="col-8">
                                <span class="badge bg-success">
                                    {{ $mahasiswa['status'] }}
                                </span>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer text-center text-muted">
                        Data Profile Mahasiswa
                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>