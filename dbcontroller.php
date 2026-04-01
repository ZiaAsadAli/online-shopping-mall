<?php
class DBController {
    // Database configuration
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "test";
    private $conn;

    // Constructor: establishes database connection when object is created
    public function __construct() {
        $this->connectDB();
    }

    // Connect to the database using PDO
    private function connectDB() {
        try {
            // Create a new PDO connection
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
            
            // Set error mode to exception for better debugging
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle connection errors
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // Run a SELECT query and return results as an associative array
    public function runQuery($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);   // Prepare SQL statement
            $stmt->execute($params);               // Execute with parameters (if any)
            return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Fetch all rows
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }

    // Get number of rows returned by a query
    public function numRows($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt->rowCount();
        } catch (PDOException $e) {
            die("Count query failed: " . $e->getMessage());
        }
    }

    // Optional: Function to get the last inserted ID
    public function getLastInsertId() {
        return $this->conn->lastInsertId();
    }

    // Optional: Close connection manually (PDO closes automatically on script end)
    public function closeConnection() {
        $this->conn = null;
    }
}
?>
