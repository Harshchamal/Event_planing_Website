<?php
        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // Hardcoded credentials (not recommended in production)
            $hardcodedUsername = 'admin';
            $hardcodedPassword = '123';

            // Fetch input values
            $usernameInput = $_GET['username'];
            $passwordInput = $_GET['password'];

            // Check if credentials are valid
            if ($usernameInput === $hardcodedUsername && $passwordInput === $hardcodedPassword) {
                header("Location: admin.html"); // Redirect to home page on successful login
                exit();
            } else {
                $loginFailed = true; // Set a variable indicating login failure
            }
        }
    ?>