<?php
session_start();
if(!$_SESSION['sess_password']){
   header('location:users/login.php?msz=<div class="alert-danger" style="margin-left:30%; margin-right:30%;">Please login</div>');
}
?> 


 <!DOCTYPE html>
  <html>
  <head>
     <?php if($page=='home'){ ?>
      <title>HOME</title>
	 
	  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
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
	<body style ="background-image: url('/ims/book.jpg');" >
	<div class="container-fluid" style="margin-top:10px;">
	    <div style="float:left;" ><a href="index.php" class="btn btn-danger" style="margin-left:120px;"><b style="margin-left:10px; font-size:20px">Hello <?php echo $_SESSION['sess_name'];?></b></a></div><div style="float:right;"><a href="users/register.php"></a><a href="users/logout.php" class="btn btn-info" style="margin-right:120px">logout</a></div>
	     </div>
		 <div class="container" style="clear:both;">
		 <h1 align="center">Library Management System</h1>
		 <div style="margin-top:5px;">
		<h2> View All Books Order By Category: </h2>
		    <ul class="breadcrumb">
			   Choose Category:.<?php
	$stmt=$dbcom->prepare("select * from categorey");
$stmt->execute();
?>
 <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	  <li><a href="bview.php?cid=<?php echo $cid;  ?>&ct=<?php echo $cname;  ?>"><?php echo $cname;  ?></a></li>
	 
  <?php 	   
   }
   ?>
			</ul>
			<h2> View All Books Order By Faculty: </h2>
		    <ul class="breadcrumb">
			    Choose Faculty:.<?php
	$stmt=$dbcom->prepare("select * from faculty");
$stmt->execute();
?>
 <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	  <li><a href="bview.php?fid=<?php echo $facid;  ?>&ft=<?php echo $fname;  ?>"><?php echo $fname;  ?></a></li>
	 
  <?php 	   
   }
   ?>
			</ul>
			<h2> View All Books Order By  Grade: </h2>
		    <ul class="breadcrumb">
			   Choose Grade:. <?php
	$stmt=$dbcom->prepare("select * from grade");
$stmt->execute();
?>
 <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	  <li><a href="bview.php?gid=<?php echo $gid;  ?>&gt=<?php echo $gname;  ?>"><?php echo $gname;  ?></a></li>
	 
  <?php 	   
   }
   ?>
			</ul>
		</div>
		
		<?php
	 }?>
	 
	 
	 <?php if($page=='inside'){ ?>
      <title>Add New Book</title>
	
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
	<body style ="background-image: url('/ims/ad.jpg');">

	     <div class="container">
		    
			<h1 style="color:white">Add New Book Here</h1>
			<?php 
			
	 }?>
	 
	 <?php if($page=='edit'){ ?>
      <title>EDIT</title>
	
	  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	</head>
	<body style ="background-image: url('/ims/login.jpeg');">
	     <div class="container">
		    <ul class="breadcrumb" style="margin-top:5px;">
			   <li>View BOOKS By:<a href="">Category </a></li>
			   <li>View BOOKS By: <a href="">Grade </a></li>
			   <li>View BOOKS By:<a href="">Faculty </a></li>
			</ul>
			<h1>Edit Record</h1>
			<?php 
			
	 }?>
	 
	 
	 <?php if($page=='view'){ ?>
      <title>Edit</title>
	
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
	<body style ="background-image: url('/ims/aa.png');"  >
	     <div class="container">
		    <ul class="breadcrumb" style="margin-top:5px;">
			
			   <li>View Books By: <a href="">Category </a></li>
			   <li>View Books By: <a href="">Grade </a></li>
			   <li>View Books By: <a href="">Faculty </a></li>
			</ul>
			<h1>VIEW RECORD</h1>
			<?php 
			
	 }?>
	 