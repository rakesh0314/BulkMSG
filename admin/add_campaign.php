<?php if(isset($_COOKIE['login'])){
    
        $login_id= $_COOKIE['login'];
        
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
    <link rel="stylesheet" type="text/css" href="css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="css/basictable.css" />
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

    <body>
        <!-- banner -->
        <div class="wthree_agile_admin_info">
            <!-- /w3_agileits_top_nav-->
            <!-- /nav-->
            <?php include "header.php"?>
                <div class="clearfix"></div>
                <!-- //w3_agileits_top_nav-->

                <!-- /inner_content-->
                <div class="inner_content">
                    <!-- /inner_content_w3_agile_info-->

                    <!-- breadcrumbs -->
                    <div class="w3l_agileits_breadcrumbs">
                        <div class="w3l_agileits_breadcrumbs_inner">
                            <ul>
                                <li><a href="index.php">Home</a><span>«</span></li>

                                <li>Add Campaign</li>
                            </ul>
                        </div>
                    </div>
                    <!-- //breadcrumbs -->
                    <!---728x90--->

                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">Add Campaign</h2>
                        <!---728x90--->

                        <!--/forms-->
                        <div class="forms-main_agileits">

                            <!--/forms-inner-->
                            <div class="forms-inner">
                                <!--/set-1-->
                                <div class="set-1_w3ls">

                                    <div class="wthree_general graph-form agile_info_shadow ">
                                  
                                        <div class="grid-1 ">
                                            <div class="form-body">
                                                <form class="form-horizontal">
                                                   
                                                   
                                                    <div class="form-group">
                                                        <label for="focusedinput" class="col-sm-2 control-label">Add Section</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="">
                                                        </div>
                                                      
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="focusedinput" class="col-sm-2 control-label">Add Area</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="">
                                                        </div>
                                                      
                                                    </div>
                                                   <div class="form-group mb-n">
                                                <label for="largeinput" class="col-sm-2 control-label label-input-lg">Add Contact Number</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1 input-lg" id="largeinput" placeholder="">
                                                </div>
                                            </div>
                                                   
                                                  <div class="form-group">
                                        <label for="exampleInputFile" class=" control-label">Upload Report</label>
                                        <input type="file" id="exampleInputFile" >

                                    </div>
                                                   	<button type = "button" class = "btn btn-primary">Add</button>
                                               
                                                </form>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!--//forms-inner-->
                            </div>
                          
                        </div>
                        <!-- //inner_content_w3_agile_info-->
                    </div>
                    <!-- //inner_content-->
                </div>
              
                 <div class="copyrights">
            <p>2018 BulkSMS. All Rights Reserved | Design by <a href="#" target="_blank">Rakesh Tiwari</a> </p>
        </div>
                <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
                <script src="js/modernizr.custom.js"></script>

                <script src="js/classie.js"></script>
                <script src="js/gnmenu.js"></script>
                <script>
                    new gnMenu(document.getElementById('gn-menu'));
                </script>

                <!-- //js -->
                <script src="js/screenfull.js"></script>
             
                <script src="js/jquery.nicescroll.js"></script>
                <script src="js/scripts.js"></script>

                <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    </body>
</html>
<?php } else{
    header("location:signin.php");

}
?>