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

                                <li>Wallet Summary</li>
                            </ul>
                        </div>
                    </div>
                    <!-- //breadcrumbs -->
                    <!---728x90--->

                    <div class="inner_content_w3_agile_info two_in">
                        <h2 class="w3_inner_tittle">Wallet Summary</h2>
                        <!---728x90--->

                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'sms')" id="defaultOpen">SMS Service</button>
                            <button class="tablinks" onclick="openCity(event, 'watsapp')">WatsApp Service</button>
                            <button class="tablinks" onclick="openCity(event, 'voice')">Voice Service</button>
                            <button class="tablinks" onclick="openCity(event, 'campaign')">Campaign Service</button>
                        </div>

                        <div id="sms" class="tabcontent">
                          <div class="agile-tables">
                                <div class="w3l-table-info agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">SMS Service</h3>
                                    <table id="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Status</th>
                                                <th>Date of Transaction</th>
                                                <th>Point's</th>
                                                <th>View</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i=0; $i<5; $i++){ ?>  
                                            <tr>
                                                <td>1</td>
                                                <td>Debit</td>
                                                <td>2/5/2018</td>
                                                <td>100</td>
                                                <td><a href="wallet_view.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                        <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
</div>
                            <div id="watsapp" class="tabcontent">
                             
                                <div class="agile-tables">
                                <div class="w3l-table-info agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">WhatsApp Service</h3>
                                    <table id="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Status</th>
                                                <th>Date of Transaction</th>
                                                <th>Point's</th>
                                                <th>View</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php for($i=0; $i<5; $i++){ ?>  
                                            <tr>
                                                <td>1</td>
                                                <td>Debit</td>
                                                <td>2/5/2018</td>
                                                <td>100</td>
                                               <td><a href="wallet_view.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            </div>

                            <div id="voice" class="tabcontent">
                     
                                <div class="agile-tables">
                                <div class="w3l-table-info agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">Voice Service</h3>
                                    <table id="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Status</th>
                                                <th>Date of Transaction</th>
                                                <th>Point's</th>
                                                <th>View</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php for($i=0; $i<5; $i++){ ?>  
                                            <tr>
                                                <td>1</td>
                                                <td>Debit</td>
                                                <td>2/5/2018</td>
                                                <td>100</td>
                                               <td><a href="wallet_view.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php } ?>
                                           
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            </div>
                            <div id="campaign" class="tabcontent">
                              
                                <div class="agile-tables">
                                <div class="w3l-table-info agile_info_shadow">
                                    <h3 class="w3_inner_tittle two">Campaign Service</h3>
                                    <table id="table">
                                        <thead>
                                            <tr>
                                                <th>Sno.</th>
                                                <th>Status</th>
                                                <th>Date of Transaction</th>
                                                <th>Point's</th>
                                                <th>View</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php for($i=0; $i<5; $i++){ ?>  
                                            <tr>
                                                <td>1</td>
                                                <td>Debit</td>
                                                <td>2/5/2018</td>
                                                <td>100</td>
                                               <td><a href="wallet_view.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                                            </tr>
                                            <?php } ?>
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

                    <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#table').basictable();

                            $('#table-breakpoint').basictable({
                                breakpoint: 768
                            });

                            $('#table-swap-axis').basictable({
                                swapAxis: true
                            });

                            $('#table-force-off').basictable({
                                forceResponsive: false
                            });

                            $('#table-no-resize').basictable({
                                noResize: true
                            });

                            $('#table-two-axis').basictable();

                            $('#table-max-height').basictable({
                                tableWrapper: true
                            });
                        });
                    </script>
                    <!-- //js -->
                    <script src="js/screenfull.js"></script>

                    <script src="js/jquery.nicescroll.js"></script>
                    <script src="js/scripts.js"></script>

                    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

    </body>

</html>