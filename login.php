<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    if (
        ($email === "admin@gmail.com" && $password === "123456") ||
        ($email === "hrithik@gmail.com" && $password === "password123") ||
        ($email === "demo@gmail.com" && $password === "demo123")
    ) {

        header("Location: dashboard.php");
        exit();

    } else {

        $message = '
        <div class="alert alert-danger text-center">
            Invalid Email or Password!
        </div>';

    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">

    <div class="form-box">

        <div class="text-center mb-4">

            <i class="bi bi-person-circle text-primary display-4"></i>

            <h1 class="title text-dark mt-2">
                Welcome Back
            </h1>

            <p class="subtitle">
                Login to continue
            </p>

        </div>

        <?php echo $message; ?>

        <form method="POST">

            <div class="mb-3">

                <label class="form-label">
                    Email Address
                </label>

                <input
                    type="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    required
                >

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Password
                </label>

                <div class="password-wrapper">

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                        required
                    >

                    <i class="bi bi-eye-fill toggle-password"></i>

                </div>

            </div>

            <button
                type="submit"
                class="btn btn-primary w-100">
                Login
            </button>

            <div class="text-center mt-4">

                Don't have an account?

                <a href="register.php">
                    Register
                </a>

            </div>

        </form>

    </div>

</div>

<script src="script.js"></script>

</body>
</html>