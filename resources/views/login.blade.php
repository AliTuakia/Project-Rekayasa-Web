<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
    body {
        background-color: black;
        position: relative;

        /* background-image: url("{{ asset('images/gambar-unpam.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative; */
    }
</style>
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card border-0 shadow-sm p-4 rounded-4" style="width: 100%; max-width: 400px;">
            <div class="card-body">
                <h4 class="card-title text-center text-primary fw-bold mb-4">Login</h4>

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <form action="{{ route('action.login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary fw-semibold small">Alamat Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="nama@email.com" required autofocus>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label text-secondary fw-semibold small">Kata Sandi</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 rounded-3 fw-semibold">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>