<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);} //if login redirect home
?>
<?php include_once('layouts/header.php'); ?>
<?php 
error_reporting (E_ALL ^ E_NOTICE);  //if exist errors
if(isset($_COOKIE['user'])) { ?>
	<meta http-equiv="refresh" content="20">
<?php
	echo $_COOKIE['user'];
}

else {
?>
<div class="login-page">
<div class="text-center">
       <h1>Login Panel</h1>
       <h4>Inventory Management System</h4>
     </div>
      <?php echo display_msg($msg); ?><!-- //display msg of error -->
<form method="post" action="send.php" > <!--//send email-->
		<div class="form-group">
              <label for="email" class="control-label">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        
	<button name="btn">login</button>
</form>
</div>
<?php
}
?>
<?php include_once('layouts/footer.php'); ?>
