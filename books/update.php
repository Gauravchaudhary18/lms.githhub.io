  <?php 
 include '../db.php';
 if(isset($_POST['submit']))
 {
	 $bid=$_POST['bid'];
	 $bname=$_POST['bname'];
	 $grade=$_POST['grade'];
	 $faculty=$_POST['faculty'];
	 $bcat=$_POST['bcat'];
	 $descs=$_POST['descs'];
$stmt=$dbcom->prepare("UPDATE `books` SET  `bname` = '$bname', `bcat` = '$bcat', `grade` = '$grade', `faculty` = '$faculty', `descs` = '$descs' WHERE `books`.`bid` = $bid;");
if($bname==''){
header("location:edit.php?eid=$bid & msz=<div class='alert-danger'>Error</div>");
}
else{
$stmt->execute();
header("location:edit.php?eid=$bid & msz=<div class='alert-success'>Edited Successfully</div>");
}
}

 ?>