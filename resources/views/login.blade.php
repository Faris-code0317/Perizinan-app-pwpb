<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link href= {{ asset('bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('fontawesome/css/all.min.css') }} rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('Image/al-ittihad.png') }}" type="image/x-icon">
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="card shadow-lg">
            <div class="card-body p-5">
                <h2 class="text-center mb-4"><i class="fas fa-user-circle"></i> Login</h2>
                {{-- <img src="{{ asset('Image/al-ittihad.png') }}" alt="" width="50px" height="50px"> --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" value="{{ old('email') }}" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input type="password" name="password" class="form-control" placeholder="Enter your password">
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button name="submit" type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-sign-in-alt"></i> Login
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src={{ asset('bootstrap/js/bootstrap.bundle.min.js') }}></script>
</body>
</html>
