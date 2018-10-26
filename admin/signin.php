<?php 
include("inc/root/myDBcon.php");

	if(isset($_REQUEST['signinBtn'])){

			$UserName=str_replace("'","",$_REQUEST['email']);
			$UserPass=str_replace("'","",$_REQUEST['password']);

				// Select User //
			$sql_Use = $db->query("SELECT * FROM `a_log` WHERE log_id='$UserName' AND log_pass='$UserPass' AND status='true'");
			if($sql_Use->rowCount()==0){ ?>
				<script type="text/javascript">
					alert("Invalid User Name or Password");
					window.location.replace("signin.php");
					</script>
			<?php }
			else{
					while($rst_user = $sql_Use-> fetch(PDO::FETCH_ASSOC)){
					if($UserName==$rst_user['log_id'] AND $UserPass==$rst_user['log_pass']){
					$admin_id= $rst_user['a_id'];
					$expireTime=time()+60*60*24*30;
					setcookie("login",$admin_id,$expireTime);
					header("location:index.php");
					}
				}
			}

			}	
?>
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>BULKSMS</title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							<!---728x90--->

							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Sign in Form</h2>
													<div class="login-form">
														<form action="signin.php" method="post">
															<input type="email" name="email" placeholder="E-mail" required="">
															<input type="password" name="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" name="signinBtn" value="SIGN IN">
															</div>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
												
												</div>
										</div>
									
											
			</div>
						</div>
          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		<script src="js/classie.js"></script>
<script src="js/scripts.js"></script>
<script src="js/snow.html"></script>
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>