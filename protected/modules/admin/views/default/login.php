<body id="login">
	<div id="login-wrapper" class="png_bg">
		<div id="login-top">
			<!-- Logo (221px width) -->
			<img id="logo" src="<?php echo resBu("admin/images/logo.png");?>" alt="My yiicms logo" />
		</div> <!-- End #logn-top -->

		<div id="login-content">
			<div class="error-summary" <?php if (!$loginModel->hasErrors()) echo 'style="display:none;"'; ?>>
		  	<?php if ($loginModel->hasErrors()) {
		  			echo '用户名或密码错误！';
		  		}
		  	?>
		 	</div>
			<?php echo CHtml::beginForm();?>
				<p>
					<?php echo CHtml::activeLabel($loginModel, 'username');?>
					<?php echo CHtml::activeTextField($loginModel, 'username', array('class'=>'text-input'));?>
				</p>
				<div class="clear"></div>
				<p>
					<?php echo CHtml::activeLabel($loginModel, 'password');?>
					<?php echo CHtml::activePasswordField($loginModel, 'password', array('class'=>'text-input'));?>
				</p>
				<div class="clear"></div>
				<p>
					<input class="button" type="submit" value="登 录" />
				</p>
			<?php echo CHtml::endForm();?>
		</div>
	</div>
  </body>