<?php
	require "header.php";
 ?>
<main class="content">
<div class="signup">
<h1>Signup</h1>
<form action="includes/signup.inc.php" method="post">

    <div class="con"><input type="text" name="uid" placeholder="Username"></div>
    <div class="con"><input type="text" name="mail" placeholder="E-mail"></div>
     <div class="con"><input type="password" name="pwd" placeholder="Password"></div>
     <div class="con"><input type="password" name="pwd-repeat" placeholder="Repeat Password"></div>
     <div class="con"><button type="submit" name="signup-submit">Signup</button></div>
</form>
    </div>
</main>

<?php 
	require "footer.php";
?>