  <?php 
 include '../db.php';
 $page='edit';
 include '../includes/header.php';
 ?>
 <a href="../index.php" class="btn btn-info">GO BACK TO HOME</a>
 <?php
 if(isset($_GET['msz'])){
	 echo $_GET['msz'];
}
 
?>
 <?php
 if(isset($_GET['eid'])){
	 $vid=$_GET['eid'];
	 $stmtv=$dbcom->prepare("select * from books where bid=$vid");
   $stmtv->execute();
   $rowv=$stmtv ->fetch(PDO::FETCH_ASSOC);
	   extract($rowv  );
}
 
?>
 <form method="post" action="update.php">
    <div class="form-group">
	     <label>Book Name:</label>
	<input type="hidden" name="bid" placeholder="bookid" class="form-control" value="<?php echo $bid    ; ?>">
	<input type="text" name="bname" placeholder="bookname" class="form-control" value="<?php echo $bname; ?>">
	</div>
	<div class="form-group">
	    <label>SELECT CATEGORY:</label>
    <?php
	$stmt=$dbcom->prepare("select * from categorey where cid=$bcat");
$stmt->execute();
?>
<select name="bcat" class="form-control">
   <option value="0">NO CATEGORY</option>
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	    
	   <option value="<?php echo $cid; ?>"><?php echo $cname; ?></option>
	 
  <?php 	   
   }
   ?>
    <?php
	$stmt=$dbcom->prepare("select * from categorey ");
$stmt->execute();
?>
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   
	   <option value="<?php echo $cid; ?>"><?php echo $cname; ?></option>
	 
  <?php 	   
   }
   ?>
   

  
   </select>
   </div>
   
   
   <div class="form-group">
	    <label>SELECT FACULTY:</label>
		
	<?php
$stmt=$dbcom->prepare("select * from faculty where facid=$faculty");
$stmt->execute();
?>
<select name="faculty" class="form-control">
   
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   <option value="0">NO FACULTY</option>
	   <option value="<?php echo $facid; ?>"><?php echo $fname; ?></option>
	 
  <?php 	   
   }
   ?>
   
   <?php
$stmt=$dbcom->prepare("select * from faculty ");
$stmt->execute();
?>
  
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   <option value="<?php echo $facid; ?>"><?php echo $fname; ?></option>
	 
  <?php 	   
   }
   ?>
   </select>
   </div>
   
   
    
   <div class="form-group">
	    <label>SELECT GRADE:</label>
	<?php
$stmt2=$dbcom->prepare("select * from grade where gid=$grade");
$stmt2->execute();
?>
<select name="grade" class="form-control">
   <option value="0">NO GRADE</option>
   <?php 
   while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   <opt
	   <option value="<?php echo $gid; ?>"><?php echo $gname; ?></option>
	 
  <?php 	   
   }
   ?>
   <?php
$stmt2=$dbcom->prepare("select * from grade");
$stmt2->execute();
?>

   <?php 
   while($row=$stmt2->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   <option value="<?php echo $gid; ?>"><?php echo $gname; ?></option>
	 
  <?php 	   
   }
   ?>
   
   </select>
   </div> 
   <div class="form-group">
   <label>Edit Description:</label>
   <textarea class="form-control" name="descs"><?php echo $descs; ?></textarea>
	</div>
	<div>
	<button type="submit" name="submit" class="btn btn-primary btn-block">EDIT NOW </button>
	</div>
	</form>
	<p style="float:right;font-size:25px">~ Created By Gaurav Chaudhary</p>
	<?php 
	include '../includes/footer.php';
	?>
