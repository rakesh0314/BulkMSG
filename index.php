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
												<h3 class="ca-sub">Campaign Service Card</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
										  <i class="fa fa-user" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main one">26,808</h4>
												<h3 class="ca-sub one">New Clients</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-database" aria-hidden="true"></i>
											<div class="ca-content">
											<h4 class="ca-main two">29,008</h4>
												<h3 class="ca-sub two">New Projects</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main three">49,436</h4>
												<h3 class="ca-sub three">Old Projects</h3>
											</div>
										</a>
                            </li>
                            <li>
                                <a href="#">
											<i class="fa fa-clone" aria-hidden="true"></i>
											<div class="ca-content">
												<h4 class="ca-main four">30,808</h4>
												<h3 class="ca-sub four">New Orders</h3>
											</div>
										</a>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </div>
                   
                    <div class="w3ls_agile_circle_progress agile_info_shadow">
                        <div class="cir_agile_info ">
                            <h3 class="w3_inner_tittle">Circular Progress</h3>
                            <div class="skill-grids">
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-1"></div>
                                    <p>SMS</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-2"></div>
                                    <p>Whatsapp</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-3"></div>
                                    <p>Voice</p>
                                </div>
                                <div class="skills-grid text-center">
                                    <div class="circle" id="circles-4"></div>
                                    <p>Campaign</p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /w3ls_agile_circle_progress-->
                    <!--/prograc-blocks_agileits-->
                  <!--   <div class="prograc-blocks_agileits">
                        <div class="col-md-12 bars_agileits agile_info_shadow">
                            <h3 class="w3_inner_tittle two">Daily Report</h3>
                            <div class='bar_group'>
                                <div class='bar_group__bar thin' label='SMS' show_values='true' tooltip='true' value='343'></div>
                                <div class='bar_group__bar thin' label='Whatsapp' show_values='true' tooltip='true' value='235'></div>
                                <div class='bar_group__bar thin' label='Voice' show_values='true' tooltip='true' value='550'></div>
                                <div class='bar_group__bar thin' label='Campaign' show_values='true' tooltip='true' value='456'></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div> -->
                   
                    <div class="weather_w3_agile_info agile_info_shadow">
                        <div class="weather_w3_inner_info" >
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