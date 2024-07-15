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
           

            // Check if email exists
            $stmt = $this->connection->prepare("SELECT * FROM bloginfo WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                // Insert user info if not exists
                $stmt = $this->connection->prepare("INSERT INTO bloginfo(username, email) VALUES(:username, :email)");
                $stmt->bindParam(':username', $username);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
            }

            // Get user_id
          

            // Insert comment
            $stmt = $this->connection->prepare("INSERT INTO comments(user_id, comment_text) VALUES(:user_id, :comment_text)");
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':comment_text', $comment_text);
            $stmt->execute();

            
        } catch (PDOException $e) {
            $this->connection->rollBack();
            throw new Exception("Failed to submit comment: " . $e->getMessage());
        }
    }
}

