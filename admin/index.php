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
                <div class="inner_content_w3_agile_info">
                    <!-- /agile_top_w3_grids-->
                    <div class="agile_top_w3_grids">
                        <ul class="ca-menu">
                            <li>
                                <a href="#">
											
											<i class="fa fa-building-o" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main">16</h4>
												<h3 class="ca-sub">New User</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one">26</h4>
												<h3 class="ca-sub one">New Clients</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two">28</h4>
												<h3 class="ca-sub two">New Wallet Request</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three">13,000</h4>
												<h3 class="ca-sub three">Wallet Balance</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four">3</h4>
												<h3 class="ca-sub four">New Orders</h3>
											</div>
										</a>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                    <!-- //agile_top_w3_grids-->
                    <!---728x90--->
                   
                  
                    <div class="w3ls_agile_circle_progress agile_info_shadow">
                        <div class="cir_agile_info ">
                            <h3 class="w3_inner_tittle">Circular Progress</h3>
                            <div class="skill-grids">
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-1"></div>
                                    <p>HTML</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-2"></div>
                                    <p>PHOTOGRAPHY</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-3"></div>
                                    <p>ILLUSTRATOR</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-4"></div>
                                    <p>CSS3</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /w3ls_agile_circle_progress-->
                    <!--/prograc-blocks_agileits-->
                    <div class="prograc-blocks_agileits">
                        <div class="col-md-6 bars_agileits agile_info_shadow">
                            <h3 class="w3_inner_tittle two">Daily Sales</h3>
                            <div class='bar_group'>
                                <div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='343'></div>
                                <div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='235'></div>
                                <div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='550'></div>
                                <div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true' value='456'></div>
                            </div>
                        </div>
                        <div class="col-md-6 fallowers_agile agile_info_shadow">
                            <h3 class="w3_inner_tittle two">Recent Followers</h3>
                            <div class="work-progres">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Project</th>
                                                <th>Manager</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Face book</td>
                                                <td>Malorum</td>
                                                <td><span class="label label-danger">in progress</span></td>
                                                <td><span class="badge badge-info">50%</span></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Twitter</td>
                                                <td>Evan</td>
                                                <td><span class="label label-success">completed</span></td>
                                                <td><span class="badge badge-success">100%</span></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Google</td>
                                                <td>John</td>
                                                <td><span class="label label-warning">in progress</span></td>
                                                <td><span class="badge badge-warning">75%</span></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>LinkedIn</td>
                                                <td>Danial</td>
                                                <td><span class="label label-info">in progress</span></td>
                                                <td><span class="badge badge-info">65%</span></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Tumblr</td>
                                                <td>David</td>
                                                <td><span class="label label-warning">in progress</span></td>
                                                <td><span class="badge badge-danger">95%</span></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Tesla</td>
                                                <td>Mickey</td>
                                                <td><span class="label label-info">in progress</span></td>
                                                <td><span class="badge badge-success">95%</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                  
                    <div class="weather_w3_agile_info agile_info_shadow">
                        <div class="weather_w3_inner_info">
                            <div class="over_lay_agile">
                                <h3 class="w3_inner_tittle">Weather Report</h3>
                                <ul>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="partly-cloudy-day" width="60" height="60"></canvas>
                                        </figure>
                                        <h3>25 °C</h3>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="clear-day" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>WED</h4>
                                            <h5>27 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="snow" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>THU</h4>
                                            <h5>13 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="partly-cloudy-night" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>FRI</h4>
                                            <h5>18 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="cloudy" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>SAT</h4>
                                            <h5>15 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                    <li>
                                        <figure class="icons">
                                            <canvas id="fog" width="60" height="60"></canvas>
                                        </figure>
                                        <div class="weather-text">
                                            <h4>SUN</h4>
                                            <h5>11 °C</h5>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- //inner_content_w3_agile_info-->
            </div>
            <!-- //inner_content-->
        </div>
        <!-- banner -->
        <!--copy rights start here-->
        <div class="copyrights">
            <p>2018 BulkSMS. All Rights Reserved | Design by <a href="#" target="_blank">Rakesh Tiwari</a> </p>
        </div>
        <!--copy rights end here-->
        <!-- js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <!-- /amcharts -->
        <script src="js/amcharts.js"></script>
        <script src="js/serial.js"></script>
        <script src="js/export.js"></script>
        <script src="js/light.js"></script>
     
      
        <script src="js/chart1.html"></script>
        <script src="js/Chart.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        <script src="js/classie.js"></script>
        <script src="js/gnmenu.js"></script>
        <script>
        new gnMenu(document.getElementById('gn-menu'));
        </script>
        <!-- script-for-menu -->
        <!-- /circle-->
        <script type="text/javascript" src="js/circles.js"></script>
        <script>
        var colors = [
            ['#ffffff', '#fd9426'],
            ['#ffffff', '#fc3158'],
            ['#ffffff', '#53d769'],
            ['#ffffff', '#147efb']
        ];
        for (var i = 1; i <= 7; i++) {
            var child = document.getElementById('circles-' + i),
                percentage = 30 + (i * 10);

            Circles.create({
                id: child.id,
                percentage: percentage,
                radius: 80,
                width: 10,
                number: percentage / 1,
                text: '%',
                colors: colors[i - 1]
            });
        }
        </script>
        <!-- //circle -->
        <!--skycons-icons-->
        <script src="js/skycons.js"></script>
        <script>
        var icons = new Skycons({ "color": "#fcb216" }),
            list = [
                "partly-cloudy-day"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
        </script>
        <script>
        var icons = new Skycons({ "color": "#fff" }),
            list = [
                "clear-night", "partly-cloudy-night", "cloudy", "clear-day", "sleet", "snow", "wind", "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play();
        </script>
        <!--//skycons-icons-->
       
        <script src="js/bars.js"></script>
        <script src="js/jquery.nicescroll.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    </body>

</html>
<?php } else{
    header("location:signin.php");

}
?>