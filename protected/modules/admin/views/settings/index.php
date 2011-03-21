<body>
	<?php include(dirname(__FILE__).'./../default/top.php');?>
	<div id="main">
	<?php include(dirname(__FILE__).'./../default/sidebar.php');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
				<div class="content-box-content none-border">
					<?php echo CHtml::beginForm('','post',array('name'=>'settingsform'));?>
                    	<table class="setting">
							<tr class="none-bg">
								<th><span class="wid2">网站名称</span></th>
								<td><input class="text-input small-input" value="<?php echo CHtml::encode($settings[0]->val); ?>" type="text" name="val[sitename]" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点关键字</th>
								<td><input class="text-input small-input datetricker" value="<?php echo CHtml::encode($settings[1]->val); ?>" type="text" name="val[keywords]" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点描述</th>
								<td><textarea class="text-input textarea" value="<?php echo CHtml::encode($settings[2]->val); ?>" name="val[sitedescription]" cols="50" rows="3"></textarea></td>
							</tr>

							<tr class="none-bg">
								<td>网站版权信息： </td>
								<td><textarea class="text-input textarea" value="<?php echo CHtml::encode($settings[3]->val); ?>" name="val[sitecopyright]" cols="50" rows="3"></textarea></td>
							</tr>

							<tr class="none-bg">
                            	<td>&nbsp;</td>
								<td><input class="button" type="submit" value="更新站点设置" /></td>
							</tr>
                        </table>
					<?php echo CHtml::endForm();?>
				</div>
			</div>

		</div>
		<?php include(dirname(__FILE__).'./../default/foot.php');?>
	</div>
    </body>