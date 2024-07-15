<?php 

require_once 'blog_model.inc.php';
require_once 'sessions.php';

class  BlogControl {
    private $master;

    public function construct() {
        $this->master = new MyBlogModel();
    }

    public function commentsBlock() {

        if($_SERVER["REQUEST_METHOD"] === "POST") {
            $username = trim(htmlspecialchars($_POST["username"]));
            $email = trim(htmlspecialchars($_POST["email"]));
            $comment_text = trim(htmlspecialchars($_POST["comment_text"]));
        }

        //Handling the user information

        if (empty($username) || empty($email) || empty($comment_text)) {
            throw new Exception("Fill in all the fields.");
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("The email you entered is invlalid.");
        }

        if (strlen($comment_text) > 1000) {
            throw new Exception("The comment has exceeded maximum length");
        }

        try {
            if ($this->master->takeUserInfo($username, $email, $comment_text)) {
                echo "Thanks for your feedback. We'll reach out as soon as possible";
            }
            else {
                throw new Exception("There was an error in submitting your feedback");
            }         
        } catch (PDOException $e) {
            throw new Exception("An error occurred. Your information could not be submitted successfully");
        }
    }
}

$control = new BlogControl();
$control->commentsBlock();