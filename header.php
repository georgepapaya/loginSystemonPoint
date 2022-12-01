<?php
session_start();
?>


<!DOCTYPE html>
<html><head>
<meta charset="utf-8">
<meta name="description" content="This is an example of a meta description. This will often show up in search results.">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login System</title>
<link href="css/style.css" rel="stylesheet"/>
</head>
<body>
<header class="header">
<nav class="bnav">
<a>
<img src="img/logo.png" alt="logo">
</a>
<ul class="bnav-ul">
<li><a href="index.php">home</a></li>
<li><a href="portfolio.php">portfolio</a></li>
<li><a href="about.php">about me</a></li>
<li><a href="contact.php">contact</a></li>
</ul>
<div>
    
    <?php
          if(isset($_SESSION['userId'])){
          echo '<form action="includes/logout.inc.php" method="post">
 
  <button type="submit" name="logout-submit">Logout</button>
</form>';
      }
    else{
        echo '<form action="includes/login.inc.php" method="post">
  <input type="text" name="uid" placeholder="username/e-mail...">
  <input type="password" name="pwd" placeholder="password">
  <button type="submit" name="login-submit">Login</button>
</form>
<a href="signup.php" class="sign-anchor">signup</a>
';
    }
    ?>

</div>
</nav>
</header>