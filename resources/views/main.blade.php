@extends('layout')

@section('content')
<body class="theme-default main-menu-animated">

<div id="main-wrapper">


    <!-- 2. $MAIN_NAVIGATION ===========================================================================

        Main navigation
    -->
    <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <!-- Main menu toggle -->
        <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>

        <div class="navbar-inner">
            <!-- Main navbar header -->
            <div class="navbar-header">

                <!-- Logo -->


                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">First item</a></li>
                                <li><a href="#">Second item</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Third item</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">


                            <li class="nav-icon-btn nav-icon-btn-danger dropdown">
                                <a href="#notifications" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">5</span>
                                    <i class="nav-icon fa fa-bullhorn"></i>
                                    <span class="small-screen-text">Notifications</span>
                                </a>

                                <script>
                                    init.push(function () {
                                        $('#main-navbar-notifications').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-notifications no-padding" style="width: 300px">
                                    <div class="notifications-list" id="main-navbar-notifications">

                                        <div class="notification">
                                            <div class="notification-title text-danger">SYSTEM</div>
                                            <div class="notification-description"><strong>Error 500</strong>: Syntax error in index.php at line <strong>461</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-danger"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-info">STORE</div>
                                            <div class="notification-description">You have <strong>9</strong> new orders.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-truck bg-info"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-default">CRON DAEMON</div>
                                            <div class="notification-description">Job <strong>"Clean DB"</strong> has been completed.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-clock-o bg-default"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-success">SYSTEM</div>
                                            <div class="notification-description">Server <strong>up</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-success"></div>
                                        </div> <!-- / .notification -->

                                        <div class="notification">
                                            <div class="notification-title text-warning">SYSTEM</div>
                                            <div class="notification-description"><strong>Warning</strong>: Processor load <strong>92%</strong>.</div>
                                            <div class="notification-ago">12h ago</div>
                                            <div class="notification-icon fa fa-hdd-o bg-warning"></div>
                                        </div> <!-- / .notification -->

                                    </div> <!-- / .notifications-list -->
                                    <a href="#" class="notifications-link">MORE NOTIFICATIONS</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <li class="nav-icon-btn nav-icon-btn-success dropdown">
                                <a href="#messages" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="label">10</span>
                                    <i class="nav-icon fa fa-envelope"></i>
                                    <span class="small-screen-text">Income messages</span>
                                </a>

                                <!-- MESSAGES -->

                                <!-- Javascript -->
                                <script>
                                    init.push(function () {
                                        $('#main-navbar-messages').slimScroll({ height: 250 });
                                    });
                                </script>
                                <!-- / Javascript -->

                                <div class="dropdown-menu widget-messages-alt no-padding" style="width: 300px;">
                                    <div class="messages-list" id="main-navbar-messages">

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/3.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Michelle Bortz</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/4.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Timothy Owens</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/5.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                                            <div class="message-description">
                                                from <a href="#">Denise Steiner</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                        <div class="message">
                                            <img src="html/assets/demo/avatars/2.jpg" alt="" class="message-avatar">
                                            <a href="#" class="message-subject">Lorem ipsum dolor sit amet.</a>
                                            <div class="message-description">
                                                from <a href="#">Robert Jang</a>
                                                &nbsp;&nbsp;·&nbsp;&nbsp;
                                                2h ago
                                            </div>
                                        </div> <!-- / .message -->

                                    </div> <!-- / .messages-list -->
                                    <a href="#" class="messages-link">MORE MESSAGES</a>
                                </div> <!-- / .dropdown-menu -->
                            </li>
                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->

                            <li>
                                <form class="navbar-form pull-left">
                                    <input type="text" class="form-control" placeholder="Search">
                                </form>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                    <img src="html/assets/demo/avatars/1.jpg" alt="">
                                    <span>{{session('user')}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><span class="label label-warning pull-right">New</span>Profile</a></li>
                                    <li><a href="#"><span class="badge badge-primary pull-right">New</span>Account</a></li>
                                    <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / .navbar-nav -->
                    </div> <!-- / .right -->
                </div>
            </div> <!-- / #main-navbar-collapse -->
        </div> <!-- / .navbar-inner -->
    </div> <!-- / #main-navbar -->
    <!-- /2. $END_MAIN_NAVIGATION -->


    <!-- 4. $MAIN_MENU =================================================================================

            Main menu

            Notes:
            * to make the menu item active, add a class 'active' to the <li>
              example: <li class="active">...</li>
            * multilevel submenu example:
                <li class="mm-dropdown">
                  <a href="#"><span class="mm-text">Submenu item text 1</span></a>
                  <ul>
                    <li>...</li>
                    <li class="mm-dropdown">
                      <a href="#"><span class="mm-text">Submenu item text 2</span></a>
                      <ul>
                        <li>...</li>
                        ...
                      </ul>
                    </li>
                    ...
                  </ul>
                </li>
    -->
    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <div class="menu-content top" id="menu-content-demo">
                <!-- Menu custom content demo
                     CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
                     Javascript: html/assets/demo/demo.js
                 -->
                <div>
                    <div class="text-bg"><span class="text-slim">Welcome,</span> <span class="text-semibold">{{session('user')}}</span></div>

                    <img src="html/assets/demo/avatars/1.jpg" alt="" class="">
                    <div class="btn-group">
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-envelope"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-user"></i></a>
                        <a href="#" class="btn btn-xs btn-primary btn-outline dark"><i class="fa fa-cog"></i></a>
                        <a href="#" class="btn btn-xs btn-danger btn-outline dark"><i class="fa fa-power-off"></i></a>
                    </div>
                    <a href="#" class="close">&times;</a>
                </div>
            </div>
            <ul class="navigation">
                <li>
                    <a href="index.html"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Layouts</span><span class="label label-warning">Updated</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Grid</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Stat panels</span></a>
                </li>
                <li>
                    <a href="widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Widgets</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text">UI elements</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Buttons</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-typography.html"><span class="mm-text">Typography</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-modals.html"><span class="mm-text">Modals</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-components.html"><span class="mm-text">Components</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-panels.html"><span class="mm-text">Panels</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-icons.html"><span class="mm-text">Icons</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Form components</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Layouts</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-general.html"><span class="mm-text">General</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Advanced</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Pickers</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-validation.html"><span class="mm-text">Validation</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-editors.html"><span class="mm-text">Editors</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text">Tables</span></a>
                </li>
                <li>
                    <a href="charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Charts</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-success">16</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="pages-search.html"><span class="mm-text">Search results</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-faq.html"><span class="mm-text">FAQ</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-timeline.html"><span class="mm-text">Timeline</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signin-alt.html"><span class="mm-text">Sign In Alt</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-invoice.html"><span class="mm-text">Invoice</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-404.html"><span class="mm-text">Error 404</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-500.html"><span class="mm-text">Error 500</span></a>
                        </li>
                        <li class="mm-dropdown">
                            <a href="#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span></a>
                            <ul>
                                <li>
                                    <a tabindex="-1" href="pages-inbox.html"><span class="mm-text">Inbox</span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="pages-show-email.html"><span class="mm-text">Show message</span></a>
                                </li>
                                <li>
                                    <a tabindex="-1" href="pages-new-email.html"><span class="mm-text">New message</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a tabindex="-1" href="pages-blank.html"><span class="mm-text">Blank page</span></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="complete-ui.html"><i class="menu-icon fa fa-briefcase"></i><span class="mm-text">Complete UI</span></a>
                </li>
                <li>
                    <a href="color-builder.html"><i class="menu-icon fa fa-tint"></i><span class="mm-text">Color Builder</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Menu levels</span><span class="badge badge-primary">6</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.2</span></a>
                        </li>
                        <li class="mm-dropdown">
                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
                            <ul>
                                <li>
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.1</span></a>
                                </li>
                                <li class="mm-dropdown">
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                                    <ul>
                                        <li class="mm-dropdown">
                                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.1</span></a>
                                            <ul>
                                                <li>
                                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 4.1</span></a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.2</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul> <!-- / .navigation -->
            <div class="menu-content">
                <a href="pages-invoice.html" class="btn btn-primary btn-block btn-outline dark">Create Invoice</a>
            </div>
        </div> <!-- / #main-menu-inner -->
    </div> <!-- / #main-menu -->
    <!-- /4. $MAIN_MENU -->

    <div id="content-wrapper">
        <ul class="breadcrumb breadcrumb-page">
            <div class="breadcrumb-label text-light-gray">You are here: </div>
            <li><a href="#">Home</a></li>
            <li class="active"><a href="#">Dashboard</a></li>
        </ul>
        <div class="page-header">

            <div class="row">
                <!-- Page header, center on small screens -->
                <h1 class="col-xs-12 col-sm-4 text-center text-left-sm"><i class="fa fa-dashboard page-header-icon"></i>&nbsp;&nbsp;Dashboard</h1>

                <div class="col-xs-12 col-sm-8">
                    <div class="row">
                        <hr class="visible-xs no-grid-gutter-h">
                        <!-- "Create project" button, width=auto on desktops -->
                        <div class="pull-right col-xs-12 col-sm-auto"><a href="#" class="btn btn-primary btn-labeled" style="width: 100%;"><span class="btn-label icon fa fa-plus"></span>Create project</a></div>

                        <!-- Margin -->
                        <div class="visible-xs clearfix form-group-margin"></div>

                        <!-- Search field -->
                        <form action="" class="pull-right col-xs-12 col-sm-6">
                            <div class="input-group no-margin">
                                <span class="input-group-addon" style="border:none;background: #fff;background: rgba(0,0,0,.05);"><i class="fa fa-search"></i></span>
                                <input type="text" placeholder="Search..." class="form-control no-padding-hr" style="border:none;background: #fff;background: rgba(0,0,0,.05);">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- / .page-header -->



        <!-- /9. $UNIQUE_VISITORS_STAT_PANEL -->

        <!-- Page wide horizontal line -->



        <!-- Page wide horizontal line -->



    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->
</body>
@endsection
