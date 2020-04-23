 <?php 
 include '../db.php';
 $page='inside';
 include '../includes/header.php';
 ?>
 <a href="../index.php" class="btn btn-info">GO BACK TO HOME</a>
 <?php
 if(isset($_GET['msz'])){
	 echo $_GET['msz'];
}
 
?>
 <form method="post" action="insert.php">
    <div class="form-group">
	     <label>Book Name:</label>
	<input type="text" name="bname" class="form-control">
	</div>
	<div class="form-group">
	    <label>SELECT CATEGORY:</label>
    <?php
	$stmt=$dbcom->prepare("select * from categorey");
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
   </select>
   </div>
   
   
   <div class="form-group">
	    <label>SELECT FACULTY:</label>
	<?php
$stmt=$dbcom->prepare("select * from faculty");
$stmt->execute();
?>
<select name="faculty" class="form-control">
   <option value="0">NO FACULTY</option>
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
$stmt2=$dbcom->prepare("select * from grade");
$stmt2->execute();
?>
<select name="grade" class="form-control">
   <option value="0">NO GRADE</option>
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
   <label>Add Description:</label>
   <textarea class="form-control" name="descs"></textarea>
	</div>
	<div>
	<button type="submit" name="submit" class="btn btn-primary">Add NEW BOOK</button>
	</div>
	</form>
	<p style="float:right;font-size:25px">~ Created By Gaurav Chaudhary</p>
	<?php 
	include '../includes/footer.php';
	?>
