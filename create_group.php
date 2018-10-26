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
<style>
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }
    /* Modal Content */
    
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }
    /* The Close Button */
    
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    
    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>

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

                                <li>Create Group</li>
                            </ul>
                        </div>
                    </div>
                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">Create Group Info</h2>
                        <!-- tables -->
                        <!---728x90--->
                        <button id="myBtn" type="button" class="btn btn-primary">Create New Group</button>
                        <div id="myModal" class="modal">

                            <!-- Modal content -->
                            <div class="modal-content">
                                <span class="close">&times;</span>
                                <form action="insertCreateGroup.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Group Name</label>
                                        <input type="text" name="grpNm" class="form-control" id=" " placeholder="Enter Group Name"> </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Enter Number</label>
                                        <input type="text" name="grpNo" class="form-control" id=" " placeholder="Enter Number"> </div>
                                      <!--   <div class="form-group">
                                        <label for="exampleInputEmail1">Message Content</label>
                                      <textarea name="txtarea1" id="txtarea1" cols="50" rows="10" class="form-control1"></textarea> </div>-->
                                  
                                    <div class="form-group">
                                        <label for="exampleInputFile">Upload Contact</label>
                                        <input type="file" name="file" id="exampleInputFile">

                                    </div>

                                    <button type="submit" name="import_file" class="btn btn-default">Submit</button>
                                </form>
                            </div>

                        </div>

                        <div class="agile-tables">
                            <div class="w3l-table-info agile_info_shadow">

                                <table id="example" class="table table-striped table-bordered" style="width:100%" >
                                    <thead>
                                        <tr>
                                            <th>GroupID</th>
                                            <th>Group Name</th>
                                            <th>View</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>123</td>
                                            <td>xyz</td>
                                            <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>
                                        <tr>
                                            <td>123</td>
                                            <td>xyz</td>
                                            <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>
                                        <tr>
                                            <td>123</td>
                                            <td>xyz</td>
                                            <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>
                                        <tr>
                                            <td>123</td>
                                            <td>xyz</td>
                                            <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>
                                        <tr>
                                            <td>123</td>
                                            <td>xyz</td>
                                            <td><i class="fa fa-eye" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                        <!-- //social_media-->
                    </div>
                    <!-- //inner_content_w3_agile_info-->
                </div>
                <!-- //inner_content-->
                <!--copy rights start here-->
                <div class="copyrights">
                    <p>2018 BulkSMS. All Rights Reserved | Design by <a href="#" target="_blank">Rakesh Tiwari</a> </p>
                </div>
                <!--copy rights end here-->
                <!-- js -->

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