<?php 
if(!isset($_GET['user_id']))
    header("Location: ?user_id=1");
session_start();
require_once __DIR__."\api\db_functions.php";
$_SESSION['user_id'] = $_GET['user_id']; //user id
$db = new DB_Functions();
 ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Prep On - Account Info</title>

    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <!-- Custom styles for this template -->

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dripicon.css">
    <link rel="stylesheet" href="css/typicons.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="sass/css/theme.css">

    <!-- pace loader -->
    <script src="js/pace/pace.js"></script>
    <link href="js/pace/themes/orange/pace-theme-flash.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/slicknav/slicknav.css" />



    <script src="js/vendor/modernizr.js"></script>
    <style type="text/css">
        p.course span{
            margin-right: 10px;
        }
    </style>

</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->

    <div class="off-canvas-wrap" data-offcanvas>
        <!-- right sidebar wrapper -->
        <div class="inner-wrap">


            <!-- Right sidemenu -->
            <?php include "includes/navmenu.html" ?>
            <!-- end of Rightsidemenu -->



            <div class="wrap-fluid" id="paper-bg">
                <!-- top nav -->
                <div class="top-bar-nest">
                    <nav class="top-bar" data-topbar role="navigation" data-options="is_hover: false">
                        <ul class="title-area left">


                            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a>
                            </li>
                        </ul>

                        <section class="top-bar-section ">
                            <!-- Right Nav Section -->
                            <ul class="left">
                                <li class="has-dropdown bg-white">
                                    <a class="bg-white" href="#"><i class="text-green fa fa-envelope"></i>&nbsp;<span class="label edumix-msg-noft">84</span></a>
                                    <ul class="dropdown dropdown-nest">
                                        <li class="top-dropdown-nest"><span class="label round bg-green">MESSAGE</span>
                                        </li>
                                        <li class="bg-blue">
                                            <a href="#">
                                                <h3 class=" text-black"> Big Boss<b class="text-red fontello-record" ></b><span>Just Now<small></small></span>
                                                </h3>
                                                <p class=" text-black">Important task!</p>
                                            </a>
                                        </li>


                                        <li>
                                            <div class="slim-scroll">

                                                <div>
                                                    <a href="#">
                                                        <h3>Noel A. Riley<b class="text-green fontello-record" ></b><span>12:23<small>PM</small></span>
                                                </h3>
                                                        <p>Dua dua sayang adik kakak</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>Shirley J. Carneal<b class="text-gray fontello-record" ></b><span>10:11<small>PM</small></span>
                                                </h3>
                                                        <p>Tiga tiga sayang kekasihku</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>Paul L. Williamsr<b class="text-gray fontello-record" ></b><span>Yesterday</span>
                                                </h3>
                                                        <p>Empat empat sayang semuanya</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#">
                                                        <h3>William L. Wilcox<b class="text-gray fontello-record" ></b><span>2 Days Ago</span>
                                                </h3>
                                                        <p>Yang jomblo kasian deh lu</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">View All</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown bg-white">
                                    <a class="bg-white" href="#"><i class="text-blue fa fa-bell" ></i> <span class="label edumix-noft">45</span></a>
                                    <ul class="dropdown dropdown-nest">
                                        <li class="top-dropdown-nest"><span class="label round bg-blue">ALERT</span>
                                        </li>
                                        <li class="bg-black text-black">
                                            <i class="icon-warning"></i>
                                            <a href="#">
                                                <h3 class="text-black">Sticky Very Important<span class="text-red fontello-record" ></span></h3>
                                                <p class="text-black">1 minute ago</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="slim-scroll">
                                                <div>
                                                    <i class="fontello-megaphone"></i>
                                                    <a href="#">
                                                        <h3>Announcements <span class="text-green fontello-record" ></span>
                                                </h3>
                                                        <p>Just Now !</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="  fontello-attach-1"></i>
                                                    <a href="#">
                                                        <h3>Complete your profile<span class="text-yellow fontello-record" ></span>
                                                </h3>
                                                        <p>2 Minute Ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="  fontello-calendar-1"></i>
                                                    <a href="#">
                                                        <h3>New Schedule Realease<span class="text-yellow fontello-record" ></span>
                                                </h3>
                                                        <p>30 Minute ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="fontello-database-1"></i>
                                                    <a href="#">
                                                        <h3>New Student Data<span class="text-orange fontello-record" ></span>
                                                </h3>
                                                        <p>1 Hour ago</p>
                                                    </a>
                                                </div>
                                                <div>
                                                    <i class="fontello-graduation-cap"></i>
                                                    <a href="#">
                                                        <h3>Graduate Student List<span class="fontello-record" ></span>
                                                </h3>
                                                        <p>2 Days ago</p>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">View All</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Left Nav Section -->
                            <ul class="left">

                                <!-- Search | has-form wrapper -->
                                <li class="has-form bg-white">
                                    <div class="row collapse">

                                        <div class="large-12 columns">
                                            <div class="dark"> </div>
                                            <input class="input-top" type="text" placeholder="search">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <ul class="right">
                                <li class=" has-dropdown bg-white">
                                    <a class="bg-white" href="#"><img alt="" class="admin-pic img-circle" src="../../../api.randomuser.me/portraits/thumb/men/28.jpg"><span class="admin-pic-text text-gray">Hi, <?php $name = $db->getName($_SESSION['user_id']); echo ucfirst($name[0])." ".ucfirst($name[1]);?> </span>
                                    </a>

                                    <ul class="dropdown dropdown-nest profile-dropdown">

                                        <li>
                                            <i class="icon-user"></i>
                                            <a href="#">
                                                <h4>Profile<span class="text-aqua fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-folder-open"></i>
                                            <a href="#">
                                                <h4>Account<span class="text-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-upload"></i>
                                            <a href="api/logout.php">
                                                <h4>Logout<span class="text-dark-blue fontello-record" ></span></h4>
                                            </a>
                                        </li>

                                        <li class="active right">
                                            <a href="#">
                                                <div class="label bg-white">More</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="bg-white">
                                    <!-- <a class="right-off-canvas-toggle bg-white text-gray" href="#"><span style="font-size:13px" class="icon-view-list" ></span></a> -->
                                </li>
                            </ul>
                        </section>
                    </nav>
                </div>
                <!-- end of top nav -->

                <!-- breadcrumbs -->
                <ul class="breadcrumbs">
                    <li><a href="#"><span class="entypo-home"></span></a>
                    </li>
                    <li>Dashboard
                    </li>
                    <!--   <ul class="right inline-list">
                        <li>Help Center</a>
                        </li>
                        <li>Mail Support
                        </li>
                    </ul> -->
                </ul>
                <!-- end of breadcrumbs -->



                <!-- Container Begin -->
                <div class="row" style="margin-top:-20px">
                    <div class="large-8 columns">
                        <div class="box bg-transparent ">
                            <!-- /.box-header -->
                            <div class="box-header no-pad bg-transparent">

                                <h3 style="margin-bottom:20px;" class="box-title">
                                    <span>ACTIVE STUDENTS</span>
                                </h3>


                            </div>
                            <div class="box-body no-pad">

                                <div id="line-chart" style="height: 235px;"></div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>

                    <div class="large-4 columns">
                        <div class="box bg-transparent ">
                            <!-- /.box-header -->
                            <div class="box-header no-pad bg-transparent">

                                <h3 style="margin:0 20px 0 -5px;" class="box-title">
                                    <span>STATS</span>
                                </h3>


                            </div>
                            <div style="margin:15px 0 0" class="box-body no-pad">

                                <div class="stats-wrap">
                                    <h2><b class="counter-up" style="color:#666;">65,800</b> <span  style="background:#666;" >+<b  class="counter-up">20</b>%</span></h2>
                                    <p class="text-grey">Total students<small>This Year</small>
                                    </p>

                                    <h4><b class="counter-up" style="color:#888;">1,204</b> <span style="background:#888;">+<b class="counter-up">5</b>%</span></h4>
                                    <p>Graduate <small>This week</small>
                                    </p>

                                    <h4 style="color:#333;"><b class="counter-up">2,690</b> <span  style="background:#333;">+<b class="counter-up">12,5</b></span></h4>
                                    <p>New students<small>This Month</small>
                                    </p>

                                </div>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>



                <div class="row">
                    <div class="large-6 columns">
                        <div class="your-account">
                            <div class="row">
                                <div class="medium-3 columns">
                                    <!-- <div class="circle-progress"></div> -->
                                    <div class="circlestat" data-dimension="90" data-text="55%" data-width="8" data-fontsize="16" data-percent="55" data-fgcolor="#222" data-border="5" data-bgcolor="#D5DAE6" data-fill="#FFF"></div>
                                </div>
                                <div class="medium-9 columns ">
                                    <div style="margin:0 10px;padding:0 0 0 20px" class="summary-border-left">
                                        <h4>Your Account isn't complete!</h4>
                                        <h6>You must <strong>complete</strong> this issues.</h6>
                                        <ul>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-location"></i></a>
                                            </li>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-user-add"></i></a>
                                            </li>
                                            <li class="label round bg-green"><a href="#"><i class="text-white fontello-loop"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green fontello-wallet"></span>
                            <!--   <img src="img/bag.png"> -->
                            <h6 class="bg-black text-white"><strong>Your Balance</strong></h6>
                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green  fontello-doc-1"></span>
                            <!-- <img src="img/box.png"> -->
                            <h6 class="bg-black text-white">General Info</h6>
                        </div>

                    </div>
                    <div class="large-2 columns">
                        <div class="bg-complete-profile">
                            <span class="bg-green  fontello-params"></span>
                            <!--  <i class="img/count.png"></i> -->
                            <h6 class="bg-black text-white">Main Setting</h6>
                        </div>

                    </div>

                </div>


                <!-- Widget  -->
                <div class="row">

                    <div class="large-4 columns">

                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-graph-pie"></i>
                                    <span>SUMMARY</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body " style="display: block;">


                                <div style="margin:0" class="row summary-border-top">
                                    <div class="large-6 columns">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">132</span><small>K</small></h2>
                                            <p>Women</p>
                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest">
                                            <h2 class="text-black"><span class="counter-up">160</span><small>K</small></h2>
                                            <p>Man</p>
                                        </div>
                                    </div>
                                </div>

                                <div style="margin:0" class="row">
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <span class="text-center"><canvas height="70" width="70" id="partly-cloudy-day"></canvas></span>
                                        </div>

                                    </div>

                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h4 class="text-left"><span class="counter-up">05</span>/<span class="counter-up">12</span>/<span class="counter-up">2014</span></h4>
                                            <p class="text-left">Today</p>
                                        </div>

                                    </div>


                                </div>

                                <div style="margin:0" class="row summary-border-bottom">
                                    <div class="large-6 columns">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black "><span class="counter-up">82</span><small>%</small></h2>
                                            <p>Graduate</p>

                                        </div>

                                    </div>
                                    <div class="large-6 columns summary-border-left">
                                        <div class="summary-nest summary-pad-nest">
                                            <h2 class="text-black"><span class="counter-up">24</span><small>th</small></h2>
                                            <p>Avarage</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- end .timeline -->


                        </div>
                        <!-- /.box-body -->
                    </div>


                    <div class="large-4 columns">
                        <!-- timeline item -->
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->
                                <div class="pull-right box-tools">

                                    <span class="box-btn" data-widget="collapse"><i class="icon-minus"></i>
                                    </span>
                                    <span class="box-btn" data-widget="remove"><i class="icon-cross"></i>
                                    </span>
                                </div>
                                <h3 class="box-title"><i class="icon-view-list"></i>
                                    <span>EVENTS</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <div class="events-nest">
                                    <div class="bg-green text-black">
                                        <h1 class="text-black"><b class="counter-up-fast">25</b></h1>
                                        <span>3 Event</span>
                                        <p>Monday <i class="fontello-record"></i> Februari 2015</p>

                                    </div>
                                    <ul>
                                        <li>
                                            <h4><span class="counter-up-fast">08</span>:00<small>PM</small></h4>
                                            <p>Mathematic Lesson <i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><span class="counter-up-fast">09</span>:<span class="counter-up-fast">30</span><small>PM</small></h4>
                                            <p>Meeting With Josh<i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>
                                        <li>
                                            <h4><span class="counter-up-fast">12</span>:<span class="counter-up-fast">15</span><small>PM</small></h4>
                                            <p>Launch time<i class="icon-download"></i><i class="  icon-document-new"></i><i class="icon-heart"></i>
                                            </p>
                                        </li>


                                    </ul>

                                </div>




                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>

                    <div class="large-4 columns">
                        <div class="box">
                            <div class="box-header bg-transparent">
                                <!-- tools box -->                                
                                <h3 class="box-title"><i class=" icon-calendar"></i>
                                    <span>Courses</span>
                                </h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="display: block;">
                                <div class="school-timetable">
                                    <!-- Search for courses -->
                                    <div class="error"></div>                                    
                                    <form>
                                        <input id="search-course" class="input-top" type="text" placeholder="Add Course">
                                    </form>
                                    <hr>
                                    <p class="course"><?php $courses_list = $db->getRegisteredCourses($_SESSION['user_id']); 
                                            foreach ($courses_list as $value) {
                                                echo "<span>{$value}</span>";
                                            }
                                    ?></p>                                    
                                </div>




                            </div>
                            <!-- /.box-body -->
                        </div>

                    </div>
                    <!-- /.box -->
                </div>
                <!-- End of Widget  -->



                <footer>
                    <div id="footer">Copyright &copy; 2015 <a href="http://themeforest.net/user/matirasa">Matirasa</a> Made with <i class="fontello-heart-1 text-green"></i></div>

                </footer>
            </div>

            <!-- End of Container Begin -->







            <!-- Removing this feature currently -->
            <!-- Right Menu -->
            <aside class="right-off-canvas-menu">
                <ul class="off-canvas-list">
                    <li>
                        <label class="bg-transparent" style="padding:25px 20px"><span class="label round bg-green">online</span><i class=" icon-gear right"></i>
                        </label>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="../../../api.randomuser.me/portraits/thumb/men/25.jpg"><b>Walter M. Reed</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="../../../api.randomuser.me/portraits/thumb/women/26.jpg"><b>Evelyn G. Thrailkill</b>
                            <br>Ok, good luck!</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="../../../api.randomuser.me/portraits/thumb/men/27.jpg"><b>Michael L. Merchant</b>
                            <br>Do you receive my email?</a>
                    </li>

                    <li>
                        <a href="#"><img alt="" class="chat-pic" src="../../../api.randomuser.me/portraits/thumb/men/29.jpg"><b>James S. Houchin</b>
                            <br>Thak you, you're wellcome</a>
                    </li>

                    <li>
                        <label class="bg-transparent" style="padding:25px 20px"><span class="label round bg-opacity-white">offline</span><i class="icon-gear right"></i>
                        </label>
                    </li>

                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="../../../api.randomuser.me/portraits/thumb/men/30.jpg"><b>Allen M. Plant</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="../../../api.randomuser.me/portraits/thumb/men/31.jpg"><b>Arthur S. Galindo</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="../../../api.randomuser.me/portraits/thumb/women/32.jpg"><b>Joyce T. True</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="../../../api.randomuser.me/portraits/thumb/men/33.jpg"><b>Christopher A. Charpentier</b>
                            <br>Hi, there...</a>
                    </li>
                    <li>
                        <a href="#"><img alt="" class="chat-pic chat-pic-gray" src="../../../api.randomuser.me/portraits/thumb/women/34.jpg"><b>Teresa M. Boothe</b>
                            <br>Hi, there...</a>
                    </li>


                </ul>
            </aside>
            <!-- close the off-canvas menu -->
            <a class="exit-off-canvas"></a>
            <!-- End of Right Menu -->
        </div>
        <!-- end paper bg -->

    </div> 
    <!-- end of off-canvas-wrap -->

    <!-- end of inner-wrap -->



    <!-- main javascript library -->
    <script type='text/javascript' src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type='text/javascript' src='js/preloader-script.js'></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="js/foundation.min.js"></script>
    <script type='text/javascript' src="js/foundation/foundation.html#111111.js"></script>
    <!-- main edumix javascript -->
    <script type='text/javascript' src='js/slimscroll/jquery.slimscroll.js'></script>
    <script type='text/javascript' src='js/slicknav/jquery.slicknav.js'></script>
    <script type='text/javascript' src='js/sliding-menu.js'></script>
    <script type='text/javascript' src='js/scriptbreaker-multiple-accordion-1.js'></script>
    <script type="text/javascript" src="js/number/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="js/circle-progress/jquery.circliful.js"></script>
    <script type='text/javascript' src='js/app.js'></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="js/number-progress-bar/jquery.velocity.min.js"></script>
    <script type='text/javascript' src="js/number-progress-bar/number-pb.js"></script>
    <script type='text/javascript' src="js/loader/loader.js"></script>
    <script type='text/javascript' src="js/loader/demo.js"></script>
    <!-- FLOT CHARTS -->
    <script src="js/flot/jquery.flot.js" type="text/javascript"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="js/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="js/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
    <script src="js/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/skycons/skycons.js"></script>

    <script type="text/javascript">
    $(function() {

        /*
         *  AUTOCOMPLETE COURSE
         *  -------------------
         */
         $( "#search-course" ).autocomplete({
            source: "api/getCourses.php",
            select: function(event,ui){
                event.preventDefault();
                courseExists(ui.item.value);                
            }
        });
         function courseExists(courseName){
            $.ajax({
                method: "GET",
                url: "api/getCourses.php",
                data: { course: courseName},
                success: function(e){
                    alert(e);
                    var i = jQuery.parseJSON(e);
                    alert(i.courseName);                    
                    if(i.status == "success"){
                        $("p.course").append("<span>"+ i.courseName +"</span>");
                    }
                    else
                        $(".error").html("Course already exists");
                }
            });
         }

        "use strict";


        //weather icons
        var icons = new Skycons({
                "stroke": 0.06,
                "color": "Gray",
                "cloudColor": "#666666",
                "sunColor": "#92cd18",
                "moonColor": "DodgerBlue",
                "rainColor": "RoyalBlue",
                "snowColor": "LightGray",
                "windColor": "LightSteelBlue",
                "fogColor": "#65C3DF"
            }),
            list = [
                "clear-day", "clear-night", "partly-cloudy-day",
                "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                "fog"
            ],
            i;

        for (i = list.length; i--;)
            icons.set(list[i], list[i]);
        icons.play()

        /*
         * LINE CHART
         * ----------
         */
        //LINE randomly generated data

        var line_data1 = [
            [1, 800],
            [2, 1500],
            [3, 900],
            [4, 1900],
            [5, 4000],
            [6, 2800],
            [7, 2500],
            [8, 700],
            [9, 1500],
            [10, 1000],
            [11, 2000],
            [12, 4300],
            [13, 1756],
            [14, 2000],
            [15, 1500],
            [16, 1900],
            [17, 1200],
            [18, 2800],
            [19, 3200],
            [20, 2190]
        ];
        var line_data2 = [
            [1, 1800],
            [2, 2900],
            [3, 1950],
            [4, 3450],
            [5, 7000],
            [6, 5300],
            [7, 4890],
            [8, 2300],
            [9, 3900],
            [10, 2900],
            [11, 4500],
            [12, 2200],
            [13, 1120],
            [14, 1459],
            [15, 1100],
            [16, 1189],
            [17, 300],
            [18, 1250],
            [19, 1705],
            [20, 959]

        ];


        $.plot("#line-chart", [line_data1, line_data2], {
            grid: {
                hoverable: true,
                borderColor: "#E2E6EE",
                borderWidth: 1,
                tickColor: "#E2E6EE"
            },
            series: {
                shadowSize: 0,
                lines: {
                    show: true
                },
                points: {
                    show: true
                }
            },
            colors: ["#333333", "#cccccc"],
            lines: {
                fill: true,
            },
            yaxis: {
                show: false,
            },
            xaxis: {
                show: true
            }
        });
        //Initialize tooltip on hover
        $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
            position: "absolute",
            background: "#333333",
            padding: "3px 10px",
            color: "#ffffff",
            display: "none",
            opacity: 0.9
        }).appendTo("body");
        $("#line-chart").bind("plothover", function(event, pos, item) {

            if (item) {
                var x = item.datapoint[0].toFixed(2),
                    y = item.datapoint[1].toFixed(2);

                $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                    .css({
                        top: item.pageY + 5,
                        left: item.pageX + 5
                    })
                    .fadeIn(200);
            } else {
                $("#line-chart-tooltip").hide();
            }

        });
        /* END LINE CHART */

        /*
         * FULL WIDTH STATIC AREA CHART
         * -----------------
         */
        var areaData = [
            [2, 88.0],
            [3, 93.3],
            [4, 102.0],
            [5, 108.5],
            [6, 115.7],
            [7, 115.6],
            [8, 124.6],
            [9, 130.3],
            [10, 134.3],
            [11, 141.4],
            [12, 146.5],
            [13, 151.7],
            [14, 159.9],
            [15, 165.4],
            [16, 167.8],
            [17, 168.7],
            [18, 169.5],
            [19, 168.0]
        ];
        $.plot("#area-chart", [areaData], {
            grid: {
                borderWidth: 0
            },
            series: {
                shadowSize: 0, // Drawing is faster without shadows
                color: "#00c0ef"
            },
            lines: {
                fill: true //Converts the line chart to area chart                        
            },
            yaxis: {
                show: false
            },
            xaxis: {
                show: false
            }
        });

        /* END AREA CHART */

    });

    /*
     * Custom Label formatter
     * ----------------------
     */
    function labelFormatter(label, series) {
        return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>" + label + "<br/>" + Math.round(series.percent) + "%</div>";
    }
    </script>


    <script>
    $(document).foundation();
    </script>



</body>
</html>