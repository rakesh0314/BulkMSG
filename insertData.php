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
 
  } ?>

<!--=====================Wathup Form Data Section End =======================

=====================voice Form Data section Strat =======================-->
<?php
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



 
		   $insQ=$db->query("INSERT INTO `voiceserves_tbl` SET `msg_title`='$msg_title',`msg_contect`='$msg_conNo',`msg_group_id`='$msg_group_id',`user_id`='$userID' ,`msg_lgu`='$msg_lgu',`msg_txt`='$msg_text',`msg_file_ext`='$extn',`msg_ins_date`='$sendDate'") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../../voice_service.php");
				</script>
	 <?php 	
 }
  ?>
<!--=====================voice Form Data Section End =======================-->

<!--=====================query Form Data section Strat =======================-->
<?php
	if(isset($_POST['querySend'])){
		
		$msg_reason = str_replace("'","", $_POST['reason']);
		$msg_text = str_replace("'","", $_POST['field-4-2']);
		$userID = str_replace("'","", $_POST['userId']);

		
		$sendDate =date('Y-m-d'); 

	 
		   $insQ=$db->query("INSERT INTO `query_tbl` SET `reason`='$msg_reason',`user_id`='$userID' ,`msg_txt`='$msg_text',`msg_ins_date`='$sendDate'") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../../send_query.php");
				</script>
	 <?php 	
 }
  ?>
<!--=====================query Form Data Section End =======================-->


<!--=====================user Form Data section Strat =======================-->

<?php
if( isset($_REQUEST['submitUserAdmin']) ) {

		$user_name = str_replace("'","", $_POST['txtFullName']);
		$user_type = str_replace("'","", $_POST['userType']);
		$user_email = str_replace("'","", $_POST['txtEmailId']);
		$user_pass = str_replace("'","",$_POST['txtPassword']);
		$user_conNo = str_replace("'","",$_POST['txtContect']);
		$user_Addres = str_replace("'","",$_POST['txtAddres']);

			$sendDate =date('Y-m-d'); 

		$temp = explode('.', $_FILES['txtPic']['name']);
        $extn = strtolower(end($temp));


	 
		   $insQ=$db->query("INSERT INTO `user_tbl` SET `user_name`='$user_name',`user_type`='$user_type',`user_email`='$user_email',`user_pass`='$user_pass' ,`user_con_no`='$user_conNo',`user_addres`='$user_Addres',`user_pic`='$extn',`reg_date`='$sendDate' , `status`=1 ") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../manage_user.php");
				</script>
	 <?php 	
 }

?>

<!--=====================user Form Data Section End =======================-->


<!--=====================campaign Form Data section Strat =======================-->

<?php
if( isset($_REQUEST['addsectionButton']) ) {

		$admin_section = str_replace("'","", $_POST['section']);
		$sendDate =date('Y-m-d');

	 
		   $insQ=$db->query("INSERT INTO `campaign_tbl` SET `user_name`='admin',`section`='$admin_section',`reg_date`='$sendDate' , `status`=1, `area`='NULL', `user_con_no`= 'NULL' ") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../manage_campaign.php");
				</script>
	 <?php 	
 }

?>


<?php
if( isset($_REQUEST['addAreaButton']) ) {

		$no_contact = str_replace("'","", $_POST['noOfContact']);
		$section_form = str_replace("'","", $_POST['sec']);
		$area =str_replace("'","", $_POST['area']);

	 
		   $insQ=$db->query("INSERT INTO `campaign_tbl` SET `user_con_no`='$no_contact',`section`='$section_form',`area`='$area' ") or die("Error");  
		
	 ?>
	 <script>
					alert("Sucessfully Inserted !...");
					window.location.replace("../manage_campaign.php");
				</script>
	 <?php 	
 }

?>
