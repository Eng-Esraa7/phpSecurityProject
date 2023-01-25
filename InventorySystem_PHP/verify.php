<?php include_once('includes/load.php'); ?>
<?php 
if(isset($_POST['verify'])){
 //echo("<script>console.log('PHP: " .$_SESSION["vervicationcode"] . "');</script>");
$vervicationcode=$_SESSION["vervicationcode"]; //get verfy code
$verify = remove_junk($_POST['code']); //get code from user
if($verify==$vervicationcode){ //compare
    redirect('index2.php',false); //true redirect to login
}else{
    $session->msg("d", "wrong code");
   redirect('index.php',false); //false return to email again
}}
?>
