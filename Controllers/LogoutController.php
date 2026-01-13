<?php
// Start session to access it
session_start();

// Debug: Log logout attempt
error_log("Logout attempt by user: " . ($_SESSION['email'] ?? 'unknown') . " at " . date('Y-m-d H:i:s'));

// Step 1: Clear all session variables completely
$_SESSION = array();

// Step 2: Destroy the session file on server
session_destroy();

// Step 3: Clear session cookie from browser
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Step 4: Ensure no output before redirect
ob_clean();

// Step 5: Force redirect with proper headers
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");
header("Location: ../index.php");
exit();
