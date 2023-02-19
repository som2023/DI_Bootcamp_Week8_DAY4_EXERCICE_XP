<?php 
// Create a database connection to the PostgreSQL server.
$host= 'localhost';
$db = 'public';
$port= '5432';
$user = 'postgres';

$dsn = "pgsql:host=$host; port=$port;dbname=$db;user=$user;password=$password";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to the database.";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>