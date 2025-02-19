<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Library Management System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            max-width: 400px;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            margin-bottom: 10px;
        }

        .login-header h2 {
            margin-bottom: 0;
            font-weight: bold;
            color: #343a40;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border-radius: 50px;
        }

        .btn-login {
            width: 100%;
            border-radius: 50px;
            padding: 10px;
        }

        .text-center {
            margin-top: 20px;
        }

        .text-center a {
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <img src="{{ asset('assets/logo.png') }}" alt="Library Logo">
            <h2>Login Perpustakaan</h2>
        </div>

        <form>
            <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="email" class="form-control" id="email"
                placeholder="Email Address" required>
                @if ($errors->has('email'))
                <div class="alert alert-danger" role="alert">
                  {{ $errors->first('email') }}
                </div>
                @endif
            </div>

            <div class="form-group mb-3">
                <input type="password" name="password" class="form-control" id="password" 
                placeholder="Password" required>
                @if ($errors->has('password'))
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first('password') }}
                </div>
                @endif
                
                <button type="submit" class="btn btn-primary btn-block mt-3">Login</button>
                
                <p class="text-center mt-3">
                    Tidak punya akun? <a href="{{ route('register') }}">Buat Akun</a>
                </p>
        </form>
        <div class="text-center">
            <a href="#">Lupa Password?</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
