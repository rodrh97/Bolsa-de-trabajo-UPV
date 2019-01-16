<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bolsa de Trabajo - UPV </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="../assets/pages/menu-search/css/component.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">
</head>


<body>
    <!-- Pre-loader start -->
    <!--<div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a>
                        <a href="index.html">
                            <img class="img-fluid" src="../assets/images/UP_Victoria.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                        <i class="ti-fullscreen"></i>
                                    </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <a href="#!">
                                        <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="ti-angle-down"></i>
                                    </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="#!">
                                                <i class="ti-settings"></i> Settings
                                            </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                                <i class="ti-user"></i> Profile
                                            </a>
                                    </li>
                                    <li>
                                        <a href="email-inbox.html">
                                                <i class="ti-email"></i> My Messages
                                            </a>
                                    </li>
                                    <li>
                                        <a href="auth-lock-screen.html">
                                                <i class="ti-lock"></i> Lock Screen
                                            </a>
                                    </li>
                                    <li>
                                        <a href="auth-normal-sign-in.html">
                                        <i class="ti-layout-sidebar-left"></i> Logout
                                    </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- search -->
                        <div id="morphsearch" class="morphsearch">
                            <form class="morphsearch-form">
                                <input class="morphsearch-input" type="search" placeholder="Search..." />
                                <button class="morphsearch-submit" type="submit">Search</button>
                            </form>
                            <div class="morphsearch-content">
                                <div class="dummy-column">
                                    <h2>People</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-4.jpg" class="img-radius" alt="Sara Soueidan" />
                                            <h3>Sara Soueidan</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-2.jpg" class="img-radius" alt="Shaun Dona" />
                                            <h3>Shaun Dona</h3>
                                        </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Popular</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-3.jpg" class="img-radius" alt="PagePreloadingEffect" />
                                            <h3>Page Preloading Effect</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-4.jpg" class="img-radius" alt="DraggableDualViewSlideshow" />
                                            <h3>Draggable Dual-View Slideshow</h3>
                                        </a>
                                </div>
                                <div class="dummy-column">
                                    <h2>Recent</h2>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-2.jpg" class="img-radius" alt="TooltipStylesInspiration" />
                                            <h3>Tooltip Styles Inspiration</h3>
                                        </a>
                                    <a class="dummy-media-object img-radius" href="#!">
                                            <img src="assets/images/avatar-3.jpg" class="img-radius" alt="NotificationStyles" />
                                            <h3>Notification Styles Inspiration</h3>
                                        </a>
                                </div>
                            </div>
                            <!-- /morphsearch-content -->
                            <span class="morphsearch-close"><i class="icofont icofont-search-alt-1"></i></span>
                        </div>
                        <!-- search end -->
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="card-block">
                                <div class="right-icon-control">
                                    <input type="text" class="form-control  search-text" placeholder="Search Friend" id="search-friends">
                                    <div class="form-icon">
                                        <i class="icofont icofont-search"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box" data-id="1" data-status="online" data-username="Josephin Doe" data-toggle="tooltip" data-placement="left" title="Josephin Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="2" data-status="online" data-username="Lary Doe" data-toggle="tooltip" data-placement="left" title="Lary Doe">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="3" data-status="online" data-username="Alice" data-toggle="tooltip" data-placement="left" title="Alice">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="4" data-status="online" data-username="Alia" data-toggle="tooltip" data-placement="left" title="Alia">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia</div>
                                    </div>
                                </div>
                                <div class="media userlist-box" data-id="5" data-status="online" data-username="Suzen" data-toggle="tooltip" data-placement="left" title="Suzen">
                                    <a class="media-left" href="#!">
                                        <img class="media-object img-radius" src="assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="live-status bg-success"></div>
                                    </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                        <i class="icofont icofont-rounded-left"></i> Josephin Doe
                    </a>
                </div>
                <div class="media chat-messages">
                    <a class="media-left photo-table" href="#!">
                        <img class="media-object img-radius img-radius m-t-5" src="assets/images/avatar-3.jpg" alt="Generic placeholder image">
                    </a>
                    <div class="media-body chat-menu-content">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="media chat-messages">
                    <div class="media-body chat-menu-reply">
                        <div class="">
                            <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media-right photo-table">
                        <a href="#!">
                            <img class="media-object img-radius img-radius m-t-5" src="assets/images/avatar-4.jpg" alt="Generic placeholder image">
                        </a>
                    </div>
                </div>
                <div class="chat-reply-box p-b-20">
                    <div class="right-icon-control">
                        <input type="text" class="form-control search-text" placeholder="Share Your Thoughts">
                        <div class="form-icon">
                            <i class="icofont icofont-paper-plane"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>John Doe</span>
                                        <span id="more-details">UX Designer<i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pcoded-search">
                                <span class="searchbar-toggle">  </span>
                                <div class="pcoded-search-box ">
                                    <input type="text" placeholder="Search">
                                    <span class="search-icon"><i class="ti-search" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Navigation</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu active pcoded-trigger">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="index.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.default">Default</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-ecommerce.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce">Ecommerce</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="dashboard-crm.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.crm">CRM</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-analytics.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.analytics">Analytics</span>
                                                <span class="pcoded-badge label label-info ">NEW</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dashboard-project.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.dash.project">Project</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout"></i><b>P</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.main">Page layouts</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">

                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext">Vertical</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-static.html">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.static-layout">Static Layout</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-header-fixed.html">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.header-fixed">Header Fixed</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-compact.html">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.compact">Compact</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-sidebar.html">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.vertical.sidebar-fixed">Sidebar Fixed</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.main">Horizontal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="menu-horizontal-static.html" target="_blank">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.static-layout">Static Layout</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-fixed.html" target="_blank">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-layout">Fixed layout</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon.html" target="_blank">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext"  data-i18n="nav.page_layout.horizontal.static-with-icon">Static With Icon</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class=" ">
                                                    <a href="menu-horizontal-icon-fixed.html" target="_blank">
                                                        <span class="pcoded-micon"><i class="icon-chart"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.page_layout.horizontal.fixed-with-icon">Fixed With Icon</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-bottom.html">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.bottom-menu">Bottom Menu</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-layout.html" target="_blank">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.box-layout">Box Layout</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="menu-rtl.html" target="_blank">
                                                <span class="pcoded-micon"><i class="icon-pie-chart"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.page_layout.rtl">RTL</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="navbar-light.html">
                                        <span class="pcoded-micon"><i class="ti-layout-cta-right"></i><b>N</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.navigate.main">Navigation</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-view-grid"></i><b>W</b></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.widget.main">Widget</span>
                                        <span class="pcoded-badge label label-danger">100+</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="widget-statistic.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.navigate.navbar">Statistic</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-data.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.navigate.navbar-inverse">Data</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Chart Widget</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="widget-chart-advance.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.navigate.navbar-with-elements">Advance Widgets</span>
                                                <span class="pcoded-badge label label-info">25+</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.ui-element">UI Element</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i><b>BC</b></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Basic Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="alert.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Alert</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="breadcrumb.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Breadcrumbs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="button.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.button">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="box-shadow.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.box-shadow">Box-Shadow</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="accordion.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.collapse–accordion">Accordion</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="generic-class.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.generic-class">Generic Class</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tabs.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.tabs">Tabs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="color.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.color">Color</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="label-badge.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Label Badge</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="progress-bar.html" data-i18n="nav.basic-components.progress-bar">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.label-badge">Progress Bar</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="preloader.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.pre-loader">Pre-Loader</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.list">List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tooltip.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.tooltip-popover">Tooltip And Popover</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="typography.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.typography">Typography</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="other.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.other">Other</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-crown"></i><b>AC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.advance-components.main">Advance Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="draggable.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.draggable">Draggable</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-grid.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.grid-stack">Grid Stack</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="light-box.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.light-box">Light Box</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="modal.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.modal">Modal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class=" ">
                                            <a href="notification.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.notifications">Notifications</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="notify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.advance-components.pnotify">PNOTIFY</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="rating.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.advance-components.rating">Rating</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="range-slider.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.advance-components.range-slider">Range Slider</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="slider.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.slider">Slider</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="syntax-highlighter.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.advance-components.syntax-highlighter">Syntax Highlighter</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="tour.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.tour">Tour</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="treeview.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.tree-view">Tree View</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="nestable.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.nestable">Nestable</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="toolbar.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.toolbar">Toolbar</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="x-editable.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.advance-components.x-editable">X-Editable</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-gift"></i><b>EC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.extra-components.main">Extra Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="session-timeout.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.extra-components.session-timeout">Session Timeout</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="session-idle-timeout.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.extra-components.session-idle-timeout">Session Idle Timeout</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="offline.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.extra-components.offline">Offline</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="animation.html">
                                        <span class="pcoded-micon"><i class="ti-reload rotate-refresh"></i><b>A</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.animations.main">Animations</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="sticky.html">
                                        <span class="pcoded-micon"><i class="ti-layers-alt"></i><b>S</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.sticky-notes.main">Sticky Notes</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-star"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.icons.main">Icons</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="icon-font-awesome.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.font-awesome">Font Awesome</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.themify">Themify</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-simple-line.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.simple-line-icon">Simple Line Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-ion.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.ion-icon">Ion Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-material-design.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.material-design">Material Design</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-icofonts.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.ico-fonts">Ico Fonts</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-weather.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.weather-icon">Weather Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-typicons.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.typicons">Typicons</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="icon-flags.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.icons.flags">Flags</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Forms</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Form Components</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="form-elements-component.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-components">Form Components</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-add-on.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-elements-add-on">Form-Elements-Add-On</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-elements-advance.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.form-components.form-elements-advance">Form-Elements-Advance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="form-validation.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.form-components.form-validation">Form Validation</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="form-picker.html">
                                        <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>FP</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-pickers.main">Form Picker</span>
                                        <span class="pcoded-badge label label-warning">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li class=" ">
                                    <a href="form-select.html">
                                        <span class="pcoded-micon"><i class="ti-shortcode"></i><b>FS</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-select.main">Form Select</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-masking.html">
                                        <span class="pcoded-micon"><i class="ti-write"></i><b>FM</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-masking.main">Form Masking</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="form-wizard.html">
                                        <span class="pcoded-micon"><i class="ti-archive"></i><b>F</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-wizard.main">Form Wizard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>R</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.ready-to-use.main">Ready To Use</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="ready-cloned-elements-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.cloned-elements-form">Cloned Elements Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-currency-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.currency-form">Currency Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-form">Booking Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-booking-multi-steps.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.booking-multi-steps-form">Booking Multi Steps Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-comment.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.comment-form">Comment Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-form-contact.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.contact-form">Contact Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-job-application-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.ready-to-use.job-application-form">Job Application Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-js-addition-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.jS-addition-form">JS Addition Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-login-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.login-form">Login Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-popup-modal-form.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.popup-modal-form">Popup Modal Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-registration-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.registration-form">Registration Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-review-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.review-form">Review Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-subscribe-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.subscribe-form">Subscribe Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-suggestion-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.suggestion-form">Suggestion Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="ready-tabs-form.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.ready-to-use.tabs-form">Tabs Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.tables">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-receipt"></i><b>B</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.main">Bootstrap Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="bs-basic-table.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.basic-table">Basic Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-sizing.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.sizing-table">Sizing Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-border.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.border-table">Border Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="bs-table-styling.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.bootstrap-table.styling-table">Styling Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-widgetized"></i><b>DT</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.data-table.main">Data Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-basic.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.basic-initialization">Basic Initialization</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-advance.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.advance-initialization">Advance Initialization</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-styling.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.styling">Styling</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-api.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.api">API</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ajax.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.ajax">Ajax</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-server-side.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.server-side">Server Side</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-plugin.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.plug-in">Plug-In</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-data-sources.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table.data-sources">Data Sources</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-loop"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.main">Data Table Extensions</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="dt-ext-autofill.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.autofill">AutoFill</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.main">Button</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class=" ">
                                                    <a href="dt-ext-basic-buttons.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.basic-button">Basic Button</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>

                                                <li class=" ">
                                                    <a href="dt-ext-buttons-html-5-data-export.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.button.html-data-export">Html-5 Data Export</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-col-reorder.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.col-reorder">Col Reorder</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-columns.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-columns">Fixed Columns</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-fixed-header.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.fixed-header">Fixed Header</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-key-table.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.key-table">Key Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-responsive.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.responsive">Responsive</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-row-reorder.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.row-recorder">Row Reorder</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-scroller.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"  data-i18n="nav.data-table-extensions.scroller">Scroller</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="dt-ext-select.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.data-table-extensions.select-tbl">Select Table</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="foo-table.html">
                                        <span class="pcoded-micon"><i class="ti-view-list-alt"></i><b>F</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.foo-table.main">FooTable</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-view-list"></i><b>HT</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.handson-table.main">Handson Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="handson-appearance.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.appearance">Appearance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-data-operation.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.data-operation">Data Operation</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-cols.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-columns">Rows Columns</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-columns-only.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.columns-Only">Columns Only</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-features.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-features">Cell Features</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-cell-types.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.cell-types">Cell Types</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-integrations.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.integrations">Integrations</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-rows-only.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.rows-Only">Rows Only</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="handson-utilities.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.handson-table.utilities">Utilities</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="editable-table.html">
                                        <span class="pcoded-micon"><i class="ti-write"></i><b>E</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.editable-table.main">Editable Table</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.chart-and-maps">Chart And Maps</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-bar-chart-alt"></i><b>C</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.charts.main">Charts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="chart-google.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.google-chart">Google Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-echart.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.echarts">Echarts</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-chartjs.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.chartjs">ChartJs</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.list-chart">List Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-float.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.float-chart">Float Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-knob.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.know-chart">Knob chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-morris.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.morris-chart">Morris Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-nvd3.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.nvd3-chart">Nvd3 Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-peity.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.peity-chart">Peity Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-radial.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.radial chart">Radial Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-rickshaw.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.rickshaw-chart">Rickshaw Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-sparkline.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.sparkline-chart">Sparkline Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="chart-c3.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.charts.c3-chart">C3 Chart</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-map-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.maps.main">Maps</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="map-google.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maps.google-maps">Google Maps</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-vector.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maps.vector-map">Vector Maps</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="map-api.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maps.google-map-api">Google Map Search API</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="location.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maps.location">Location</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="landingpage/index.html" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-mobile"></i><b>LP</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.landing-page.main">Landing Page</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.pages">Pages</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-id-badge"></i><b>A</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.authentication.main">Authentication</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="auth-normal-sign-in.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.login-bg-image">Login With BG Image</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-icon">Login With Social Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-in-social-header-footer.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.login-soc-h-f">Login Social With Header And Footer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-normal-sign-in-header-footer.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.login-h-f">Login With Header And Footer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.registration-bg-image">Registration BG Image</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-icon">Registration Social Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-social-header-footer.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.registration-soc-h-f">Registration Social With Header And Footer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-sign-up-header-footer.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.registration-h-f">Registration With Header And Footer</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-multi-step-sign-up.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.multi-step-registration">Multi Step Registration</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-reset-password.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.forgot-password">Forgot Password</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-lock-screen.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.lock-screen">Lock Screen</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="auth-modal.html" target="_blank">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.authentication.modal">Modal</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-settings"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.maintenance.main">Maintenance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="error.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maintenance.error">Error</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="comming-soon.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maintenance.comming-soon">Comming Soon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="offline-ui.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.maintenance.offline-ui">Offline UI</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-user"></i><b>UP</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.user-profile.main">User Profile</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="timeline.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline">Timeline</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="timeline-social.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.user-profile.timeline-social">Timeline Social</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-profile.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.user-profile.user-profile">User Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="user-card.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.user-profile.user-card">User Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-shopping-cart"></i><b>E</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.e-commerce.main">E-Commerce</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="product.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.product">Product</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-list">Product List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-edit.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-edit">Product Edit</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-detail.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-detail">Product Detail</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-cart.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.product-card">Product Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="product-payment.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.e-commerce.credit-card-form">Credit Card Form</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-email"></i><b>E</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.email.main">Email</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="email-compose.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.email.compose-mail">Compose Email</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-inbox.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.email.inbox">Inbox</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="email-read.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.email.read-read-mail">Read Mail</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-email"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.email.email-template.main">Email Template</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="email-templates/email-welcome.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.email.email-template.welcome-email">Welcome Email</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-password.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"  data-i18n="nav.email.email-template.reset-password">Reset Password</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-newsletter.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext"  data-i18n="nav.email.email-template.newsletter-email">Newsletter Email</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-launch.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.email.email-template.app-launch">App Launch</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="email-templates/email-activation.html">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.email.email-template.activation-code">Activation Code</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.app">App</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class=" ">
                                    <a href="chat.html">
                                        <span class="pcoded-micon"><i class="ti-comments"></i><b>C</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.chat.main">Chat</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-dribbble"></i><b>S</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.social.main">Social</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="fb-wall.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.social.fb-wall">Wall</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="message.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.social.messages">Messages</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-check-box"></i><b>T</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.task.main">Task</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="task-list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.task.task-list">Task List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-board.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.task.task-board">Task Board</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="task-detail.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.task.task-detail">Task Detail</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="issue-list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.task.issue list">Issue List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-notepad"></i><b>T</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.to-do.main">To-Do</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="todo.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.to-do.todo">To-Do</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="notes.html" data-i18n="nav.to-do.notes">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext">Notes</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-gallery"></i><b>G</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.gallery.main">Gallery</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="gallery-grid.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.gallery.gallery-grid">Gallery-Grid</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-masonry.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.gallery.masonry-gallery">Masonry Gallery</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="gallery-advance.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.gallery.advance-gallery">Advance Gallery</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-search"></i><b>S</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.search.main">Search</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="search-result.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.search.simple-search">Simple Search</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="search-result2.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.search.grouping-search">Grouping Search</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-medall-alt"></i><b>JS</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.job-search.main">Job Search</span>
                                        <span class="pcoded-badge label label-danger">NEW</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="job-card-view.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.job-search.card-view">Card View</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-details.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.job-search.job-detailed">Job Detailed</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-find.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.job-search.job-find">Job Find</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="job-panel-view.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.job-search.job-panel-view">Job Panel View</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.extension">Extension</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-pencil-alt"></i><b>E</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.editor.main">Editor</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="ck-editor.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.editor.ck-editor">CK-Editor</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="wysiwyg-editor.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.editor.wysiwyg-editor">WYSIWYG Editor</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="ace-editor.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.editor.ace-editor">Ace Editor</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                        <li class="">
                                            <a href="long-press-editor.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.editor.long-press-editor">Long Press Editor</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-media-right"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.invoice.main">Invoice</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="invoice.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.invoice.invoice">Invoice</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-summary.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-summery">Invoice Summary</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="invoice-list.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.invoice.invoice-list">Invoice List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-calendar"></i><b>EC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.event-calendar.main">Event Calendar</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="event-full-calender.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.full-calendar.full-calendar">Full Calendar</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="event-clndr.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.clnder.clnder">CLNDER</span>
                                                <span class="pcoded-badge label label-info">NEW</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="image-crop.html">
                                        <span class="pcoded-micon"><i class="ti-cut"></i><b>IC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.image-cropper.main">Image Cropper</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="file-upload.html">
                                        <span class="pcoded-micon"><i class="ti-cloud-up"></i><b>FU</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.file-upload.main">File Upload</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-world"></i><b>I</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.internationalize.main">Internationalize</span>
                                        <span class="pcoded-badge label label-danger">HOT</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="internationalization/internationalization-after-init.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.internationalize.after-init">After Init</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-fallback.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.internationalize.fallback">Fallback</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-on-init.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.internationalize.on-int">On Init</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-resources.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.internationalize.resources">Resources</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="internationalization/internationalization-xhr-backend.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.internationalize.xhr-backend">XHR Backend</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="change-loges.html">
                                        <span class="pcoded-micon"><i class="ti-list"></i><b>CL</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.change-loges.main">Change Loges</span>
                                        <span class="pcoded-badge label label-warning">1.0</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Other</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Menu Levels</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-21">Menu Level 2.1</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="pcoded-hasmenu ">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-direction-alt"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.main">Menu Level 2.2</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                            <ul class="pcoded-submenu">
                                                <li class="">
                                                    <a href="javascript:void(0)">
                                                        <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-22.menu-level-31">Menu Level 3.1</span>
                                                        <span class="pcoded-mcaret"></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.menu-levels.menu-level-23">Menu Level 2.3</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul>
                                </li>
                                <li class="">
                                    <a href="javascript:void(0)" class="disabled">
                                        <span class="pcoded-micon"><i class="ti-na"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.disabled-menu.main" >Disabled Menu</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sample-page.html">
                                        <span class="pcoded-micon"><i class="ti-layout-sidebar-left"></i><b>S</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.sample-page.main">Sample Page</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.support">Support</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="http://html.codedthemes.com/guru-able/doc" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-file"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.documentation.main">Documentation</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" target="_blank">
                                        <span class="pcoded-micon"><i class="ti-layout-list-post"></i><b>SI</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.submit-issue.main">Submit Issue</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">Use space</span>
                                                        <h4>49/50GB</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Get more space
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Revenue</span>
                                                        <h4>$23,589</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Last 24 hours
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Fixed issue</span>
                                                        <h4>45</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked from microsoft
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">Followers</span>
                                                        <h4>+562</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Just update
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- Statistics Start -->
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statistics</h5>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:330px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">

                                                <div class="card card-blue total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>4000</h4>
                                                            <p class="m-0">Total Sales</p>
                                                        </div>
                                                        <span class="label bg-c-blue value-badges">12%</span>
                                                    </div>
                                                    <canvas id="total-value-graph-1" class="total-value-graph" height="100"></canvas>
                                                </div>

                                                <div class="card card-pink total-card">
                                                    <div class="card-block">
                                                        <div class="text-left">
                                                            <h4>489</h4>
                                                            <p class="m-0">Total Comment</p>
                                                        </div>
                                                        <span class="label bg-c-pink value-badges">15%</span>
                                                    </div>
                                                    <canvas id="total-value-graph-2" class="total-value-graph" height="100"></canvas>
                                                </div>

                                            </div>
                                            <!-- Statistics End -->
                                            <!-- statstic card start -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Statistics</h5>
                                                            <p class="p-t-10 m-b-0 text-c-blue">Compared to last week</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="icofont icofont-presentation-alt st-icon bg-c-blue"></i>

                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">5,456</h3>
                                                            <i class="icofont icofont-long-arrow-up f-30 text-c-green"></i>
                                                            <span class="f-right">23%</span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <!-- statstic card start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>Unique visitor</h5>
                                                            <p class="p-t-10 m-b-0 text-c-pink">55% from last 28 hours</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="icofont icofont-users-social st-icon bg-c-pink txt-lite-color"></i>

                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">3,874</h3>
                                                            <i class="icofont icofont-long-arrow-down text-c-pink f-30 "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <!-- statstic card start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card widget-statstic-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>New orders</h5>
                                                            <p class="p-t-10 m-b-0 text-c-yellow">54% From last month</p>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <i class="icofont icofont-chart-line st-icon bg-c-yellow"></i>

                                                        <div class="text-left">
                                                            <h3 class="d-inline-block">5,456</h3>
                                                            <i class="icofont icofont-long-arrow-up text-c-green f-30 "></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statstic card end -->
                                            <div class="col-md-12">
                                                <div class="card email-sent-card">
                                                    <div class="card-header ">
                                                        <div class="card-header-left ">
                                                            <h5>Product Sale</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="email-sent" style="max-width:100%;height:400px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Email Sent End -->
                                            <!-- Data widget start -->
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Time spent : project &amp; task</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project & Task</th>
                                                                        <th>Time Spents</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">U</h6>
                                                                                <p class="d-inline-block m-l-20">UI Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">2 : 40</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-pink d-inline-block text-center">R</h6>
                                                                                <p class="d-inline-block m-l-20">Redesign Android App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">6 : 40</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                                                <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">3 : 48</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">6 : 40</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>To do list</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <button class="btn btn-card btn-primary">Add task </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span class="todo-main"><span>Schedule Meeting with Compnes </span><span class="label bg-c-green m-l-10 f-10">2 week</span></span>
                                                                    <span class="task-card-img m-l-40 d-block">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span class="todo-main"><span>Meeting With HOD's and borad</span></span><span class="text-muted m-l-40 d-block">23 january 2003</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span class="todo-main"><span>Create template, admin with responsive</span><span class="label bg-c-pink m-l-10">2 week</span></span>
                                                                    <span class="task-card-img m-l-40 d-block">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span class="todo-main"><span>Meeting With HOD's and borad</span></span>
                                                                    <span class="text-muted m-l-40 d-block">23 january 2003</span>
                                                                    <span class="task-card-img m-l-40 d-block">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                    </span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Data widget End -->
                                            <!-- Weather Start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card ">
                                                    <div class="card-header">
                                                        <h5>Weather Update</h5>
                                                    </div>
                                                    <div class="card-block weather-update">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <svg version="1.1" id="cloudSun" style="height:160px;" class="climacon climacon_cloudSun" viewBox="15 15 70 70">
                                                                    <clipPath id="cloudFillClip">
                                                                        <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"/>
                                                                    </clipPath>
                                                                    <clipPath id="sunCloudFillClip">
                                                                        <path d="M15,15v70h70V15H15z M57.945,49.641c-4.417,0-8-3.582-8-7.999c0-4.418,3.582-7.999,8-7.999s7.998,3.581,7.998,7.999C65.943,46.059,62.362,49.641,57.945,49.641z"/>
                                                                    </clipPath>
                                                                    <g class="climacon_iconWrap climacon_cloudSun-iconWrap">
                                                                        <g clip-path="url(#cloudFillClip)">
                                                                            <g class="climacon_componentWrap climacon_componentWrap-sun climacon_componentWrap-sun_cloud"  >
                                                                                <g class="climacon_componentWrap climacon_componentWrap_sunSpoke">
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-orth" d="M80.029,43.611h-3.998c-1.105,0-2-0.896-2-1.999s0.895-2,2-2h3.998c1.104,0,2,0.896,2,2S81.135,43.611,80.029,43.611z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,30.3c-0.781,0.781-2.049,0.781-2.828,0c-0.781-0.781-0.781-2.047,0-2.828l2.828-2.828c0.779-0.781,2.047-0.781,2.828,0c0.779,0.781,0.779,2.047,0,2.828L72.174,30.3z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,25.614c-1.105,0-2-0.896-2-2v-3.999c0-1.104,0.895-2,2-2c1.104,0,2,0.896,2,2v3.999C60.033,24.718,59.135,25.614,58.033,25.614z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,30.3l-2.827-2.828c-0.781-0.781-0.781-2.047,0-2.828c0.78-0.781,2.047-0.781,2.827,0l2.827,2.828c0.781,0.781,0.781,2.047,0,2.828C45.939,31.081,44.673,31.081,43.892,30.3z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M42.033,41.612c0,1.104-0.896,1.999-2,1.999h-4c-1.104,0-1.998-0.896-1.998-1.999s0.896-2,1.998-2h4C41.139,39.612,42.033,40.509,42.033,41.612z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M43.892,52.925c0.781-0.78,2.048-0.78,2.827,0c0.781,0.78,0.781,2.047,0,2.828l-2.827,2.827c-0.78,0.781-2.047,0.781-2.827,0c-0.781-0.78-0.781-2.047,0-2.827L43.892,52.925z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M58.033,57.61c1.104,0,2,0.895,2,1.999v4c0,1.104-0.896,2-2,2c-1.105,0-2-0.896-2-2v-4C56.033,58.505,56.928,57.61,58.033,57.61z"/>
                                                                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunSpoke climacon_component-stroke_sunSpoke-north" d="M72.174,52.925l2.828,2.828c0.779,0.78,0.779,2.047,0,2.827c-0.781,0.781-2.049,0.781-2.828,0l-2.828-2.827c-0.781-0.781-0.781-2.048,0-2.828C70.125,52.144,71.391,52.144,72.174,52.925z"/>
                                                                                </g>
                                                                                <g class="climacon_wrapperComponent climacon_wrapperComponent-sunBody" clip-path="url(#sunCloudFillClip)">
                                                                                    <circle class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" cx="58.033" cy="41.612" r="11.999"/>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                        <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                                                                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M44.033,65.641c-8.836,0-15.999-7.162-15.999-15.998c0-8.835,7.163-15.998,15.999-15.998c6.006,0,11.233,3.312,13.969,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.26,65.641,47.23,65.641,44.033,65.641z"/>
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="col-md-12 text-center">
                                                                <h2 class="p-b-30 f-w-400">23 ° C</h2>
                                                            </div>
                                                        </div>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Weather End -->
                                            <!-- Weather Start -->
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card ">
                                                    <div class="card-header ">
                                                        <div class="card-header-left ">
                                                            <h5>Browser Status</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block ">
                                                        <div class="browser-card p-b-15 ">
                                                            <p class="d-inline-block m-0 ">Google Crome</p>
                                                            <button class="btn bg-c-blue btn-round float-right btn-browser ">50%</button>
                                                        </div>
                                                        <div class="browser-card b-t-default p-t-15 p-b-15 ">
                                                            <p class="d-inline-block m-0 ">Mozila Firefox</p>
                                                            <button class="btn bg-c-pink btn-round float-right btn-browser ">12%</button>
                                                        </div>
                                                        <div class="browser-card b-t-default p-t-15 p-b-15 ">
                                                            <p class="d-inline-block m-0 ">Apple Safari</p>
                                                            <button class="btn bg-c-yellow btn-round float-right btn-browser ">23%</button>
                                                        </div>
                                                        <div class="browser-card b-t-default p-t-15 p-b-15 ">
                                                            <p class="d-inline-block m-0 ">Internet Explorer</p>
                                                            <button class="btn bg-c-green btn-round float-right btn-browser ">17%</button>
                                                        </div>
                                                        <div class="browser-card b-t-default p-t-15 p-b-15 ">
                                                            <p class="d-inline-block m-0 ">Opera Mini</p>
                                                            <button class="btn bg-c-yellow btn-round float-right btn-browser ">07%</button>
                                                        </div>
                                                        <div class="browser-card b-t-default p-t-15">
                                                            <p class="d-inline-block m-0 ">Microsoft Edge</p>
                                                            <button class="btn bg-c-yellow btn-round float-right btn-browser ">28%</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Weather End -->
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card card-contact-box ">
                                                    <div class="card-block ">
                                                        <div class="card-contain text-center ">
                                                            <img src="assets/images/avatar-2.jpg" alt=" ">
                                                            <h6 class="f-w-400 f-20 p-b-5 m-0 p-t-15 ">Gregory Johan</h6>
                                                            <a href="#! ">gregory.johan@demo.com</a>
                                                            <p class="text-muted p-b-25 m-0 p-t-5 ">Software Developer</p>
                                                            <div class="contain-card p-t-30 p-b-10 ">
                                                                <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-5"></a>
                                                                <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-5"></a>
                                                                <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-5"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="b-t-default">
                                                        <div class="row m-0">
                                                            <div class="col-6 f-btn text-center b-r-default p-t-15 p-b-15 ">
                                                                <a href="#!">
                                                                    <i class="icofont icofont-ui-message text-muted m-r-10 "></i>
                                                                    <p class="text-muted m-0 text-uppercase d-inline-block ">Messages</p>
                                                                </a>
                                                            </div>
                                                            <div class="col-6 f-btn text-center p-t-15 p-b-15 ">
                                                                <a href="#!">
                                                                    <i class="icofont icofont-user text-muted m-r-10 "></i>
                                                                    <p class="text-muted m-0 text-uppercase d-inline-block ">View Profile</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project overview Start -->
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card ">
                                                    <div class="card-header ">
                                                        <div class="card-header-left ">
                                                            <h5>Recent Comments</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-0">
                                                        <div class="card-comment ">
                                                            <div class="card-block-small">
                                                                <img class="img-radius img-50" src="assets/images/avatar-4.jpg" alt="user-1">
                                                                <div class="comment-desc">
                                                                    <h6>Luciano Durk</h6>
                                                                    <p class="text-muted ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                                                    <div class="comment-btn">
                                                                        <button class="btn bg-c-blue btn-round btn-comment ">Action</button>
                                                                    </div>
                                                                    <div class="date">
                                                                        <i>04 October 2015</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-comment ">
                                                            <div class="card-block-small">
                                                                <img class="img-radius img-50" src="assets/images/avatar-3.jpg" alt="user-4">
                                                                <div class="comment-desc">
                                                                    <h6>John Doe</h6>
                                                                    <p class="text-muted ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                                                    <div class="comment-btn">
                                                                        <button class="btn bg-c-pink btn-round btn-comment ">Approved</button>
                                                                    </div>
                                                                    <div class="date">
                                                                        <i>16 December 2015</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-comment ">
                                                            <div class="card-block-small">
                                                                <img class="img-radius img-50" src="assets/images/avatar-4.jpg" alt="user-2">
                                                                <div class="comment-desc">
                                                                    <h6>Planner Board</h6>
                                                                    <p class="text-muted ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                                                    <div class="comment-btn">
                                                                        <button class="btn bg-c-green btn-round btn-comment ">Rejected</button>
                                                                    </div>
                                                                    <div class="date">
                                                                        <i>12 Saptember 2015</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-comment ">
                                                            <div class="card-block-small">
                                                                <img class="img-radius img-50" src="assets/images/avatar-2.jpg" alt="user-3">
                                                                <div class="comment-desc">
                                                                    <h6>Luciano Durk</h6>
                                                                    <p class="text-muted ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                                                                    <div class="comment-btn">
                                                                        <button class="btn bg-c-pink btn-round btn-comment ">Approved</button>
                                                                    </div>
                                                                    <div class="date">
                                                                        <i>20 October 2015</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-4">
                                                <div class="card fb-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-facebook"></i>
                                                        <div class="d-inline-block">
                                                            <h5>facebook</h5>
                                                            <span>blog page timeline</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Active</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Comment</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card dribble-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-dribbble"></i>
                                                        <div class="d-inline-block">
                                                            <h5>dribble</h5>
                                                            <span>Product page analysis</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Live</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>23</h2>
                                                                <p class="text-muted">Message</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card twitter-card">
                                                    <div class="card-header">
                                                        <i class="icofont icofont-social-twitter"></i>
                                                        <div class="d-inline-block">
                                                            <h5>twitter</h5>
                                                            <span>current new timeline</span>
                                                        </div>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div class="row">
                                                            <div class="col-6 b-r-default">
                                                                <h2>25</h2>
                                                                <p class="text-muted">new tweet</p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h2>450+</h2>
                                                                <p class="text-muted">Follower</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Project overview End -->
                                        </div>
                                    </div>
                                </div>

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="../bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../bower_components/modernizr/js/modernizr.js"></script>
    <!-- am chart -->
    <script src="../assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="../assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="../bower_components/chart.js/js/Chart.js"></script>
    <!-- Todo js -->
    <script type="text/javascript" src="../assets/pages/todo/todo.js "></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="../bower_components/i18next/js/i18next.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="text/javascript" src="../bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="text/javascript" src="../bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="../assets/js/SmoothScroll.js"></script>
    <script src="../assets/js/pcoded.min.js"></script>
    <script src="../assets/js/demo-12.js"></script>
    <script src="../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="../assets/js/script.min.js"></script>
</body>

</html>
