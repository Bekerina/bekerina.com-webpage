<?php
    if(isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);

        if(!empty($name) && !empty($email) && !empty($message)) {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $from = "$email";
                $to = "karolinabekeryte@gmail.com";
                $subject = "New message";
                $autorius = 'From:' . $name . ',' . $email;
                $zinute = htmlspecialchars($message);
                mail($to, $subject, $autorius, $zinute, $from);
                echo "<script>alert('Thanks for being awesome! Talk to you soon.');</script>";
            }
        }
        include('db.php');
        
        $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
        if($mysqli->connect_error) {
            echo "Sorry, there was a problem.\n";
            echo 'Error: ' . $mysqli->connect_error . '\n';
            exit();
        }
        mysqli_query($mysqli, "INSERT INTO clients (name, email, message)VALUES('$_POST[name]', '$_POST[email]', '$_POST[message]')");
        }
