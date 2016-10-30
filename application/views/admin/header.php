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
    <link href="<?=base_url();?>admin_assets/tinymce/codepen.min.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  <link rel="shortcut icon" href="<?=base_url()?>assets/image/favicon.png">

    <!-- Include Font Awesome. -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Editor style. -->
    <link href="<?=base_url();?>admin_assets/wysiwyg/css/froala_editor.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>admin_assets/wysiwyg/css/froala_style.min.css" rel="stylesheet" type="text/css" />

    <!-- Include Code Mirror style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">

    <!-- Include Editor Plugins style. -->
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/char_counter.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/code_view.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/colors.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/emoticons.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/file.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/fullscreen.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/image.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/image_manager.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/line_breaker.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/quick_insert.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/table.css">
    <link rel="stylesheet" href="<?=base_url();?>admin_assets/wysiwyg/css/plugins/video.css">

<!--    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>-->
<!--    <script src="--><?//=base_url();?><!--admin_assets/tinymce/tinymce.min.js"></script>-->
<!--    <script>-->
<!--        tinymce.init({-->
<!--            selector: 'textarea',-->
<!--            height: 500,-->
<!--            plugins: [-->
<!--                'advlist autolink lists link image charmap print preview anchor',-->
<!--                'searchreplace visualblocks code fullscreen',-->
<!--                'insertdatetime media table contextmenu paste code'-->
<!--            ],-->
<!--            toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | image'-->
<!--        });-->
<!--    </script>-->
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
                        <a class=""  href="<?=base_url()?>admin/news"><i class="glyphicon glyphicon-list-alt fa-3x"></i> News</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users fa-3x"></i> CLUB<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="<?=base_url()?>admin/slider">Slider</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/history">History</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/accolades">Accolades &amp; Host Venue</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/csr">Corporate Social Responsibility</a>
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
                        <a href="<?=base_url()?>admin/facilities"><i class="fa fa-ticket fa-3x"></i> FACILITIES</a>
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