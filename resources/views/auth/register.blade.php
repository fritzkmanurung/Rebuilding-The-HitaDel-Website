<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Background Gradient and Pattern */
        body {
            background: linear-gradient(135deg, #1D3341, #1CB2A2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Arial', sans-serif;
        }

        /* Custom Card Style */
        .register-card {
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
        }

        .register-card h3 {
            font-weight: bold;
            color: #1D3341;
        }

        .register-card .form-label {
            color: #8B9DAB;
        }

        .register-card .form-control {
            border-radius: 10px;
            border: 1px solid #1CB2A2;
            box-shadow: inset 0px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .register-card .btn-success {
            background-color: #1CB2A2;
            border: none;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .register-card .btn-success:hover {
            background-color: #158F87;
        }

        .register-card a {
            text-decoration: none;
            color: #1CB2A2;
            font-weight: bold;
        }

        .register-card a:hover {
            text-decoration: underline;
            color: #158F87;
        }

        /* Background Animation */
        @keyframes floating-pattern {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        body:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at top left, rgba(255, 255, 255, 0.1), rgba(0, 0, 0, 0.05));
            z-index: 0;
            animation: floating-pattern 10s infinite linear;
        }

        .container {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="register-card">
                <h3 class="text-center mb-4">Register</h3>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                </form>
                <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login.form') }}">Login</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
