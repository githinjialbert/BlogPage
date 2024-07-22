<?php
class MyBlogModel {
    private $dbserver = 'localhost';
    private $dbname = 'myblogpage';
    private $dbusername = 'root';
    private $dbpassword = '';
    private $connection;

    public function __construct() {
        try {
            $this->connection = new PDO("mysql:host={$this->dbserver};dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }

    public function takeUserInfo($username, $email, $comment_text) {
        try {
            // Begin transaction
            $this->connection->beginTransaction();
    
            // Check if email exists
            $stmt = $this->connection->prepare("SELECT id FROM bloginfo WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
    
            if ($stmt->rowCount() == 0) {
                // Insert user info if not exists
                $stmt = $this->connection->prepare("INSERT INTO bloginfo(username, email) VALUES(:username, :email)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
    
                // Get the last inserted user id
                $user_id = $this->connection->lastInsertId();
            } else {
                // Get the existing user id
                $user_id = $stmt->fetch(PDO::FETCH_ASSOC)['id'];
            }
    
            // Debug output
            echo "User ID: " . $user_id . "<br>";
            echo "Comment Text: " . $comment_text . "<br>";
    
            // Insert comment
            $stmt = $this->connection->prepare("INSERT INTO comments(user_id, comment_text) VALUES(:user_id, :comment_text)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':comment_text', $comment_text);
            $stmt->execute();
    
            // Commit transaction
            $this->connection->commit();
            return true;
    
        } catch (PDOException $e) {
            $this->connection->rollBack();
            throw new Exception("Failed to submit comment: " . $e->getMessage());
        }
    }
    
}