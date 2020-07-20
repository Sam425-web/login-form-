<?php

session_start();

// unseting session 
unset($_SESSION['auth']);
header('location: index.php');
