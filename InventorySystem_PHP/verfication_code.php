<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);} //if logined
?>
<?php include_once('layouts/header.php'); ?>
<?php 

error_reporting (E_ALL ^ E_NOTICE); 
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
<form method="post" action="verify.php" >
  <label for="verify" class="control-label">Verifycation Code</label><br>
	<input type="" name="code" class="form-control"  placeholder="Enter Verification"><br><br>
	<button name="verify">submit</button>
</form>
</div>
<?php
}
?>
<?php include_once('layouts/footer.php'); ?>