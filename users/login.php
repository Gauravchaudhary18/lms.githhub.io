   
 <!DOCTYPE html>
  <html>
  <head>
<title>Login</title>
	
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}

</style>
	</head>
	<body style ="background-image: url('/ims/rose.jpg');">
	
      	<div class="container" style="margin-top:10px;">
		<?php
     if(isset($_GET['msz']) ){
		 echo $_GET['msz'];
	 }
 ?>
<h1 style="margin-left:30%; margin-right:30%;"> Login Here</h1>
<form method="post" action="loginp.php" style="margin-left:30%; margin-right:30%;">

<div class="form-group">
<label>Email:</label>
<input type="email" name="email"  placeholder="Enter Mail Address" class="form-control">
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" name="password"  placeholder="Enter Your Password" class="form-control">
</div>
<div class="form-group">
<input type="submit" name="submit" value="Log In" class="btn btn-primary btn-block">
</div>
</form>
<p style="margin-left:30%; margin-right:30%;">Not Registered:<a href="register.php" > Click Here!</a></p> 


 <?php
 
     $page='inside';
	 
  include  '../includes/footer.php';
 
 ?>
 