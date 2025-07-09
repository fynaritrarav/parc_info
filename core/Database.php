<?php

class Database {
    private $hostname = DB_HOSTNAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $database = DB_DATABASE;

    private $connection;
    /**
     * Database constructor.
     * Initializes the database connection parameters.
     */
    public function __construct() {
        try {
            $this->connection = new PDO(
                "mysql:host={$this->hostname};dbname={$this->database}",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
        
        }
    }

    public function prepare($query) {
        return $this->connection->prepare($query);
    }

    public function show() {
        echo "<pre>";
        echo "Hostname: " . $this->hostname . "\n";
        echo "Username: " . $this->username . "\n";
        echo "Password: " . $this->password . "\n";
        echo "Database: " . $this->database . "\n";
        echo "</pre>";
    }
}