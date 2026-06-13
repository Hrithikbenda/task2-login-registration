<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="form-box">

        <div class="text-center mb-4">
            <i class="bi bi-person-plus-fill text-primary display-4"></i>

            <h1 class="title text-dark mt-2">
                Create Your Account
            </h1>

            <p class="subtitle">
                Register to continue
            </p>
        </div>

        <form id="registerForm">

            <div class="mb-3">
                <label class="form-label">Full Name</label>

                <input
                    type="text"
                    id="name"
                    class="form-control"
                    placeholder="Enter your full name"
                >
            </div>

            <div class="mb-3">
                <label class="form-label">Email Address</label>

                <input
                    type="email"
                    id="registerEmail"
                    class="form-control"
                    placeholder="Enter your email"
                >

                <small id="emailStatus"></small>
            </div>

            <div class="mb-3">

                <label class="form-label">
                    Password
                </label>

                <div class="password-wrapper">

                    <input
                        type="password"
                        id="registerPassword"
                        class="form-control"
                        placeholder="Create password"
                    >

                    <i class="bi bi-eye-fill toggle-password"></i>

                </div>

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Confirm Password
                </label>

                <div class="password-wrapper">

                    <input
                        type="password"
                        id="confirmPassword"
                        class="form-control"
                        placeholder="Confirm password"
                    >

                    <i class="bi bi-eye-fill toggle-password"></i>

                </div>

            </div>

            <button
                type="submit"
                class="btn btn-success w-100 btn-lg"
            >
                Register
            </button>

            <p class="text-center mt-4">
                Already have an account?
                <a href="login.php">Login</a>
            </p>

            <p
                id="registerMessage"
                class="text-center mt-3"
            ></p>

        </form>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>