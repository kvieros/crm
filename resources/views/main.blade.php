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
                <!-- Main navbar toggle -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

            </div> <!-- / .navbar-header -->

            <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                <div>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="#">Home</a>
                        </li>
                    </ul>

                    <div class="right clearfix">
                        <ul class="nav navbar-nav pull-right right-navbar-nav">


                            <!-- /3. $END_NAVBAR_ICON_BUTTONS -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">

                                    <span>Hello {{session('user')}}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Account</a></li>
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
    <div id="main-menu" role="navigation">
        <div id="main-menu-inner">
            <div class="menu-content top" id="menu-content-demo">
                <!-- Menu custom content demo
                     CSS:        styles/pixel-admin-less/demo.less or styles/pixel-admin-scss/_demo.scss
                     Javascript: html/assets/demo/demo.js
                 -->

                    <div class="text-bg"><span class="text-left">Welcome </span> <span class="text-semibold">{{session('user')}}</span></div>

            </div>
            <ul class="navigation">
                <li>
                    <a href="main"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Customers</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Add customer</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">List</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Groups</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Transaction</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">New Deposit</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">New Expense</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Transfer</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">View Transaction</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Balance Sheet</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Transfer Report</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Sales</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Invoices</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">New Invoices</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Recurring invoices</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">quotes</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">New quote</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Payments</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Tax Rates</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Task</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Running Task</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Archive Task</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Accounting</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Client payment</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Expense management</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Expense Category</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Report</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Project Report</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Client Report</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Expense Report</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Income expense comparesion</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Attendance</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Time History</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Time Change Request</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Attendance Report</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Recruitment</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Jobs Posted</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Jobs Application</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Payroll</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Salary Template</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Hourly</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Manage salary</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Employee salary list</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Make payment</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Generate payslip</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Payroll summary</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Stock</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Stock category</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-typography.html"><span class="mm-text">Manage Stock</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Assign stock</span></a>
                        </li>
                    </ul>
                </li>
                <li class="mm-dropdown">
                    <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Tickets</span></a>
                    <ul>
                        <li>
                            <a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Answered</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-general.html"><span class="mm-text">Open</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Inprocess</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Closed</span></a>
                        </li>
                        <li>
                            <a tabindex="-1" href="forms-validation.html"><span class="mm-text">All Tickets</span></a>
                        </li>
                    </ul>
                </li>
            </ul> <!-- / .navigation -->
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
    </div> <!-- / #content-wrapper -->
    <div id="main-menu-bg"></div>
</div> <!-- / #main-wrapper -->
</body>
@endsection
