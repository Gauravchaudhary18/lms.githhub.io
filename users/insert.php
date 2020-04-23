  <?php 
 include '../db.php';
 if(isset($_POST['submit']))
 {
	 $name=$_POST['name'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $hashpassword=password_hash($password,PASSWORD_BCRYPT);
	 
	 
$stmt=$dbcom->prepare("INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES (NULL, '$name','$email','$hashpassword')");
if($name==''){
header('location:register.php?msz=<div class="alert-danger" style="margin-left:30%; margin-right:30%;" >Error</div>');
}
else if(strlen($name)<4){
header('location:register.php?msz=<div class="alert-danger"style="margin-left:30%; margin-right:30%;" >Error</div>');
}
else if($email==''){
header('location:register.php?msz=<div class="alert-danger" style="margin-left:30%; margin-right:30%;">Error</div>');
}
else if($password==''){
header('location:register.php?msz=<div class="alert-danger"style="margin-left:30%; margin-right:30%;" >Error</div>');
}
else{
$stmt->execute();
header('location:register.php?msz=<div class="alert-success" style="margin-left:30%; margin-right:30%;" >Added Successfully</div>');
}
}

 ?>