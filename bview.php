   <?php include 'db.php';
   $page='home';
   ?>
   <?php include 'includes/header.php';?>
   <?php
 if(isset($_GET['msz'])){
	 echo $_GET['msz'];
}
 
?> <h1 align="center">View All Books Related To:
<?php
 if(isset($_GET['ct'])){
	 echo 'Category:';
	  echo $_GET['ct'];
}
 if(isset($_GET['ft'])){
	 echo 'Faculty:';
	  echo $_GET['ft'];
}
if(isset($_GET['gt'])){
	 echo 'Grade:';
	  echo $_GET['gt'];
}
?>
</h1>
<a href="books/addbook.php" class="btn btn-primary">ADD BOOK</a>
   <div style="margin: 2px;"></div>
   <table class="table table-bordered" id="mydatables">
       <thead>
       <tr>
	     <td>ID</td>
		 <td>NAME</td>
		 <td>VIEW</td>
		 <td>DELETE</td>
		 <td>EDIT</td>
		 </tr>
		</thead>
   <?php
   if(isset($_GET['cid'])){
         $vid=$_GET['cid'];
		 $stmt=$dbcom->prepare("select * from books where bcat=$vid");
   }
   if(isset($_GET['fid'])){
         $vid=$_GET['fid'];
		 $stmt=$dbcom->prepare("select * from books where faculty=$vid");
   }
   if(isset($_GET['gid'])){
         $vid=$_GET['gid'];
		 $stmt=$dbcom->prepare("select * from books where grade=$vid");
   }
   
   $stmt->execute();
   ?>
   <tbody>
   <?php 
   while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
	   extract($row);
	   ?>
	   <tr>
       <td><?php echo $bid; ?></td>
	   <td><?php echo $bname; ?></td>
	   <td><a href="books/view.php?vid=<?php echo $bid; ?>" class="btn btn-info btn-sm">VIEW</a></td>
	   <td><a href="books/delete.php?did=<?php echo $bid; ?>" class="btn btn-warning btn-sm">DELETE</a></td>
	   <td><a href="books/edit.php?eid=<?php echo $bid; ?>" class="btn btn-danger btn-sm">EDIT</a></td>
	   </tr>
  <?php 	   
   }
   ?>
   </tbody>
   </table>
  
   <?php include 'includes/footer.php';?>