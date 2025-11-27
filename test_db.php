<?php
// Simple test script for database and login functionality
echo "=== TEST DE LOGIN - CIERVO NEGRO ===\n\n";

// Test database connection
require_once "php/conexion.php";

if ($conn->connect_error) {
    echo "❌ Database connection failed: " . $conn->connect_error . "\n";
    exit(1);
} else {
    echo "✅ Database connection successful\n";
}

// Check users table
$result = $conn->query("SHOW TABLES LIKE 'usuarios'");
if ($result->num_rows > 0) {
    echo "✅ Users table exists\n";
} else {
    echo "❌ Users table does not exist\n";
}

// Check if admin user exists
$result = $conn->query("SELECT COUNT(*) as total FROM usuarios WHERE rol = 'admin'");
$row = $result->fetch_assoc();
echo "📊 Admin users: " . $row['total'] . "\n";

// Check total users
$result = $conn->query("SELECT COUNT(*) as total FROM usuarios");
$row = $result->fetch_assoc();
echo "📊 Total users: " . $row['total'] . "\n";

// Check products table
$result = $conn->query("SHOW TABLES LIKE 'productos'");
if ($result->num_rows > 0) {
    echo "✅ Products table exists\n";
    $result = $conn->query("SELECT COUNT(*) as total FROM productos");
    $row = $result->fetch_assoc();
    echo "📊 Total products: " . $row['total'] . "\n";
} else {
    echo "❌ Products table does not exist\n";
}

// Test password verification
$test_password = "admin123";
$hash = password_hash($test_password, PASSWORD_DEFAULT);
if (password_verify($test_password, $hash)) {
    echo "✅ Password hashing/verification works\n";
} else {
    echo "❌ Password verification failed\n";
}

$conn->close();

echo "\n=== TEST COMPLETE ===\n";
echo "To test login manually:\n";
echo "1. Go to: php/login.php\n";
echo "2. Admin login: admin@ciervonegro.com / admin123\n";
echo "3. Or register a new user at: php/registro.php\n";
?>
