<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Registration System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="text-center text-white py-4 bg-primary">
    <h1>Login & Registration System</h1>
</header>

<div class="container py-5">

    <div class="row g-4">

        <!-- Login Form -->
        <div class="col-md-6">
            <div class="form-container">

                <h2 class="text-center mb-4">Login</h2>

                <form id="loginForm">

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" class="form-control" id="loginEmail" required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>

                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" required>

                            <button type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('loginPassword')">
                                👁
                            </button>
                        </div>
                    </div>

                    <button type="submit"
                            class="btn btn-primary w-100 login-btn">
                        Login
                    </button>

                </form>

                <p id="loginMessage" class="mt-3"></p>

            </div>
        </div>

        <!-- Registration Form -->
        <div class="col-md-6">
            <div class="form-container">

                <h2 class="text-center mb-4">Register</h2>

                <form id="registerForm">

                    <div class="mb-3">
                        <label>Full Name</label>
                        <input type="text"
                               class="form-control"
                               id="fullName"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email"
                               class="form-control"
                               id="registerEmail"
                               required>
                    </div>

                    <div class="mb-3">
                        <label>Password</label>

                        <div class="input-group">
                            <input type="password"
                                   class="form-control"
                                   id="registerPassword"
                                   required>

                            <button type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('registerPassword')">
                                👁
                            </button>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label>Confirm Password</label>

                        <div class="input-group">
                            <input type="password"
                                   class="form-control"
                                   id="confirmPassword"
                                   required>

                            <button type="button"
                                    class="btn btn-outline-secondary"
                                    onclick="togglePassword('confirmPassword')">
                                👁
                            </button>
                        </div>
                    </div>

                    <button type="submit"
                            class="btn btn-success w-100 register-btn">
                        Register
                    </button>

                </form>

                <p id="registerMessage" class="mt-3"></p>

            </div>
        </div>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>