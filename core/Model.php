<?php
class Model {
    private $connection;
    protected $table;

    /**
     * Model constructor.
     * Initializes the model with a database connection.
     */
    public function __construct() {
        $this->connection = new Database();
    }

    public function findAll() {
        $query = "SELECT * FROM " . $this->table;
        $stmt = $this->connection->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findById($id) {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id";
        $stmt = $this->connection->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
}