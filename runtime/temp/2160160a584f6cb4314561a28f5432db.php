<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:63:"/var/www/pumm/public/../application/admin/view/index/login.html";i:1500975500;s:63:"/var/www/pumm/public/../application/admin/view/public/head.html";i:1500975500;s:65:"/var/www/pumm/public/../application/admin/view/public/footer.html";i:1500975500;}*/ ?>
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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">PUMM青年创业平台</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="用户名" name="name" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="密码" name="pwd" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <img src="<?php echo captcha_src(); ?>" alt="captcha" style="width: 180px;"/>
                                    <label style="width: 130px;">
                                        <input class="form-control" placeholder="请输入验证码" name="captcha" type="text" value="">
                                    </label>
                                    <!--<label>-->
                                        <!--<input name="remember" type="checkbox" value="Remember Me">下次自动登录-->
                                    <!--</label>-->
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button class="btn btn-lg btn-success btn-block" type="submit">登录</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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