<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="index">商城</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                  <li class="dropdown">
                    <ul class="dropdown-menu" role="menu">
          
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index">产品中心</a></li>
                <?
                if($_SESSION["is_login"]==true)
				{
				?>
                <li><a href="register">注册</a></li>
                <li><a href="login">登陆</a></li>
                <?
                }
				else
				{
				?>
				<li><a href="member_edit">会员中心</a></li>
				<?
				}
				?>
                <li class="dropdown">
                    <ul class="dropdown-menu" role="menu">
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>