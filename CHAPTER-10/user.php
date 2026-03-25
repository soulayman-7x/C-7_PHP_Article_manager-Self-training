<?php 
class User {
    private $conn;
    private $table = "users";
    public $id;
    public $name;
    public $email;

    public function __construct($db) {
        $this->conn = $db;
    }
    // 1. CREATE
    public function create() {
        $sql = "INSERT INTO {$this->table} (username, email) VALUES (:username, :email)";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute(['username' => $this->name, 'email' => $this->email]);
    }

    // 2. READE
    public function read() {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->conn->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // 3. UPDATE
    public function update() {
        $sql = "UPDATE {$this->table} SET name=:name, email=:email WHERE id=:id";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute(['name' => $this->name, 'email' => $this->email, 'id' => $this->id]);
    }

    // 4. DELETE
    public function delete() {
        $sql = "DELETE FROM {$this->table} WHERE id=:id";
        $stmt = $this->conn->prepare($sql);

        return $stmt->execute(['id' => $this->id]);
    }

}
?>
