<?php
// db.php - Handles SQLite database connection

// Path to the SQLite database file
$db_file = __DIR__ . '/db.sqlite';

try {
    // Create (connect to) SQLite database in file
    $db = new PDO('sqlite:' . $db_file);
    // Set error mode to exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // If connection fails, display error message
    die('Database connection failed: ' . $e->getMessage());
}
// Now you can use $db to run queries
?>
