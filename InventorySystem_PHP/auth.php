<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']); //get username
$password = remove_junk($_POST['password']); //get password
$c=0;
if(empty($errors)){
  $user_id = authenticate($username, $password);

  if($user_id){
    
    //create session with id
     $session->login($user_id);
    //Update Sign in time
     updateLastLogIn($user_id);
     redirect('home.php',false); //go to home page

  } else {
    $session->msg("d", "Sorry Username/Password incorrect."); //set msg error
   // redirect('index.php',false);
   
   $c=$c+1; //increase cnt login faild
   $_SESSION['u']+=1;
			echo  $_SESSION['u'];
    
			if($_SESSION['u']>2)
			{
				header('location:time.php');
			}
  }

} else {
   $session->msg("d", $errors);
   redirect('index.php',false);
}

?>
