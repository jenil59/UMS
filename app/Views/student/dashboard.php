<?php

$UserName = session()->get('First_Name');

session()->push('userdata', ['req_from' => $_SERVER['REDIRECT_URL']]);


?>



<!DOCTYPE html>
<html>



<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title> Student Dashboard</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme" />
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- -------------- Icomoon -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/fonts/icomoon/icomoon.css">

    <!-- -------------- FullCalendar -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/magnific/magnific-popup.css">

    <!-- -------------- Plugins -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/js/plugins/c3charts/c3.min.css">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/skin/default_skin/css/theme.css">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="/assets/allcp/forms/css/forms.css">
    <link rel="stylesheet" type="text/css" href="/assets/custom styles/index.css">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .bg-c {
            /* background-color: grey; */
        }

        .d-none {
            display: none !important;
        }
    </style>
</head>

<!-- <body class="dashboard-page"> -->

<body class="dashboard-page sb-l-o sb-r-c onload-check sb-l-m sb-l-disable-animation">


    <!-- -------------- Body Wrap  -------------- -->
    <div id="main">

        <!-- -------------- Header  -------------- -->
        <header class="navbar navbar-fixed-top bg-dark">
            <div class="navbar-logo-wrapper">
                <a class="navbar-logo-text" href="<?= base_url('/student') ?>">
                    <b>Alliance</b>
                </a>
                <span id="sidebar_left_toggle" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-left d-none">
                <li class="dropdown dropdown-fuse hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                        <span class="fa fa-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">One more action</a></li>
                        <li><a href="#">More actions if needed</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated action</a></li>
                    </ul>
                </li>
                <li class="hidden-xs">
                    <a class="navbar-fullscreen toggle-active" href="#">
                        <span class="glyphicon glyphicon-fullscreen"></span>
                    </a>
                </li>
            </ul>
            <form class="navbar-form navbar-left search-form square" role="search">
                <div class="input-group add-on">

                    <input type="text" class="form-control" placeholder="Search..." onfocus="this.placeholder=''" onblur="this.placeholder='Search...'">

                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>

                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden-xs d-none">
                    <div class="navbar-btn btn-group">
                        <a href="#" class="topbar-dropmenu-toggle btn" data-toggle="button">
                            <span class="fa fa-magic fs20 text-info"></span>
                        </a>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse d-none">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn dropdown-toggle">
                            <span class="fa fa-envelope fs20 text-danger"></span>
                        </button>
                        <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                            3
                        </button>
                        <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <div class="btn-group btn-group-justified btn-group-nav" role="tablist">
                                        <a href="#nav-tab1" data-toggle="tab" class="btn btn-primary btn-bordered btn-sm active">Activity</a>
                                        <a href="#nav-tab2" data-toggle="tab" class="btn btn-primary btn-bordered btn-sm br-l-n br-r-n">Messages</a>
                                        <a href="#nav-tab3" data-toggle="tab" class="btn btn-primary btn-bordered btn-sm">Notifications</a>
                                    </div>
                                </div>
                                <div class="panel-body panel-scroller scroller-overlay scroller-navbar pn">
                                    <div class="tab-content br-n pn">
                                        <div id="nav-tab1" class="tab-pane active" role="tabpanel">
                                            <ul class="media-list" role="menu">
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/5.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small class="text-muted">- 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/2.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small> - 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/3.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small class="text-muted">- 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/4.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small class="text-muted">- 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/5.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small class="text-muted">- 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/2.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small> - 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <a class="media-left" href="#"> <img src="/assets/img/avatars/3.jpg" class="mw40 br2" alt="avatar">
                                                    </a>

                                                    <div class="media-body">
                                                        <h5 class="media-heading">New post
                                                            <small class="text-muted">- 09/01/15</small>
                                                        </h5>
                                                        Last Updated 5 days ago by
                                                        <a class="" href="#"> John Doe </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="nav-tab2" class="tab-pane chat-widget" role="tabpanel">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/3.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Frank Hill
                                                        <small> - 14:10am</small>
                                                    </h5>
                                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">George Kelly
                                                        <small> - 15:25am</small>
                                                    </h5>
                                                    Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                                    erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Frank Hill
                                                        <small> - 15:33am</small>
                                                    </h5>
                                                    Lorem ipsum dolor sit amet, nonummy nibh euismod tinc consectetuer
                                                    adipiscing elit.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">George Kelly
                                                        <small> - 15:43am</small>
                                                    </h5>
                                                    Euismod sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                                                    aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/2.jpg">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <span class="media-status online"></span>
                                                    <h5 class="media-heading">Frank Hill
                                                        <small> - 16:30am</small>
                                                    </h5>
                                                    Corem ipsum dolor sit amet, nonummy nibh euismod tinc co.
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="media-body">
                                                    <span class="media-status offline"></span>
                                                    <h5 class="media-heading">George Kelly
                                                        <small> - 12:30am</small>
                                                    </h5>
                                                    Ubh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                </div>
                                                <div class="media-right">
                                                    <a href="#">
                                                        <img class="media-object" alt="64x64" src="/assets/img/avatars/1.jpg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="nav-tab3" class="tab-pane alerts-widget" role="tabpanel">
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-shopping-cart text-success"></span> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Product Order
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    <a href="#">iPad Air</a> - 3 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-comment text-system"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Comment
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    Sam Fisher - I'd like to read more!
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response text-right"> Moderate?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-pencil"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-eye text-warning"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Review
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    Sebastian Jones - 5 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Registration
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    Carlos Santiyago - 7 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-user text-info"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New User Registration
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    Douglas Adams - 13 hours ago

                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Approve?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-remove"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-info text-alert"></span>
                                                </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Invoice
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    <a href="#">iPad Air</a> - 14 hours ago

                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response single">#1234567</div>
                                                    <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                        <i class="fa fa-link"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <a class="media-left" href="#"> <span class="fa fa-shopping-cart text-success"></span> </a>

                                                <div class="media-body">
                                                    <h5 class="media-heading">New Product Order
                                                        <small class="text-muted"></small>
                                                    </h5>
                                                    <a href="#">iPad Air</a> - 14 hours ago
                                                </div>
                                                <div class="media-right">
                                                    <div class="media-response"> Confirm?</div>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-check text-success"></i>
                                                        </button>
                                                        <button type="button" class="btn btn-default btn-sm btn-bordered light">
                                                            <i class="fa fa-cog"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse d-none">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn dropdown-toggle">
                            <span class="fa fa-bell fs20 text-primary"></span>
                        </button>
                        <button data-toggle="dropdown" class="btn dropdown-toggle fs18 visible-xl">
                            8
                        </button>
                        <div class="dropdown-menu keep-dropdown w375 animated animated-shorter fadeIn" role="menu">
                            <div class="panel mbn">
                                <div class="panel-menu">
                                    <span class="panel-icon"><i class="fa fa-tasks"></i></span>
                                    <span class="panel-title fw600"> Activity reports</span>
                                    <button class="btn btn-default light btn-xs btn-bordered pull-right" type="button"><i class="fa fa-refresh"></i>
                                    </button>
                                </div>
                                <div class="panel-body panel-scroller scroller-navbar scroller-overlay scroller-pn pn">
                                    <ol class="timeline-list">
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-dark light">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>John Doe</b> Sent you a message.
                                                <a href="#">View now</a>
                                            </div>
                                            <div class="timeline-date">11:15am</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-success">
                                                <span class="fa fa-info"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Admin</b> created invoice for:
                                                <a href="#">iPad Air</a>
                                            </div>
                                            <div class="timeline-date">6:26pm</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-success">
                                                <span class="fa fa-info"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Admin</b> created invoice for:
                                                <a href="#">iPhone 5s</a>
                                            </div>
                                            <div class="timeline-date">11:45am</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-dark light">
                                                <span class="fa fa-envelope"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Lara Johnes</b> Sent you a message.
                                                <a href="#">View now</a>
                                            </div>
                                            <div class="timeline-date">3:18pm</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-primary">
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Richard Johnes</b> Added to wishlist:
                                                <a href="#">iPhone 5c</a>
                                            </div>
                                            <div class="timeline-date">8:15am</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-success">
                                                <span class="fa fa-info"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Admin</b> created invoice for:
                                                <a href="#">Mac Pro</a>
                                            </div>
                                            <div class="timeline-date">9:29pm</div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-icon bg-primary">
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="timeline-desc">
                                                <b>Douglas Adams</b> Added to wishlist:
                                                <a href="#">iPad 4</a>
                                            </div>
                                            <div class="timeline-date">3:05am</div>
                                        </li>
                                    </ol>

                                </div>
                                <div class="panel-footer text-center">
                                    <a href="#" class="btn btn-primary btn-sm btn-bordered"> View All </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse d-none">
                    <div class="navbar-btn btn-group">
                        <button data-toggle="dropdown" class="btn btn-md dropdown-toggle">
                            EN
                        </button>
                        <ul class="dropdown-menu pv5 animated animated-short fadeIn" role="menu">
                            <li>
                                <a href="javascript:void(0);"> Spanish </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Italian </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown dropdown-fuse">
                    <a href="#" class="dropdown-toggle fw600" data-toggle="dropdown">
                        <span class="hidden-xs">
                            <name>

                                <?= session()->get('userdata')['First_Name'] ?>

                            </name>
                        </span>
                        <span class="fa fa-caret-down hidden-xs mr15"></span>
                        <img src="/assets/img/avatars/profile_avatar.jpg" alt="avatar" class="mw55">
                    </a>
                    <ul class="dropdown-menu list-group keep-dropdown w250" role="menu">

                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-envelope-o"></span> Messages
                                <span class="label label-warning">54</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-users"></span> Friends
                                <span class="label label-warning">6</span>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-bell"></span> Notifications </a>
                        </li>
                        <li class="list-group-item">
                            <a href="#" class="animated animated-short fadeInUp">
                                <span class="fa fa-cogs"></span> Settings </a>
                        </li>
                        <li class="dropdown-footer text-center">
                            <a href="/logout" class="btn btn-primary btn-sm btn-bordered">
                                <span class="fa fa-power-off pr5"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </header>
        <!-- -------------- /Header  -------------- -->

        <!-- -------------- Sidebar  -------------- -->
        <aside id="sidebar_left" class="nano nano-light affix">

            <!-- -------------- Sidebar Left Wrapper  -------------- -->
            <div class="sidebar-left-content nano-content">

                <!-- -------------- Sidebar Header -------------- -->
                <header class="sidebar-header">

                    <!-- -------------- Sidebar - Author -------------- -->
                    <div class="sidebar-widget author-widget">
                        <div class="media">
                            <a class="media-left" href="#">
                                <img src="/assets/img/avatars/profile_avatar.jpg" class="img-responsive">
                            </a>

                            <div class="media-body">
                                <div class="media-author"><?= $UserName ?></div>

                                <div class="media-links">
                                    <a href="<?= base_url('/logout') ?>">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>



                </header>
                <!-- -------------- /Sidebar Header -------------- -->

                <!-- -------------- Sidebar Menu  -------------- -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt30">Menu</li>

                    <li class="active">
                        <a class="accordion-toggle menu-open" href="<?= base_url('/student') ?>">
                            <span class="fa fa-dashboard"></span>
                            <span class="sidebar-title">Dashboard</span>
                            <span class="caret"></span>
                        </a>
                    </li>
                    <li class="sidebar-label pt25">Tools</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-file-text-o"></span>
                            <span class="sidebar-title">My Courses</span>
                        </a>

                    </li>


                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-tasks"></span>
                            <span class="sidebar-title">My Assignments</span>
                        </a>

                    </li>

                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-pencil-square-o"></span>
                            <span class="sidebar-title">Exams</span>
                        </a>

                    </li>

                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-file"></span>
                            <span class="sidebar-title">Reports</span>
                        </a>

                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="fa fa-cog"></span>
                            <span class="sidebar-title">Setting</span>
                        </a>

                    </li>


                </ul>
                <!-- -------------- /Sidebar Menu  -------------- -->

                <!-- -------------- Sidebar Hide Button -------------- -->
                <div class="sidebar-toggler">
                    <a href="#">
                        <span class="fa fa-arrow-circle-o-left"></span>
                    </a>
                </div>
                <!-- -------------- /Sidebar Hide Button -------------- -->

            </div>
            <!-- -------------- /Sidebar Left Wrapper  -------------- -->

        </aside>
        <!-- -------------- /Sidebar -------------- -->

        <!-- -------------- Main Wrapper -------------- -->
        <section id="content_wrapper">

            <!-- -------------- Topbar Menu Wrapper -------------- -->

            <!-- -------------- /Topbar Menu Wrapper -------------- -->

            <!-- -------------- Topbar -------------- -->
            <header id="topbar" class="alt">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-icon">
                            <a href="dashboard1.html">
                                <span class="fa fa-home"></span>
                            </a>
                        </li>
                        <li class="breadcrumb-active">
                            <a href="dashboard1.html">Dashboard</a>
                        </li>
                        <li class="breadcrumb-link">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-current-item">Dashboard</li>
                    </ol>
                </div>
                <div class="topbar-right">
                    <div class="ib topbar-dropdown">
                        <label for="topbar-multiple" class="control-label">Reporting Period</label>
                        <select id="topbar-multiple" class="hidden">
                            <optgroup label="Filter By:">
                                <option value="1-1">Last 30 Days</option>
                                <option value="1-2" selected="selected">Last 60 Days</option>
                                <option value="1-3">Last Year</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="ml15 ib va-m" id="sidebar_right_toggle">
                        <div class="navbar-btn btn-group btn-group-number mv0">
                            <button class="btn btn-sm btn-default btn-bordered prn pln">
                                <i class="fa fa-bar-chart fs22 text-default"></i>
                            </button>

                        </div>
                    </div>
                </div>
            </header>
            <!-- -------------- /Topbar -------------- -->

            <!-- -------------- Content -------------- -->
            <section id="content" class="table-layout animated fadeIn bg-c">

                <!-- -------------- Column Center -------------- -->
                <div class="chute chute-center">

                    <!-- -------------- Quick Links -------------- -->
                    <div class="row">
                        <div class="col-sm-3 col-xl-3 ">
                            <div class="panel panel-tile">
                                <div class="panel-body ">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart0.png" class="img-responsive mauto" alt="" /></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">No Of Cources</h6>

                                            <h2 class="fs50 mt5 mbn">5</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart1.png" class="img-responsive mauto" alt="" /></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">SEMESTER</h6>

                                            <h2 class="fs50 mt5 mbn">5</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart2.png" class="img-responsive mauto" alt="" /></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">Attendance</h6>

                                            <h2 class="fs50 mt5 mbn">35</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xl-3">
                            <div class="panel panel-tile">
                                <div class="panel-body ">
                                    <div class="row pv10">
                                        <div class="col-xs-5 ph10"><img src="/assets/img/pages/clipart3.png" class="img-responsive mauto" alt="" /></div>
                                        <div class="col-xs-7 pl5">
                                            <h6 class="text-muted">Perfomance</h6>

                                            <h2 class="fs50 mt5 mbn">87%</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -------------- AllCP Info -------------- -->
                    
                        <div class="row">

                            <div class="col-md-6 allcp-grid">

                                <div class="panel mb50 upcoming-lec" id="p5" data-panel-remove="false" data-panel-color="false" data-panel-fullscreen="false" data-panel-title="false" data-panel-collapse="false" style="position: relative; opacity: 1; left: 0px; top: 0px;">
                                    <div class="heading">
                                        <h4>Upcoming Lectures</h4>
                                    </div>
                                    <div class="panel-body mtn p1">


                                        <div class="table-responsive">
                                            <table class="table table-striped">

                                                <thead class="bg-info">
                                                    <tr>
                                                        <th class="br-t-n pl0">no</th>
                                                        <th class="br-t-n hidden-xs">Subject</th>
                                                        <th class="br-t-n">teacher</th>
                                                        <th class="br-t-n">time</th>
                                                        <th class="br-t-n">status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl0">#1</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#2</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-danger ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#3</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-info ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>


                            </div>
                            <div class="col-md-6 allcp-grid">

                                <div class="panel mb50 upcoming-lec" id="p5" data-panel-remove="false" data-panel-color="false" data-panel-fullscreen="false" data-panel-title="false" data-panel-collapse="false" style="position: relative; opacity: 1; left: 0px; top: 0px;">
                                    <div class="heading">
                                        <h4>Pending Assignments</h4>
                                    </div>
                                    <div class="panel-body mtn p1">


                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead class="bg-dark">
                                                    <tr>
                                                        <th class="br-t-n pl0">no</th>
                                                        <th class="br-t-n hidden-xs">title</th>
                                                        <th class="br-t-n">subject</th>
                                                        <th class="br-t-n">last date</th>
                                                        <th class="br-t-n">status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="pl0">#1</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#2</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-danger ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#3</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-info ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="pl0">#4</td>
                                                        <td class="hidden-xs">ADA</td>
                                                        <td>prof. jenil</td>
                                                        <td>9am - 10am</td>
                                                        <td><a class="label label-success ml5">Done</a></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>




                    

                   

                </div>
                <!-- -------------- /Column Center -------------- -->

                <!-- -------------- Column Right -------------- -->
                <aside class="chute chute-right chute270 pn hidden" data-chute-height="match">

                    <!-- -------------- Activity Timeline -------------- -->
                    <ol class="timeline-list pl5 mt5">
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Genry</b> Added a new item to his store:
                                <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">1:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Lion</b> Added a new item to his store:
                                <a href="#">Notebook</a>
                            </div>
                            <div class="timeline-date">3:05am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created a new invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning">
                                <span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Laura</b> edited her work experience
                            </div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created a new invoice for:
                                <a href="#">Apple Inc.</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Genry</b> Added a new item to his store:
                                <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Lion</b> Added a new item to his store:
                                <a href="#">Watch</a>
                            </div>
                            <div class="timeline-date">9:35am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-system">
                                <span class="fa fa-fire"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created a new invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning">
                                <span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Laura</b> edited her work experience
                            </div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created a new invoice for:
                                <a href="#">Software</a>
                            </div>
                            <div class="timeline-date">4:15am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-warning">
                                <span class="fa fa-pencil"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Laura</b> edited her work experience
                            </div>
                            <div class="timeline-date">5:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-success">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Admin</b> created a new invoice for:
                                <a href="#">Apple Inc.</a>
                            </div>
                            <div class="timeline-date">7:45am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Genry</b> Added a new item to his store:
                                <a href="#">Ipod</a>
                            </div>
                            <div class="timeline-date">8:25am</div>
                        </li>
                        <li class="timeline-item">
                            <div class="timeline-icon bg-dark light">
                                <span class="fa fa-tags"></span>
                            </div>
                            <div class="timeline-desc">
                                <b>Lion</b> Added a new item to his store:
                                <a href="#">Watch</a>
                            </div>
                            <div class="timeline-date">9:35am</div>
                        </li>
                    </ol>

                </aside>
                <!-- -------------- /Column Right -------------- -->

            </section>
            <!-- -------------- /Content -------------- -->

            <!-- -------------- Page Footer -------------- -->
            <footer id="content-footer" class="">
                <div class="row">
                    <div class="col-md-6">
                        <span class="footer-legal">© 2015 All rights reserved. <a href="#">Therms of use</a> and <a href="#">Privacy policy</a></span>
                    </div>
                    <div class="col-md-6 text-right">
                        <span class="footer-meta"></span>
                        <a href="#content" class="footer-return-top">
                            <span class="fa fa-angle-up"></span>
                        </a>
                    </div>
                </div>
            </footer>
            <!-- -------------- /Page Footer -------------- -->

        </section>
        <!-- -------------- /Main Wrapper -------------- -->

        <!-- -------------- Sidebar Right -------------- -->

        <!-- -------------- /Sidebar Right -------------- -->

    </div>
    <!-- -------------- /Body Wrap  -------------- -->

    <!-- -------------- Scripts -------------- -->

    <!-- -------------- jQuery -------------- -->
    <script src="/assets/js/jquery/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- -------------- HighCharts Plugin -------------- -->
    <script src="/assets/js/plugins/highcharts/highcharts.js"></script>
    <script src="/assets/js/plugins/c3charts/d3.min.js"></script>
    <script src="/assets/js/plugins/c3charts/c3.min.js"></script>

    <!-- -------------- Simple Circles Plugin -------------- -->
    <script src="/assets/js/plugins/circles/circles.js"></script>

    <!-- -------------- Maps JSs -------------- -->
    <script src="/assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
    <script src="/assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script>

    <!-- -------------- FullCalendar Plugin -------------- -->
    <script src="/assets/js/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="/assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    <!-- -------------- Date/Month - Pickers -------------- -->
    <script src="/assets/allcp/forms/js/jquery-ui-monthpicker.min.js"></script>
    <script src="/assets/allcp/forms/js/jquery-ui-datepicker.min.js"></script>

    <!-- -------------- Magnific Popup Plugin -------------- -->
    <script src="/assets/js/plugins/magnific/jquery.magnific-popup.js"></script>

    <!-- -------------- Theme Scripts -------------- -->
    <script src="/assets/js/utility/utility.js"></script>
    <script src="/assets/js/demo/demo.js"></script>
    <script src="/assets/js/main.js"></script>

    <!-- -------------- Widget JS -------------- -->
    <script src="/assets/js/demo/widgets.js"></script>
    <script src="/assets/js/demo/widgets_sidebar.js"></script>
    <script src="/assets/js/pages/dashboard1.js"></script>
    <!-- -------------- /Scripts -------------- -->

</body>

</html>