<?php
session_start();
if (!isset($_SESSION['email']) || !isset($_SESSION['name'])) {
    header("Location: ../../index.php");
    exit();
}

if ($_SESSION['role'] === 'admin') {
    header("Location: ../admin/dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container dashboard-container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-lock me-2"></i> PHP-MySQL System
            </a>
            <div class="navbar-nav ms-auto d-flex flex-row align-items-center">
                <span class="navbar-text me-3 text-white">
                    <i class="fas fa-user-circle me-1"></i>
                    <?php echo htmlspecialchars($_SESSION['name']); ?>
                </span>
                <span class="badge bg-primary me-3"><?php echo htmlspecialchars($_SESSION['role']); ?></span>
                <a href="../../Controllers/LogoutController.php" class="btn btn-outline-danger btn-sm">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container dashboard-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4><i class="fas fa-user"></i> User Dashboard</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-info-circle"></i> User Information</h5>
                                <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['name']); ?></p>
                                <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                                <p><strong>Role:</strong> <span class="badge bg-primary"><?php echo htmlspecialchars($_SESSION['role']); ?></span></p>
                                <p><strong>Login Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-chart-line"></i> Your Activity</h5>
                                <p>Welcome to your personal dashboard! You have successfully logged into the system.</p>
                                <div class="alert alert-success">
                                    <i class="fas fa-check-circle"></i> Account Status: Active
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>