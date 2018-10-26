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
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<style>
    body {
        font-family: Arial;
    }
    /* Style the tab */
    
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }
    /* Style the buttons inside the tab */
    
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }
    /* Change background color of buttons on hover */
    
    .tab button:hover {
        background-color: #ddd;
    }
    /* Create an active/current tablink class */
    
    .tab button.active {
        background-color: #ccc;
    }
    /* Style the tab content */
    
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
    /* Style the close button */
    
    .topright {
        float: right;
        cursor: pointer;
        font-size: 28px;
    }
    
    .topright:hover {
        color: red;
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

                                <li>User Request</li>
                            </ul>
                        </div>
                    </div>
                    <!-- //breadcrumbs -->
                    <!---728x90--->

                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">View All User Request</h2>
                        <!---728x90--->

                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'sms')" id="defaultOpen">SMS Wallet</button>
                            <button class="tablinks" onclick="openCity(event, 'watsapp')">WatsApp Wallet</button>
                            <button class="tablinks" onclick="openCity(event, 'voice')">Voice Wallet</button>
                            <button class="tablinks" onclick="openCity(event, 'campaign')">Campaign Wallet</button>
                        </div>

                        <div id="sms" class="tabcontent">
                            <div class="agile-tables">
                                <div class="w3l-table-info agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">SMS Wallet</h3 >
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Balance</th>
                                            <th>View</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shanti sahu</td>
                                            <td>s@gmail.com</td>
                                            <td>978294933</td>
                                            <td>5000/-</td>
                                         <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                        </div>
                        <div id="watsapp" class="tabcontent">
                           <div class="agile-tables">
                            <div class="w3l-table-info agile_info_shadow">
                               <h3 class="w3_inner_tittle two">WhatsApp User Wallet</h3 >
                                <table id="example2" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Balance</th>
                                            <th>View</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shanti sahu</td>
                                            <td>s@gmail.com</td>
                                            <td>978294933</td>
                                            <td>5000/-</td>
                                         <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                        </div>

                        <div id="voice" class="tabcontent">

                           <div class="agile-tables">
                            <div class="w3l-table-info agile_info_shadow">
  <h3 class="w3_inner_tittle two">Voice User Wallet</h3 >
                                <table id="example3" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Balance</th>
                                            <th>View</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shanti sahu</td>
                                            <td>s@gmail.com</td>
                                            <td>978294933</td>
                                            <td>5000/-</td>
                                         <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                        </div>
                        <div id="campaign" class="tabcontent">

                           <div class="agile-tables">
                            <div class="w3l-table-info agile_info_shadow">
                             <h3 class="w3_inner_tittle two">Campaign Wallet</h3 >
                                <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                   <thead>
                                        <tr>
                                            <th>Sno.</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Balance</th>
                                            <th>View</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Shanti sahu</td>
                                            <td>s@gmail.com</td>
                                            <td>978294933</td>
                                            <td>5000/-</td>
                                         <td><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            <td><i class="fa fa-trash" aria-hidden="true"></i></td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>

                        </div>
                        </div>

                    </div>
                    <!-- //inner_content-->
                </div>

                <div class="copyrights">
                    <p>2018 BulkSMS. All Rights Reserved | Design by <a href="#" target="_blank">Rakesh Tiwari</a> </p>
                </div>

                <script>
                    function openCity(evt, cityName) {
                        var i, tabcontent, tablinks;
                        tabcontent = document.getElementsByClassName("tabcontent");
                        for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                        }
                        tablinks = document.getElementsByClassName("tablinks");
                        for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                        }
                        document.getElementById(cityName).style.display = "block";
                        evt.currentTarget.className += " active";
                    }

                    // Get the element with id="defaultOpen" and click on it
                    document.getElementById("defaultOpen").click();
                </script>
                <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
                <script src="js/modernizr.custom.js"></script>

                <script src="js/classie.js"></script>
                <script src="js/gnmenu.js"></script>
                <script>
                    new gnMenu(document.getElementById('gn-menu'));
                </script>
 <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>
 </script>
 <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example2').DataTable();
                    });
                </script>
                 </script>
 <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example3').DataTable();
                    });
                </script>
                 </script>
 <script type="text/javascript">
                    $(document).ready(function() {
                        $('#example4').DataTable();
                    });
                </script>
                <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
                <script src="js/jquery.dataTables.min.js"></script>

                <script src="js/dataTables.bootstrap.min.js"></script>
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