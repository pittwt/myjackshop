<body>
	<?php $this->renderPartial('../default/top');?>
	<div id="main">
		<?php $this->renderPartial('../default/sidebar');?>

		<div id="main-content">

			<h2>Welcome <?php echo Yii::app()->session['username'];?></h2>
			<p id="page-intro">欢迎使用My-yiicms管理系统</p>

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
                        <li>时区设置:<?php echo function_exists("date_default_timezone_get") ? date_default_timezone_get() : '没有时区'; ?></li>
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


		</div> <!-- End #main-content -->
		<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->

				<h3>3 Messages</h3>

				<p>
					<strong>17th May 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<p>
					<strong>2nd May 2009</strong> by Jane Doe<br />
					Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<p>
					<strong>25th April 2009</strong> by Admin<br />
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
					<small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
				</p>

				<form action="#" method="post">

					<h4>New Message</h4>

					<fieldset>
						<textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
					</fieldset>

					<fieldset>

						<select name="dropdown" class="small-input">
							<option value="option1">Send to...</option>
							<option value="option2">Everyone</option>
							<option value="option3">Admin</option>
							<option value="option4">Jane Doe</option>
						</select>

						<input class="button" type="submit" value="Send" />
					</fieldset>
				</form>
			</div> <!-- End #messages -->
			<?php include("foot.php")?>
			<!-- End #footer -->
	</div>
    </body>