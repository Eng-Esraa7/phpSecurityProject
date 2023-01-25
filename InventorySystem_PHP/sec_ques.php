<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<?php 
//session_start(); 
error_reporting (E_ALL ^ E_NOTICE); 
if(isset($_COOKIE['user'])) { ?>
	<meta http-equiv="refresh" content="20">
<?php
	echo $_COOKIE['user'];
}
else {
?>

       <h1>Sequrity question</h1>
       
     </div>
     
<form method="post" action="auth.php" >
<label for="username" class="control-label">Username</label><br>
	<input type="" name="username" class="form-control"  placeholder="Enter UserID"><br><br>
  <div class="form-group">
            <label for="question" class="control-label">question</label>
            <input type="name" name= "question" class="form-control" placeholder="question">
        </div>
        
	<button name="btn">submit</button>
</form>
</div>
<?php
if(isset($_POST['btn']))
{
	if($_POST['username']=="user" && $_POST['question']=="red")
	{
		$session->msg("s", "Hello ".$user['username'].", Welcome to OSWA-INV.");
             redirect('home.php',false);
	}
	else 	{
			$_SESSION['u']+=1;
			echo $_SESSION['u '+"dffd"];
			if($_SESSION['u']>2)
			{
				header('location:time.php');
			}
		
	}
}
}
?>
<?php include_once('layouts/footer.php'); ?>
