<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:63:"/var/www/pumm/public/../application/admin/view/index/index.html";i:1500975500;s:63:"/var/www/pumm/public/../application/admin/view/public/head.html";i:1500975500;s:62:"/var/www/pumm/public/../application/admin/view/public/nav.html";i:1500975500;s:65:"/var/www/pumm/public/../application/admin/view/public/footer.html";i:1500975500;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PUMM青年创业平台</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/bootstrap.min.css" />

    <!-- MetisMenu CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/metisMenu.min.css" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.bootstrap.css" />

    <!-- DataTables Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/dataTables.responsive.css" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/admin/css/sb-admin-2.css" />

    <!-- Custom Fonts -->
    <link rel="stylesheet" type="text/css" href="/admin/css/font-awesome.min.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">PUMM青年创业平台</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li>
                    <a href="#">
                        <div>
                            <i class="fa fa-comment fa-fw"></i> 新的打赏申请
                            <span class="pull-right text-muted small">4 分钟前</span>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-alerts -->
        </li>
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> 设置</a>
                </li>
                <li class="divider"></li>
                <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="withdrawals"><i class="fa fa-table fa-fw"></i> 提现列表</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> 会员列表</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> 打赏记录</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> 照片记录</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> 系统设置<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">用户列表</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>
        <div id="page-wrapper">
            <div class="col-lg-12">
                <h3 class="page-header">报表</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                            <tr>
                                <th>日期</th>
                                <th>打赏数</th>
                                <th>提现数</th>
                                <th>盈利</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3326</td>
                                <td>10/21/2013</td>
                                <td>3:29 PM</td>
                                <td>$321.33</td>
                            </tr>
                            <tr>
                                <td>3325</td>
                                <td>10/21/2013</td>
                                <td>3:20 PM</td>
                                <td>$234.34</td>
                            </tr>
                            <tr>
                                <td>3324</td>
                                <td>10/21/2013</td>
                                <td>3:03 PM</td>
                                <td>$724.17</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <div class="col-lg-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> 用户统计表
                            <div class="pull-right">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        用户
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li><a href="#">用户</a>
                                        </li>
                                        <li><a href="#">打赏</a>
                                        </li>
                                        <li><a href="#">提现</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="morris-area-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="347" version="1.1" width="1019.328125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="50.5625" y="311" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path fill="none" stroke="#aaaaaa" d="M63.0625,311H994.328125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5625" y="239.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">7,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63.0625,239.5H994.328125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5625" y="168" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">15,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63.0625,168H994.328125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5625" y="96.5" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">22,500</tspan></text><path fill="none" stroke="#aaaaaa" d="M63.0625,96.5H994.328125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="50.5625" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">30,000</tspan></text><path fill="none" stroke="#aaaaaa" d="M63.0625,25H994.328125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="994.328125" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012-06</tspan></text><text x="890.2255277946537" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012-03</tspan></text><text x="787.2544805589307" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011-12</tspan></text><text x="684.2834333232078" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011-09</tspan></text><text x="580.1808361178614" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011-06</tspan></text><text x="476.0782389125152" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011-03</tspan></text><text x="374.2387416464155" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010-12</tspan></text><text x="271.26769441069257" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010-09</tspan></text><text x="167.16509720534629" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010-06</tspan></text><text x="63.0625" y="323.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,8)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010-03</tspan></text><path fill="#7cb57c" stroke="none" d="M63.0625,260.3494C89.08814930133657,255.10606666666666,141.13944790400973,244.22495833333335,167.16509720534629,239.37606666666667C193.19074650668284,234.527175,245.242045109356,228.19617559198542,271.26769441069257,221.55826666666667C297.0104562196233,214.99250892531876,348.4959798374848,188.52053950276243,374.2387416464155,186.5614C399.69861596294044,184.62378950276243,450.6183645959903,204.54637380952383,476.0782389125152,205.97126666666668C502.10388821385175,207.42782380952383,554.1551868165249,197.11718333333334,580.1808361178614,198.0872C606.206485419198,199.05721666666668,658.2577840218712,230.9504233151184,684.2834333232078,213.7314C710.0261951321385,196.69953998178508,761.51171875,69.39196666666669,787.2544805589307,61.08366666666669C812.9972423678614,52.775366666666685,864.482765985723,135.08279353369764,890.2255277946537,147.26500000000001C916.2511770959902,159.581076867031,968.3024756986634,156.12385,994.328125,159.07680000000002L994.328125,311L63.0625,311Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#4da74d" d="M63.0625,260.3494C89.08814930133657,255.10606666666666,141.13944790400973,244.22495833333335,167.16509720534629,239.37606666666667C193.19074650668284,234.527175,245.242045109356,228.19617559198542,271.26769441069257,221.55826666666667C297.0104562196233,214.99250892531876,348.4959798374848,188.52053950276243,374.2387416464155,186.5614C399.69861596294044,184.62378950276243,450.6183645959903,204.54637380952383,476.0782389125152,205.97126666666668C502.10388821385175,207.42782380952383,554.1551868165249,197.11718333333334,580.1808361178614,198.0872C606.206485419198,199.05721666666668,658.2577840218712,230.9504233151184,684.2834333232078,213.7314C710.0261951321385,196.69953998178508,761.51171875,69.39196666666669,787.2544805589307,61.08366666666669C812.9972423678614,52.775366666666685,864.482765985723,135.08279353369764,890.2255277946537,147.26500000000001C916.2511770959902,159.581076867031,968.3024756986634,156.12385,994.328125,159.07680000000002" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63.0625" cy="260.3494" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="167.16509720534629" cy="239.37606666666667" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.26769441069257" cy="221.55826666666667" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="374.2387416464155" cy="186.5614" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="476.0782389125152" cy="205.97126666666668" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="580.1808361178614" cy="198.0872" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="684.2834333232078" cy="213.7314" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="787.2544805589307" cy="61.08366666666669" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="890.2255277946537" cy="147.26500000000001" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="994.328125" cy="159.07680000000002" r="2" fill="#4da74d" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#a8b4bd" stroke="none" d="M63.0625,285.58413333333334C89.08814930133657,279.8498333333333,141.13944790400973,267.6698083333333,167.16509720534629,262.6469333333333C193.19074650668284,257.6240583333333,245.242045109356,248.14735846994537,271.26769441069257,245.40113333333335C297.0104562196233,242.68475846994536,348.4959798374848,243.00490893186006,374.2387416464155,240.79653333333334C399.69861596294044,238.61242559852673,450.6183645959903,230.89430714285717,476.0782389125152,227.83120000000002C502.10388821385175,224.70002380952383,554.1551868165249,215.88950833333337,580.1808361178614,216.01940000000002C606.206485419198,216.1492916666667,658.2577840218712,242.14255664845174,684.2834333232078,228.87033333333335C710.0261951321385,215.7423733151184,761.51171875,118.20263333333334,787.2544805589307,110.41866666666667C812.9972423678614,102.6347,864.482765985723,158.42695746812387,890.2255277946537,166.5986C916.2511770959902,174.86004080145722,968.3024756986634,173.7629,994.328125,176.151L994.328125,311L63.0625,311Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#7a92a3" d="M63.0625,285.58413333333334C89.08814930133657,279.8498333333333,141.13944790400973,267.6698083333333,167.16509720534629,262.6469333333333C193.19074650668284,257.6240583333333,245.242045109356,248.14735846994537,271.26769441069257,245.40113333333335C297.0104562196233,242.68475846994536,348.4959798374848,243.00490893186006,374.2387416464155,240.79653333333334C399.69861596294044,238.61242559852673,450.6183645959903,230.89430714285717,476.0782389125152,227.83120000000002C502.10388821385175,224.70002380952383,554.1551868165249,215.88950833333337,580.1808361178614,216.01940000000002C606.206485419198,216.1492916666667,658.2577840218712,242.14255664845174,684.2834333232078,228.87033333333335C710.0261951321385,215.7423733151184,761.51171875,118.20263333333334,787.2544805589307,110.41866666666667C812.9972423678614,102.6347,864.482765985723,158.42695746812387,890.2255277946537,166.5986C916.2511770959902,174.86004080145722,968.3024756986634,173.7629,994.328125,176.151" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63.0625" cy="285.58413333333334" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="167.16509720534629" cy="262.6469333333333" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.26769441069257" cy="245.40113333333335" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="374.2387416464155" cy="240.79653333333334" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="476.0782389125152" cy="227.83120000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="580.1808361178614" cy="216.01940000000002" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="684.2834333232078" cy="228.87033333333335" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="787.2544805589307" cy="110.41866666666667" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="890.2255277946537" cy="166.5986" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="994.328125" cy="176.151" r="2" fill="#7a92a3" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><path fill="#2677b5" stroke="none" d="M63.0625,285.58413333333334C89.08814930133657,285.3172,141.13944790400973,287.1928833333333,167.16509720534629,284.5164C193.19074650668284,281.8399166666666,245.242045109356,265.35726520947173,271.26769441069257,264.17226666666664C297.0104562196233,263.0001485428051,348.4959798374848,277.3622127071823,374.2387416464155,275.08793333333335C399.69861596294044,272.8386460405157,450.6183645959903,248.32082142857143,476.0782389125152,246.078C502.10388821385175,243.7853380952381,554.1551868165249,254.57458333333335,580.1808361178614,256.946C606.206485419198,259.3174166666667,658.2577840218712,276.3158058287796,684.2834333232078,265.0493333333333C710.0261951321385,253.90532249544626,761.51171875,174.295575,787.2544805589307,167.30406666666667C812.9972423678614,160.31255833333333,864.482765985723,201.24665346083788,890.2255277946537,209.11726666666667C916.2511770959902,217.07437012750455,968.3024756986634,225.24051666666668,994.328125,230.61493333333334L994.328125,311L63.0625,311Z" fill-opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;"></path><path fill="none" stroke="#0b62a4" d="M63.0625,285.58413333333334C89.08814930133657,285.3172,141.13944790400973,287.1928833333333,167.16509720534629,284.5164C193.19074650668284,281.8399166666666,245.242045109356,265.35726520947173,271.26769441069257,264.17226666666664C297.0104562196233,263.0001485428051,348.4959798374848,277.3622127071823,374.2387416464155,275.08793333333335C399.69861596294044,272.8386460405157,450.6183645959903,248.32082142857143,476.0782389125152,246.078C502.10388821385175,243.7853380952381,554.1551868165249,254.57458333333335,580.1808361178614,256.946C606.206485419198,259.3174166666667,658.2577840218712,276.3158058287796,684.2834333232078,265.0493333333333C710.0261951321385,253.90532249544626,761.51171875,174.295575,787.2544805589307,167.30406666666667C812.9972423678614,160.31255833333333,864.482765985723,201.24665346083788,890.2255277946537,209.11726666666667C916.2511770959902,217.07437012750455,968.3024756986634,225.24051666666668,994.328125,230.61493333333334" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="63.0625" cy="285.58413333333334" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="167.16509720534629" cy="284.5164" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="271.26769441069257" cy="264.17226666666664" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="374.2387416464155" cy="275.08793333333335" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="476.0782389125152" cy="246.078" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="580.1808361178614" cy="256.946" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="684.2834333232078" cy="265.0493333333333" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="787.2544805589307" cy="167.30406666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="890.2255277946537" cy="209.11726666666667" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="994.328125" cy="230.61493333333334" r="2" fill="#0b62a4" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 212.182px; top: 160px; display: none;"><div class="morris-hover-row-label">2010 Q3</div><div class="morris-hover-point" style="color: #0b62a4">
                                iPhone:
                                4,912
                            </div><div class="morris-hover-point" style="color: #7A92A3">
                                iPad:
                                1,969
                            </div><div class="morris-hover-point" style="color: #4da74d">
                                iPod Touch:
                                2,501
                            </div></div></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
                <!-- /.col-lg-8 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    
<!-- jQuery -->
<script type="text/javascript" src="/admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script type="text/javascript" src="/admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script type="text/javascript" src="/admin/js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script type="text/javascript" src="/admin/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/admin/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="/admin/js/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script type="text/javascript" src="/admin/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>