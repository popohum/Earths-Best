<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
					<span>
						<img alt="image" class="img-circle" src="../public/img/profile_small.jpg"/>
					</span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="../index.php">
						<span class="clear">
							<span class="block m-t-xs">
								<strong class="font-bold">{{Auth::User()->username}}</strong>
							</span>  <span class="text-muted text-xs block">超级管理员
								<b class="caret">
                                </b></span>
						</span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                            <a href="contacts.html">
                                联系我们
                            </a>
                        </li>
                        <li>
                            <a href="mailbox.html">
                                信箱
                            </a>
                        </li>
                        <li class="divider">
                        </li>
                        <li>
                            <a href="/">
                                安全退出
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    No+
                </div>
            </li>
            <li class="active">
                <a href=" ">
                    <i class="fa fa-suitcase"> </i> <span class="nav-label">文章管理</span> <span class="fa arrow"> </span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/articleList" target="mainBox">
                            文章列表
                        </a>
                    </li>
                    <li>
                        <a href="admin/articleAdd" target="mainBox">
                            添加文章
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="">
                    <i class="fa fa-th-large"></i> <span class="nav-label">分类管理</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/cateList" target="mainBox">
                            分类列表
                        </a>
                    </li>
                    <li>
                        <a href="admin/cateAdd" target="mainBox">
                            添加分类
                        </a>
                    </li>
                    <li>
                        <a href="admin/cateDel" target="mainBox">
                            删除分类
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=" ">
                    <i class="fa fa-user"></i><span class="nav-label">管理员管理</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/adminList" target="mainBox">
                            管理员列表
                        </a>
                    </li>
                    <li>
                        <a href="admin/adminAdd" target="mainBox">
                            添加管理员
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=" ">
                    <i class="fa fa-th-list"></i><span class="nav-label">菜单列表</span><span class="fa arrow"></span>
                </a>
                <ul class='nav nav-second-level'>
                    {{--echo "<li><a href='javascript:;' target='mainBox'>";--}}
                    {{--echo "{$key['cName']}";--}}
                    {{--echo "</a></li>";--}}
                </ul>
            </li>
            <li>
                <a href=" ">
                    <i class="fa fa-cog"></i><span class="nav-label">高级设置</span><span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="admin/config" target="mainBox">
                            系统设置
                        </a>
                    </li>
                    <li>
                        <a href="admin/optimize" target="mainBox">
                            系统优化
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>