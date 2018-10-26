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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>



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

                                <li>Manage Profile</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">Manage Profile</h2>
                        <div class="wthree_general graph-form agile_info_shadow ">
                              
                                <div class="grid-1 ">
                                    <div class="form-body">
                                        <form class="form-horizontal">
                                            <div class="form-group">
                                                <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
                                                </div>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledinput" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input disabled="" type="email" class="form-control1" id="emailid" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control1" id="inputPassword" placeholder="Password">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="selector1" class="col-sm-2 control-label">State</label>
                                                <div class="col-sm-8">
                                                    <select name="selector1" id="selector1" class="form-control1">
                                                        <option>Chhattisgarh</option>
                                                        <option>Other</option>
                                                      
                                                    </select>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="txtarea1" class="col-sm-2 control-label">Address</label>
                                                <div class="col-sm-8">
                                                    <textarea name="txtarea1" id="txtarea1" cols="100" rows="4" class="form-control1"></textarea>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="radio" class="col-sm-2 control-label">Gender</label>
                                                <div class="col-sm-8">
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio"> Male</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" checked=""> Female</label>
                                                    </div>
                                                    <div class="radio-inline">
                                                        <label>
                                                            <input type="radio" disabled=""> Other</label>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                           <button type = "button" class = "btn btn-primary">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                  
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
                <!-- tables -->

                <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>

                <script>
                    // Get the modal
                    var modal = document.getElementById('myModal');

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                </script>

                <script src="js/jquery.dataTables.min.js"></script>

                <script src="js/dataTables.bootstrap.min.js"></script>
                <script src="js/jquery.nicescroll.js"></script>
                <script src="js/scripts.js"></script>

                <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    </body>

</html>