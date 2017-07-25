<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"/var/www/pumm/public/../application/admin/view/index/withdrawals.html";i:1500975500;s:63:"/var/www/pumm/public/../application/admin/view/public/head.html";i:1500975500;s:62:"/var/www/pumm/public/../application/admin/view/public/nav.html";i:1500975500;s:65:"/var/www/pumm/public/../application/admin/view/public/footer.html";i:1500975500;}*/ ?>
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
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">提现列表</h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            提现列表
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>提现申请人</th>
                                        <th>申请金额</th>
                                        <th>申请时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $vo['mid']; ?></td>
                                        <td><?php echo $vo['money']; ?></td>
                                        <td><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></td>
                                        <td>
                                            <?php switch($vo['status']): case "0": ?>申请中<?php break; case "1": ?>提现成功<?php break; case "2": ?>提现失败<?php break; default: ?>不批准
                                            <?php endswitch; ?>
                                        </td>
                                        <td>
                                            <a href="#">批准</a>
                                            <a href="#">不批准</a>
                                        </td>
                                    </tr>
                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>

    
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
