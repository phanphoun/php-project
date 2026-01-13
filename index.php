<?php

session_start();

$errors = [
    'login' => $_SESSION['login_error'] ?? '',
    'register' => $_SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';

function showError($errors)
{
    return !empty($errors) ? "<p class='error-message'>" . htmlspecialchars($errors) . "</p>" : '';
}

function isActiveForm($formName, $activeForm)
{
    return $formName === $activeForm ? 'active' : '';
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-MySQL</title>
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container login-container">

        <!-- // Login form -->
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="Controllers/AuthController.php" method="POST">
                <h2>Login</h2>
                <?= showError($errors['login']); ?>
                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-envelope" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="email" name="email" placeholder="Email" required style="padding-left: 45px;">
                </div>
                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-lock" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="password" name="password" id="login-password" placeholder="Password" required style="padding-left: 45px; padding-right: 45px;">
                    <i class="fas fa-eye" id="login-toggle-password" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: #999; cursor: pointer;" onclick="togglePassword('login-password', 'login-toggle-password')"></i>
                </div>
                <button type="submit" name="login">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>


                <div class="form-switch">
                    <a href="#" onclick="showForm('register-form')">
                        Don't have account? <i class="fas fa-arrow-right"></i> Register
                    </a>
                </div>
            </form>
        </div>

        <!-- // Register form -->
        <div class="form-box <?= isActiveForm('register-form', $activeForm); ?>" id="register-form">
            <form action="Controllers/AuthController.php" method="POST">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>

                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-user" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="text" name="name" placeholder="Name" required style="padding-left: 45px;">
                </div>

                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-envelope" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="email" name="email" placeholder="Email" required style="padding-left: 45px;">
                </div>

                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-lock" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <input type="password" name="password" id="register-password" placeholder="Password" required style="padding-left: 45px; padding-right: 45px;">
                    <i class="fas fa-eye" id="register-toggle-password" style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%); color: #999; cursor: pointer;" onclick="togglePassword('register-password', 'register-toggle-password')"></i>
                </div>

                <div style="position: relative; margin-bottom: 20px;">
                    <i class="fas fa-user-tag" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #999;"></i>
                    <select name="role" required style="padding-left: 45px;">
                        <option value="">-Select Role-</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <button type="submit" name="register">
                    <i class="fas fa-user-plus"></i> Register
                </button>


                <div class="form-switch">
                    <a href="#" onclick="showForm('login-form')">
                        Already have account? <i class="fas fa-arrow-right"></i> Login
                    </a>
                </div>
            </form>
        </div>
    </div>

    <!-- Script -->
    <script src="assets/js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>

<?php
// Clear session variables after displaying them
session_unset();
?>