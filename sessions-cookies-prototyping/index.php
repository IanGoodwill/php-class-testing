<h1>PHP Sessions & Cookies Prototyping</h1>

<nav>
    <a href="./index.php">Login Page</a>
    <a href="./second.php">Content Page</a>
</nav>

<?php
session_start();

setcookie('username', uniqid( 'Bob'), time() + 7200);
setcookie('email', uniqid('fakeemail@gmail.com'), time() + 7200);

$_SESSION['username'] = 'Bobby';
$_SESSION['age'] = '35';
$_SESSION['hobby'] = 'skateboarding';

echo 'Hi there ' . $_SESSION['username'] . ', your age is ' . $_SESSION['age'] . '. Would you like to go ' . $_SESSION['hobby'];

unset($_SESSION['hobby']);
?>
<br>
<?php
echo 'Welcome, ' . $_COOKIE['username'];

setcookie('email', uniqid('fakeemail@gmail.com'), time() + -3600);

$_SESSION['username'] = 'Robert Paulson';