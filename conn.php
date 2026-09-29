<?php
// Database connection with environment variable support for cloud deployment (Vercel)
$servername = getenv('DB_HOST') ?: "localhost";
$username   = getenv('DB_USER') ?: "root";
$password   = getenv('DB_PASS') ?: "";
$dbname     = getenv('DB_NAME') ?: "sipsavor";
$port       = getenv('DB_PORT') ?: 3306;

// Disable automatic mysqli exception throwing for custom error handling
mysqli_report(MYSQLI_REPORT_OFF);

$conn = @new mysqli($servername, $username, $password, $dbname, (int)$port);

if ($conn->connect_error) {
    die("<div style='font-family: sans-serif; padding: 30px; text-align: center; border: 1px solid #f5c6cb; background-color: #f8d7da; color: #721c24; border-radius: 8px; margin: 40px auto; max-width: 600px;'>
        <h3>⚠️ Database belum terhubung di Vercel</h3>
        <p>Aplikasi mencoba mengkoneksikan database ke <b>" . htmlspecialchars($servername) . "</b> tetapi gagal.</p>
        <p><b>Solusi:</b> Silakan buka <i>Vercel Dashboard &rarr; Project Settings &rarr; Environment Variables</i> dan masukkan data database MySQL Cloud Anda (<code>DB_HOST</code>, <code>DB_USER</code>, <code>DB_PASS</code>, <code>DB_NAME</code>).</p>
        <hr style='border:0; border-top: 1px solid #f5c6cb;'>
        <p style='font-size: 12px; color: #666;'>Detail error: " . htmlspecialchars($conn->connect_error) . "</p>
    </div>");
}
?>