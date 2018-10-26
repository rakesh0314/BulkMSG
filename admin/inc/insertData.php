<?php
include("root/myDBcon.php");
//===================== Ather : My ================//
//===================== =======================//
// For User Form Data Insert //

//===================== =======================//
	if( isset($_REQUEST['submitUser']) ) {

		$user_name = str_replace("'","", $_POST['txtFullName']);
		$user_type = str_replace("'","", $_POST['userType']);
		$user_email = str_replace("'","", $_POST['txtEmailId']);
		$user_pass = str_replace("'","",$_POST['txtPassword']);
		$user_conNo = str_replace("'","",$_POST['txtContect']);
		$user_Addres = str_replace("'","",$_POST['txtAddres']);


 


		

		print_r($_POST);
		print_r($_FILES);

	}
//===================== =======================//
//=====================Wathup Form Data section Strat =======================//

	if(isset($_POST['sendWhatupTxt'])){
		
		$msg_title = str_replace("'","", $_POST['txtTitel']);
		$msg_conNo = str_replace("'","", $_POST['txtContect']);
		$msg_group_id = str_replace("'","", $_POST['GourpId']);
		$msg_lgu = str_replace("'","", $_POST['Language']);
		$msg_text = str_replace("'","", $_POST['txtMsg']);
		$userID = str_replace("'","", $_POST['userId']);

		
		$sendDate =date('Y-m-d'); 

		$temp = explode('.', $_FILES['txtFile']['name']);
        $extn = strtolower(end($temp));



 
		   $insQ=$db->query("INSERT INTO `whatupserves_tbl` SET `msg_title`='$msg_title',`msg_contect`='$msg_conNo',`msg_group_id`='$msg_group_id',`user_id`='$userID' ,`msg_lgu`='$msg_lgu',`msg_txt`='$msg_text',`msg_file_ext`='$extn',`msg_ins_date`='$sendDate'") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../../whatsapp_service.php");
				</script>
	 <?php 	
 }
 
 else
 {
	 ?>
	 <script>
				alert("Try Again !...");
				window.location.replace("../../whatsapp_service.php");
			</script>
 <?php } ?>

<!--=====================Wathup Form Data Section End =======================

=====================voice Form Data section Strat =======================-->

	if(isset($_POST['sendvoiceTxt'])){
		
		$msg_title = str_replace("'","", $_POST['txtTitel']);
		$msg_conNo = str_replace("'","", $_POST['txtContect']);
		$msg_group_id = str_replace("'","", $_POST['GourpId']);
		$msg_lgu = str_replace("'","", $_POST['Language']);
		$msg_text = str_replace("'","", $_POST['txtMsg']);
		$userID = str_replace("'","", $_POST['userId']);

		
		$sendDate =date('Y-m-d'); 

		$temp = explode('.', $_FILES['voiceFile']['name']);
        $extn = strtolower(end($temp));



 
		   $insQ=$db->query("INSERT INTO `whatupserves_tbl` SET `msg_title`='$msg_title',`msg_contect`='$msg_conNo',`msg_group_id`='$msg_group_id',`user_id`='$userID' ,`msg_lgu`='$msg_lgu',`msg_txt`='$msg_text',`msg_file_ext`='$extn',`msg_ins_date`='$sendDate'") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../../whatsapp_service.php");
				</script>
	 <?php 	
 }
 
 else
 {
	 ?>
	 <script>
				alert("Try Again !...");
				window.location.replace("../../whatsapp_service.php");
			</script>
 <?php } ?>
<!--=====================voice Form Data Section End =======================-->





 ?>