 <?php
 session_start();
 include '../db.php';
 if(isset($_POST['submit'])){
	 $email=$_POST['email'];
	 $formpassword=$_POST['password'];

$stmt=$dbcom->prepare("select * from users Where email=:email");
$stmt->execute(array(':email'=>$email));

$row=$stmt->fetch(PDO::FETCH_ASSOC);
if(password_verify( $formpassword,$row['password'])){
session_regenerate_id();
$_SESSION['authorizd']=true;
$_SESSION['sess_id']=$row['id'];
$_SESSION['sess_name']=$row['name'];
$_SESSION['sess_email']=$row['email'];
$_SESSION['sess_password']=$row['password'];
session_write_close();

header('location:../index.php?msz=<div class="alert-success" >Signed In Successfully</div>');
 }
 
 else{
 header('location:login.php?msz=<div class="alert-warning" style="margin-left:30%; margin-right:30%;" > Wrong Password !!!  Enter Correct Password</div>');

 
 }
 } 
 else{
 header('location:login.php?msz=<div class="alert-warning" style="margin-left:30%; margin-right:30%;"> >Please login</div>');
 
 
 
 }
 
 
 ?>