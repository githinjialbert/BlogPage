<?php
require_once 'blog_model.inc.php';
require_once '../sessions.php';

class BlogControl {
    private $master;

    public function __construct() {
        $this->master = new MyBlogModel();
    }

    public function commentsBlock() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Fetch and sanitize form data
            $username = isset($_POST["username"]) ? trim(htmlspecialchars($_POST["username"])) : '';
            $email = isset($_POST["email"]) ? trim(htmlspecialchars($_POST["email"])) : '';
            $comment_text = isset($_POST["comment_text"]) ? trim(htmlspecialchars($_POST["comment_text"])) : '';

            // Handling the user information
            if (empty($username) || empty($email) || empty($comment_text)) {
                throw new Exception("Fill in all the fields.");
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception("The email you entered is invalid.");
            }

            if (strlen($comment_text) > 1000) {
                throw new Exception("The comment has exceeded maximum length.");
            }

            try {
                // Call the method to handle comment submission
                if ($this->master->takeUserInfo($username, $email, $comment_text)) {
                    echo "Thanks for your feedback. We'll reach out as soon as possible.";
                } 
            } catch (PDOException $e) {
                throw new Exception("An error occurred. Your information could not be submitted successfully.");
            }
        }
    }
}

// Instantiate BlogControl and call commentsBlock method
$control = new BlogControl();
try {
    $control->commentsBlock();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}