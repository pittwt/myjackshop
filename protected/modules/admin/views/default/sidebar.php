
<div id="sidebar">
	<div id="sidebar-wrapper">

 <!-- Sidebar with logo and menu -->

			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="<?php echo resBu("admin/images/logo2.png");?>" alt="Simpla Admin logo" /></a>

			<!-- Sidebar Profile links -->
	  <div id="profile-links">
				您好, <a href="#" title="Edit your profile"><?php echo Yii::app()->session['username'];?></a><br />
				<br />
				<a href="#" title="View the Site">网站首页</a href="#" title="View the Site"> | <a>管理首页</a> | <a href="<?php echo $this->createUrl('default/logout'); ?>">退出</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

				<li>
					<a href="#" class="nav-top-item current">
						系统设置
					</a>
					<ul>
						<li><a class="current" href="<?php echo $this->createUrl('settings/'); ?>">站点设置</a></li>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">地域管理</a></li>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">友情链接</a></li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
					内容管理
					</a>
					<ul>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">文章分类</a></li>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">文章评论</a></li>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">发布文章</a></li> <!-- Add class "current" to sub menu items also -->
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item">
						会员管理
					</a>
					<ul>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">添加会员</a></li>
						<li><a href="<?php echo $this->createUrl('default/start'); ?>">会员组管理</a></li>
					</ul>
				</li>



			</ul> <!-- End #main-nav -->



		</div></div>