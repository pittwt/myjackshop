<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>

			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="<?php echo resBu("admin/images/logo2.png");?>" alt="Simpla Admin logo" /></a>

			<!-- Sidebar Profile links -->
	  <div id="profile-links">
				您好, <a href="#" title="Edit your profile"><?php echo Yii::app()->session['username'];?></a><br />
				<br />
				<a href="#" title="View the Site">网站首页</a> | <a href="<?php echo $this->createUrl('default/logout'); ?>">退出</a>
			</div>

			<ul id="main-nav">  <!-- Accordion Menu -->

				<li>
					<a href="#" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
					内容管理
					</a>
					<ul>
						<li><a href="#">文章分类</a></li>
						<li><a class="current" href="#">发布文章</a></li> <!-- Add class "current" to sub menu items also -->
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item">
						会员管理
					</a>
					<ul>
						<li><a href="#">添加会员</a></li>
						<li><a href="#">会员组管理</a></li>
					</ul>
				</li>

				<li>
					<a href="#" class="nav-top-item">
						系统设置

					</a>
					<ul>
						<li><a href="#">管理首页</a></li>
						<li><a href="#">站点设置</a></li>
					</ul>
				</li>

			</ul> <!-- End #main-nav -->

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

		</div></div>