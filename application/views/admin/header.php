<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Bandung Giri Gahana Golf Golf and Resort</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="<?=base_url();?>admin_assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="<?=base_url();?>admin_assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="<?=base_url();?>admin_assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="<?=base_url();?>admin_assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="shortcut icon" href="<?=base_url()?>assets/image/favicon.png">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Administrator</a>
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="login.html" class="btn btn-warning square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-3x"></i> CLUB<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">History &amp; Board Of Directors</a>
                            </li>
                            <li>
                                <a href="#">Accolades &amp; Host Venue</a>
                            </li>
                            <li>
                                <a href="#">Facilities</a>
                            </li>
                            <li>
                                <a href="#">Corporate Social Responsibility</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o fa-3x"></i> COURSES<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Course Layout</a>
                            </li>
                            <li>
                                <a href="#">Hole Description</a>
                            </li>
                            <li>
                                <a href="#">Score Card</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> RATES<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Golf Rates</a>
                            </li>
                            <li>
                                <a href="#">Promotions</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-ticket fa-3x"></i> FACILITIES</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-user fa-3x"></i> MEMBERSHIP<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">General Information</a>
                            </li>
                            <li>
                                <a href="#">Reciprocal Clubs</a>
                            </li>
                            <li>
                                <a href="#">Application Checklist</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-list fa-3x"></i> RESORT</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-th-large fa-3x"></i> SPA</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-calendar fa-3x"></i> EVENTS<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Event Calendar</a>
                            </li>
                            <li>
                                <a href="#">Order Of Merit & Monthly Medals</a>
                            </li>
                            <li>
                                <a href="#">Competition Results</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a  href="#"><i class="fa fa-phone fa-3x"></i> contacts</a>
                    </li>
                </ul>
            </div>
        </nav>  