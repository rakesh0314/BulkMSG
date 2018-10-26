<?php
	//include ("root/myDBconn.php");
	
	 $db = new PDO('mysql:host=localhost;dbname=bulk_msg_db;charset=utf8', 'root', '');

 if(isset($_REQUEST['sand_cent'])){
		$gName =str_replace("'","",$_REQUEST['grpNm']); 
		$gNumber =str_replace("'","",$_REQUEST['grpNo']); 
		// $conNo =str_replace("'","",$_REQUEST['txtCon']);  
		// $onrEmail =str_replace("'","",$_REQUEST['txtEmail']); 
		// $cenId =str_replace("'","",$_REQUEST['txtId']); 	
		// $cnPass =str_replace("'","",$_REQUEST['txtPass']); 
		// $cenAdd =str_replace("'","",$_REQUEST['txtAdd']); 
		// $cenName =str_replace("'","",$_REQUEST['txtCent']);
		$regDate =date('Y-m-d'); 

		   $insQ=$db->query("INSERT INTO `group_tbl` SET `gname`='$gNm',`gnumber`='$gNumber' ,`createddate`='$regDate' ,`status`=1 ") or die("Error");  
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("create_group.php");
				</script>
	 <?php 	
 }
 	elseif (isset($_REQUEST['import_file'])) {

 		if(isset($_FILES['file']['name']))
		{
			//$cenName =str_replace("'","",$_REQUEST['txtCen']);
			$regDate =date('Y-m-d'); 

			$file_name=$_FILES['file']['tmp_name'];			
			$file_name1=$_FILES['file']['name'];			
			$ext=pathinfo($file_name1,PATHINFO_EXTENSION);
			if($ext=="csv" || $ext=="CSV" || $ext=="xlsx")
			{
				$handle = fopen($file_name, "r");
   while(($emapData = fgetcsv($handle,10000, ",")) !== FALSE)
   {
   				 
                
              $insQ=$db->query("INSERT INTO `group_tbl` SET `gname`='$emapData[0]',`gnumber`='$emapData[1]',`created`='$emapData[2]',`status`='$emapData[3]' ") or die("Error");  
   }
    ?>
	 <script>
				alert("Sucessfully Import !...");
				window.location.replace("../../index.php");
			</script>
 <?php 

  
			}
		}

 	}
 
 else
 {
	 ?>
	 <script>
				alert("Try Again !...");
				window.location.replace("create_group.php");
			</script>
 <?php } ?>