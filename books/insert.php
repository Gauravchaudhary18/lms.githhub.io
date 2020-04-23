 <?php 
 include '../db.php';
 if(isset($_POST['submit']))
 {
	 $bname=$_POST['bname'];
	 $grade=$_POST['grade'];
	 $faculty=$_POST['faculty'];
	 $bcat=$_POST['bcat'];
	 $descs=$_POST['descs'];
$stmt=$dbcom->prepare("INSERT INTO `books` (`bid`, `bname`, `bcat`, `grade`, `faculty`,`descs`) VALUES (NULL, '$bname','$bcat','$grade','$faculty','$descs')");
if($bname==''){
header('location:addbook.php?msz=Error');
}
else{
$stmt->execute();
header('location:addbook.php?msz=<div class="alert-success">Added Successfully</div>');
}
}

 ?>