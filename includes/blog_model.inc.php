<?php

class MyBlogModel {

    private $dbserver = 'localhost';
    private $dbname = 'myblogpage';
    private $dbusername = 'root';
    private $dbpassword = '';
    private $connection;

    public function __construct() {

        try {
            $this->connection = new PDO("mysql:host={$this->dbserver}; dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {
            die("Connection Failed: " . $e->getMessage());
        }
    }

    public function takeUserInfo($username, $email, $comment_text) {

        try {

            $this->connection->beginTransactions();

            $stmt = $this->connection->prepare("INSERT INTO bloginfo(username, email) VALUES(:username, :email);");
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":email", $email);
            $stmt->execute();
            
            $user_id = $this->connection->lastInsertId();

            $stmt = $this->connection->prepare("INSERT INTO comments(comment_text) VALUES(:comment_text);");
            $stmt->bindParam(":comment_text", $comment_text);
            $stmt->execute();

            $this->connection->commit();

        } catch (PDOException $e) {
            throw new Exception("Failed to submit information: " . $e->getMessage());
        }

    }

}
