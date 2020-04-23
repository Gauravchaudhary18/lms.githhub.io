 <?php 
     $dbhost='localhost';
	 $dbname='library';
	 $dbuser='root';
	 $dbpass='';
	 
	 try{
	     $dbcom=new PDO("mysql:host={$dbhost};dbname={$dbname}",$dbuser,$dbpass);
		 $dbcom->setAttribute(PDO:: ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		 
		 
	 }catch(PDOException $ex){
		 
		 die($ex->getMessage());
	 }
?>