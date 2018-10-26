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

                                <li>WhatsApp Service</li>
                            </ul>
                        </div>
                    </div>
                    <!-- //breadcrumbs -->
                    <!---728x90--->

                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">WhatsApp Service</h2>
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
                                                <form class="form-horizontal" action="admin/inc/insertData.php" method="post" enctype="multipart/form-data">
                                                  <input type="hidden" name="userId" value="1">
                                                   <div class="form-group">
                                                        <label for="focusedinput" class="col-sm-2 control-label">Enter Title</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Enter Number" name="txtTitel">
                                                        </div>
                                                      
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="focusedinput" class="col-sm-2 control-label">Add Number</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control1" id="focusedinput" placeholder="Enter Number" name="txtContect">
                                                        </div>
                                                      
                                                    </div>
                                                       
                                                   
                                                    <div class="form-group">
                                                        <label for="selector1" class="col-sm-2 control-label">Select Group</label>
                                                        <div class="col-sm-8">
                                                            <select name="GourpId" id="selector1" class="form-control1">
                                                                <option selected>First</option>
                                                                <option>Second</option>
                                                                <option>Thard</option>
                                                                <option>Forth</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="radio" class="col-sm-2 control-label">Choose Language</label>
                                                        <div class="col-sm-8">
                                                            <div class="radio-inline">
                                                                <label>
                                                                    <input type="radio" name="Language" value="eng">English</label>
                                                            </div>
                                                            <div class="radio-inline">
                                                                <label>
                                                                    <input type="radio" checked="" name="Language" value="hin">Hindi</label>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtarea1" class="col-sm-2 control-label">Message</label>
                                                        <div class="col-sm-8">
                                                            <textarea name="txtMsg" id="txtarea1" cols="70" rows="7" class="form-control1"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="txtarea1" class="col-sm-2 control-label">Upload Image</label>
                                                        <div class="col-sm-8">
                                                            <input type="file" name="txtFile" id="exampleInputFile" style="margin-top: 18px;" >
                                                        </div>
                                                    </div>
                                               
                                                   	<button type = "submit" name="sendWhatupTxt" class = "btn btn-primary">Send</button>
                                                  	<button type = "button" class = "btn btn-success">View Report</button>
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