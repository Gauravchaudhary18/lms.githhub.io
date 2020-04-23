 <?php
session_start();
if(!$_SESSION['sess_password']){
   header('location:login.php?msz=<div class="alert-danger" style="margin-left:30%; margin-right:30%;">Please login</div>');
}
session_destroy();
 header('location:login.php?msz=<div class="alert-danger" style="margin-left:30%; margin-right:30%;">Logged Out</div>');
?>