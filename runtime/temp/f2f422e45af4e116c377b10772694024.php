<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:76:"/opt/web/hui-/public/../application/v1/view/systematic/cases/casedetail.html";i:1571712697;s:53:"/opt/web/hui-/application/v1/view/layout/default.html";i:1571369306;s:50:"/opt/web/hui-/application/v1/view/common/meta.html";i:1571642226;s:52:"/opt/web/hui-/application/v1/view/common/header.html";i:1571369306;s:50:"/opt/web/hui-/application/v1/view/common/left.html";i:1571665422;s:52:"/opt/web/hui-/application/v1/view/common/footer.html";i:1571369306;s:52:"/opt/web/hui-/application/v1/view/common/script.html";i:1571660236;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!-- 加载样式及META信息 -->
    <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">
<link rel="shortcut icon" href="/static/assets/img/favicon.ico" />
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="/static/assets/components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="/static/assets/components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="/static/assets/components/Ionicons/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="/static/assets/dist/css/AdminLTE.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="/static/assets/dist/css/skins/_all-skins.min.css">
<!-- Date Picker -->
<link rel="stylesheet" href="/static/assets/components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="/static/assets/components/bootstrap-daterangepicker/daterangepicker.css">
<!--bootstrap-select-->
<link rel="stylesheet" href="/static/assets/components/bootstrap-select/css/bootstrap-select.css">
<!--jstree-->
<link rel="stylesheet" href="/static/assets/components/jstree/themes/default/style.min.css"/>
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="/static/assets/plugins/iCheck/all.css">
<!--layui-->
<link rel="stylesheet" href="/static/assets/plugins/layui/css/layui.css">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- Font -->
<link rel="stylesheet" href="/static/assets/dist/css/fontcss.css">
<link rel="stylesheet" href="/static/assets/dist/css/style.css">
<link rel="stylesheet" href="/static/assets/plugins/datatables/dataTables.bootstrap.css">
<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/static/assets/dist/js/html5shiv.js"></script>
  <script src="/static/assets/dist/js/respond.min.js"></script>
