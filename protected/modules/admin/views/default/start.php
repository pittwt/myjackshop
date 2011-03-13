<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->

		<?php include("sidebar.php");?>
        <!-- End #sidebar -->

		<div id="main-content"> <!-- Main Content Section with everything -->

			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>

			<!-- Page Head -->
			<h2>Welcome <?php echo Yii::app()->session['username'];?></h2>
			<p id="page-intro">欢迎使用My-yiicms管理系统</p>

			<ul class="shortcut-buttons-set">

				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo resBu("admin/images/icons/pencil_48.png");?>" alt="icon" /><br />
				</span></a></li>

				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo resBu("admin/images/icons/paper_content_pencil_48.png");?>" alt="icon" /><br />
				</span></a></li>

				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo resBu("admin/images/icons/image_add_48.png");?>" alt="icon" /><br />
				</span></a></li>

				<li><a class="shortcut-button" href="#"><span>
					<img src="<?php echo resBu("admin/images/icons/clock_48.png");?>" alt="icon" /><br />
				</span></a></li>

				<li><a class="shortcut-button" href="#messages" rel="modal"><span>
					<img src="<?php echo resBu("admin/images/icons/comment_48.png");?>" alt="icon" /><br />
				</span></a></li>

			</ul><!-- End .shortcut-buttons-set -->

			<div class="clear"></div> <!-- End .clear -->

			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>系统信息</h3>
				</div>
				<div class="content-box-content noboder">
					<ul>
						<li>服务器操作系统: <?php echo sprintf('%s', PHP_OS, PHP_VERSION);?></li>
						<li>Web 服务器: <?php echo $_SERVER['SERVER_SOFTWARE'];?></li>
                        <li>MySQL 版本: <?php echo sprintf('%s-%s', ucfirst(app()->db->driverName), app()->db->serverVersion);?></li>
                        <li>安全模式: <?php echo (boolean) ini_get('safe_mode') ?  '是' : '否' ; ?></li>
                        <li>文件上传的最大大小:<?php echo ini_get('upload_max_filesize'); ?></li>
                        <li>时区设置:<?php echo function_exists("date_default_timezone_get") ? date_default_timezone_get().' ' : '没有时区'; ?></li>
                        <li>程序版本:1.0 Alpha 1</li>
					</ul>
				</div>
			</div>

			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>开发及测试</h3>
				</div>
				<div class="content-box-content noboder">
					<ul>
						<li>系统设计: Bevin</li>
						<li>开发及测试: Anton, Bevin</li>
                        <li>主题及UI: Jackman</li>
					</ul>
				</div>
			</div>
			<?php include("foot.php")?>
			<!-- End #footer -->

		</div> <!-- End #main-content -->

	</div>
    </body>