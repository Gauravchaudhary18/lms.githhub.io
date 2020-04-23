 <?php
 include '../db.php';
 if(isset($_GET['did'])){
	 $did=$_GET['did'];
	 $stmtv=$dbcom->prepare("DELETE FROM books WHERE bid=$did");
   $stmtv->execute();
   header("location:../index.php?msz=<div class='alert-success'>DELETED SUCCESSFULLY</div>");
}
 
?>