<![endif]-->

    
    <!-- 用来添加自定义的 样式 -->
    <style>
        .total-tr > th {
            background-color: #FFE8FF;
        }
    </style>
    
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">HQY</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg">慧企云后台管理</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">切换导航</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success">4</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 4 messages</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Support Team
                                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            AdminLTE Design Team
                                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Developers
                                            <small><i class="fa fa-clock-o"></i> Today</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Sales Department
                                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                                        </div>
                                        <h4>
                                            Reviewers
                                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                                        </h4>
                                        <p>Why not buy a new awesome theme?</p>
                                    </a>
                                </li>
                            </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                        <li class="footer"><a href="#">查看所有消息</a></li>
                    </ul>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                        page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                        <li class="footer"><a href="#">全部</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger">9</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 9 tasks</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 200px;"><ul class="menu" style="overflow: hidden; width: 100%; height: 200px;">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            设计按钮
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Create a nice theme
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Some task I need to do
                                            <small class="pull-right">60%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Make beautiful transitions
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 3px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 3px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                        </li>
                        <li class="footer">
                            查看所有任务
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/static/assets/dist/img/avatar.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs"><?php echo $userInfo['username']; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/static/assets/dist/img/avatar.png" class="img-circle" alt="User Image">
                            <p>
                                <?php echo $userInfo['username']; ?>
                                <small><?php echo $userInfo['tel']; ?></small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <button href="<?php echo url('/v1/login/changepass'); ?>" title="修改密码" id="changepass" class="btn btn-default btn-flat btn-dialog">修改密码</button>
                            </div>
                            <div class="pull-right">
                                <a href="javascript:void(0)" data-url="<?php echo url('/v1/login/logout'); ?>" class="btn btn-default btn-flat" onclick="admin_module.logout_btn(this)">退出登录</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">主导航</li>
            <li class="treeview <?php if($paths == '/v1/users/user/index'): ?>active<?php endif; ?>">

                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> <span>用户管理</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($paths == '/v1/users/user/index'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/users/user/index'); ?>"><i class="fa fa-circle-o"></i>用户列表</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> <span>慧享产品</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="<?php echo url('/v1/protuct/protucts/index'); ?>"><i class="fa fa-circle-o"></i>产品列表</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> <span>招标信息</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="<?php echo url('/v1/info/infos/index'); ?>"><i class="fa fa-circle-o"></i>信息详情列表</a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-user"></i> <span>合作伙伴</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li class="">
                        <a href="<?php echo url('/v1/partners/partner/index'); ?>"><i class="fa fa-circle-o"></i>合作伙伴列表</a>
                    </li>
                </ul>
            </li>


            <li class="treeview <?php if($paths == '/v1/systematic/system/slideshow' || $paths == '/v1/systematic/system/setting'): ?>active<?php endif; ?>">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>系统管理</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
<!--                    <li class="<?php if($paths == '/v1/systematic/system/menu'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/systematic/system/menu'); ?>"><i class="fa fa-circle-o"></i> 菜单管理</a>
                    </li>
                    <li class="<?php if($paths == '/v1/organ/organization/index'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/organ/organization/index'); ?>"><i class="fa fa-circle-o"></i>组织架构管理</a>
                    </li>-->
                    <li class="<?php if($paths == '/v1/systematic/system/setting'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/systematic/system/setting'); ?>"><i class="fa fa-circle-o"></i>网站设置</a>
                    </li>

                    <li class="<?php if($paths == '/v1/systematic/system/slideshow'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/systematic/system/slideshow'); ?>"><i class="fa fa-circle-o"></i>首页轮播图</a>
                    </li>

                </ul>
            </li>

            <li class="treeview <?php if($paths == '/v1/systematic/cases/index' || $paths == '/v1/systematic/cases/casedetail'): ?>active<?php endif; ?>">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>案例管理</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($paths == '/v1/systematic/cases/index'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/systematic/cases/index'); ?>"><i class="fa fa-circle-o"></i>主案例管理</a>
                    </li>

                    <li class="<?php if($paths == '/v1/systematic/cases/casedetail'): ?>active<?php endif; ?>">
                        <a href="<?php echo url('/v1/systematic/cases/casedetail'); ?>"><i class="fa fa-circle-o"></i>案例详情管理</a>
                    </li>

                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
    <!-- Full Width Column -->
    <div class="content-wrapper">
        
<div class="content" style="margin-bottom:0px;min-height:0px;">
    <div class="row">
        <div class="col-md-12">
            <form class="form-inline"  id="form">

                <div class="panel panel-default panel-btn">
                    <div class="panel-heading">
                        <div class="form-group">
                            <label>状态：</label>
                            <select class="form-control" name="status">
                                <option value="">请选择</option>
                                <option value="1" <?php if((isset($params['status'])) && ($params['status'] == 1)): ?>selected='selected'<?php endif; ?>>启用</option>
                                <option value="2" <?php if((isset($params['status'])) && ($params['status'] == 2)): ?>selected='selected'<?php endif; ?>>禁用</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-info" id="btn_search" type="Submit"  data-url="<?php echo url('/v1/users/user/index'); ?>"><i class="glyphicon glyphicon-search" aria-hidden="true"></i>搜索</button>
                        </div>
                    </div>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<!-- Main content -->
<section class="content">
    <div class="box box-default color-palette-box" style="min-height:700px;">
        <div class="box-header with-border">
            <button type="button" class="btn btn-sm btn-refresh"><i class="fa fa-refresh"></i></button>
            <button type="button" class="btn bg-purple btn-sm btn-dialog"
                    id="adddetail" data-url="<?php echo url('/v1/systematic/cases/adddetail'); ?>">
                <i class="fa fa-plus-circle">添加案例详情</i></button>
        </div>
        <div class="box-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                <th class="td-align td-width-40px">
                    <input class="data-check_box_total" onclick="admin_module.check_out(this)" type="checkbox"/>
                </th>
                <th class="text-center">父级</th>
                <th class="text-center">标题</th>
                <th class="text-center">描述</th>
                <th class="text-center">图片</th>
                <th class="text-center">URL</th>
                <th class="text-center">状态</th>
                <th class="text-center">操作</th>
                </thead>
                <tbody>
                <?php if(is_array($data['list']['data']) || $data['list']['data'] instanceof \think\Collection || $data['list']['data'] instanceof \think\Paginator): $i = 0; $__LIST__ = $data['list']['data'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data_list): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td class="td-align td-padding">
                        <input type="checkbox" name="box_checked" data-id="<?php echo isset($data_list['id']) ? $data_list['id'] : ''; ?>" class="data-check_box">
                    </td>
                    <td class="text-center"><?php echo isset($data_list['pid']) ? $parent[$data_list['pid']] : ''; ?></td>
                    <td class="text-center"><?php echo isset($data_list['title']) ? $data_list['title']: ''; ?></td>
                    <td class="text-center"><?php echo isset($data_list['desc']) ? $data_list['desc']: ''; ?></td>
                    <td class="text-center">
                        <img src="<?php echo isset($data_list['pic']) ? $data_list['pic']: ''; ?>" style="width:50px;height:50px;"/>
                    </td>
                    <td class="text-center"><?php echo isset($data_list['url']) ? $data_list['url']: ''; ?></td>
                    <td class="text-center">
                        <?php if((isset($data_list['status'])) && ($data_list['status'] == 1)): ?>
                        <span class="btn btn-success"><?php echo $status[$data_list['status']]; ?></span>
                        <?php else: ?>
                        <span class="btn btn-danger"><?php echo $status[$data_list['status']]; ?></span>
                        <?php endif; ?>
                    </td>
                    <td class="text-center">
                        <?php if(isset($data_list['id'])): ?>
                        <a href="javascript:void(0)" class="btn btn-info" onclick="admin_module.detail_edit(this)" data-url="<?php echo url('/v1/systematic/cases/editdetail',['id' => $data_list['id']]); ?>">编辑</a>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="pages"></div>
        </div>
    </div>

</section>

    </div>

</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.7
    </div>
    <strong>Copyright © 2014-2019 <a href="javascript:void(0)">慧企云后台管理</a>.</strong> All rights
    reserved.
</footer>
<!-- 加载JS脚本 -->
<!-- jQuery 3 -->
<script src="/static/assets/components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/static/assets/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="/static/assets/components/moment/min/moment.min.js"></script>
<script src="/static/assets/components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/static/assets/components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!--bootstrap-select-->
<script src="/static/assets/components/bootstrap-select/js/bootstrap-select.js"></script>
<!--jstree-->
<script src="/static/assets/components/jstree/jstree.min.js"></script>
<!-- ValidateForm -->
<script src="/static/assets/components/nice-validator/dist/jquery.validator.min.js?local=zh-CN"></script>
<!-- Slimscroll -->
<script src="/static/assets/components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Scrolltofixed -->
<script src="/static/assets/components/scrolltofixed/jquery-scrolltofixed-min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="/static/assets/plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="/static/assets/dist/js/adminlte.min.js"></script>
<script src="/static/assets/plugins/layui/layui.all.js"></script>
<script src="/static/assets/plugins/laydate-v5.0/laydate.js"></script>
<script src="/static/assets/plugins/lazyload.js"></script>
<!-- datatables -->
<script src="/static/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
<!-- 富文本 -->
<script src="/static/assets/components/ckeditor/ckeditor.js"></script>

<script src="/static/assets/dist/js/default.js"></script>
<script src="/static/assets/dist/js/app.js"></script>
<script src="/static/assets/dist/js/style.js"></script>

<script src="/static/assets/dist/js/protuct.js"></script>
<script src="/static/assets/dist/js/infos.js"></script>
<script src="/static/assets/dist/js/partners.js"></script>
<script>
    admin_module.changepas();
</script>
<!--<script src="/static/assets/dist/js/common.js"></script>-->




<!-- 用来 添加自定义 的 js -->

</body>
</html>

