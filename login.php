<?php

session_start();

$email = $_POST['email'];
$pwd = $_POST['password'];

// checking email 
if ($email == 'mgmg@gmail.com' && $pwd == 123) {
   header('location: home.php');
   $_SESSION['auth'] = true;
} else {
   $_SESSION['error'] = true;
   header('location:index.php');
}
