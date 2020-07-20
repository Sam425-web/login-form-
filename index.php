<?php
include('inc/header.php');
session_start();
?>

<!-- login form -->
<div class="wrapper">
   <form class="form-signin" action="login.php" method="post">
      <h2 class="form-signin-heading">Please login</h2> <br>
      <input type="text" class="form-control" placeholder="Email Address" autofocus="" name="email" /> <br>
      <input type="password" name="password" class="form-control" placeholder="Password" /> <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <!-- php error -->
      <?php if (isset($_SESSION['error'])) : ?>
         <div class="alert alert-danger mt-3" role="alert">
            <p>UserName Or Password Is Wrong!</p>
            <?php unset($_SESSION['error']); ?>
         </div>
      <?php endif ?>
   </form>
</div>

<?php
include('inc/footer.php');
?>