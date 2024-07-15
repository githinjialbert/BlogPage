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

            $stmt = $this->connection->prepare("INSERT INTO ");  

        } catch (\Throwable $th) {
            //throw $th;
        }

    }

}
