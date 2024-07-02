<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
          
            font-family: 'Nunito', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 900px;
            display: flex;
            flex-direction: row;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .register-form {
            padding: 40px;
            flex: 1;
        }
        .welcome-message {
            color: #fff;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 40px;
        }
        .welcome-message img {
            max-width: 100%;
            margin-bottom: 20px;
        }
        .form-group input {
            height: 50px;
            border-radius: 25px;
            padding-left: 20px;
        }
        .btn-primary {
            border-radius: 25px;
            padding: 10px 20px;
            background: #4c75fc;
            border: none;
        }
        .btn-primary:hover {
            background: #77a6e3;
        }
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        .login-link a {
            color: #4c75fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="register-form">
            <h2>Create Account</h2>
            <form action="{{ route('auth.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirm-password" placeholder="Confirm Password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                <div class="login-link">
                    Already have an account? <a href="{{ route('login') }}">Log in</a>
                </div>
            </form>
        </div>
        <div class="welcome-message">
            <img src="/assets/images/banner.jpg" alt="Welcome Image">
        </div>
    </div>
</body>
</html>
