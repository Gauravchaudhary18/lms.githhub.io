  <?php 
 include '../db.php';
 $page='view';
 include '../includes/header.php';
 ?>
 <a href="../index.php" class="btn btn-info">GO BACK TO HOME</a>
 <?php
 if(isset($_GET['vid'])){
	 $vid=$_GET['vid'];
	 $stmtv=$dbcom->prepare("select * from books where bid=$vid"); 
   $stmtv->execute();
   $rowv=$stmtv ->fetch(PDO::FETCH_ASSOC);
	   extract($rowv );
}
 
?>
<h2><?php echo $bname; ?></h2>
    <?php
	$stmt=$dbcom->prepare("select * from categorey where cid=$bcat");
$stmt->execute();
?>
<h3>
   
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   CATEGORY:<?php echo $cname; ?>
	 
  <?php 	   
   }
   ?>
  </h3>
  
   <h3>
	<?php
$stmt=$dbcom->prepare("select * from faculty where facid=$faculty");
$stmt->execute();
?>

   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	  FACULTY:<?php echo $fname; ?>
	  
	 
  <?php 	   
   }
   ?>
 
   
    
</h3>
<h3>
	<?php
$stmt2=$dbcom->prepare("select * from grade where gid=$grade");
$stmt2->execute();
?>

   <?php 
   while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	  GRADE: <?php echo $gname; ?>
	 
  <?php 	   
   }
   ?>
	</h3>
	<h3>
	<p><b>Description:</b><?php echo $descs; ?></p>
	</h3>
	
	<?php 
	include '../includes/footer.php';
	?>
<p style="float:right;font-size:25px">~ Created By Gaurav Chaudhary</p>