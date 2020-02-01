<?php session_start(); ?>

<!DOCTYPE html>

<html>
    <head>
        <title>PHP Sessions & Cookies Prototyping</title>
    </head>
    <body>
        <h1>PHP Sessions & Cookies Prototyping</h1>
        <nav>
            <a href="./index.php">Login Page</a>
            <a href="./second.php">Content Page</a>
        </nav>

        <p>
            <?php 
                echo 'Hi there ' . $_SESSION['username'] . ', your age is ' . $_SESSION['age'] . '. Would you like to go ' . $_SESSION['hobby'];  
             ?>
        </p>

    </body>
</html>
