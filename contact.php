<?php
	require "header.php";
 ?>
<main class="content">
    <h1>Contact</h1>
    <?php
    
      if(isset($_SESSION['userId'])){
          echo '<p>You are logged in!</p>';
      }
    else{
        echo '<p>You are logged out!</p>';
    }
          
    ?>
<div class="contact-form">
    <form method="post" action="contact.php">
        <h2>Contact Us</h2>
        <div>
            <label>Name:</label>
            <input type="text" name="clientname" class="contact-input">
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="clientemail" class="contact-input">
        </div>
        <div>
            <label>Message:</label>
            <textarea rows="15" cols="15"  class="contact-text">
            </textarea>
        </div> 
        <div>
            <button class="contact-button">send</button>
        </div>
       
    </form>
    </div>

</main>

<?php 
	require "footer.php";
?>