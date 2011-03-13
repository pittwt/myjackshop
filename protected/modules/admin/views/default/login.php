<body id="login">
	<div id="login-wrapper" class="png_bg">
		<div id="login-top">

			<h1>Simpla Admin</h1>
			<!-- Logo (221px width) -->
			<img id="logo" src="<?php echo resBu("admin/images/logo2.png");?>" alt="Simpla Admin logo" />
		</div> <!-- End #logn-top -->

		<div id="login-content">

			<?php echo CHtml::beginForm();?>
				<p>
					<?php echo CHtml::activeLabel($loginModel, 'username');?>
					<?php echo CHtml::activeTextField($loginModel, 'username', array('tabindex'=>1, 'class'=>'text-input'));?>
				</p>
				<div class="clear"></div>
				<p>
					<?php echo CHtml::activeLabel($loginModel, 'password');?>
					<?php echo CHtml::activePasswordField($loginModel, 'password', array('tabindex'=>2, 'class'=>'text-input'));?>
				</p>
				<div class="clear"></div>

				<p>
					<input class="button" type="submit" value="登 录" />
				</p>

			<?php echo CHtml::endForm();?>
		</div> <!-- End #login-content -->

	</div> <!-- End #login-wrapper -->

  </body>