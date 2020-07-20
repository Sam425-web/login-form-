<?php
session_start();
include('inc/header.php');

// redirecting to home page
if (!$_SESSION['auth']) {
   header('location:index.php');
   die();
}
?>

<div class="jumbotron jumbotron-fluid">
   <div class="container">
      <h1 class="display-4">Home Page</h1>
      <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
   </div>
</div>

<a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">LogOut</a>