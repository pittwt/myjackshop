<body>
	<?php $this->renderPartial('../default/top');?>
	<div id="main">
	<?php $this->renderPartial('../default/sidebar');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
                <div class="content-title">
					<h4>站点设置</h4>
				</div>
				<div class="content-box-content none-border">
					<?php echo CHtml::beginForm('settings/update','post',array('name'=>'settingsform'));?>
                    	<table class="setting">
							<tr class="none-bg">
								<th><span class="wid2">网站名称</span></th>
								<td><input class="text-input small-input" value="<?php echo CHtml::encode($sysinfo['sitename']); ?>" type="text" name="val[sitename]" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点关键字</th>
								<td><input class="text-input small-input datetricker" value="<?php echo CHtml::encode($sysinfo['keywords']); ?>" type="text" name="val[keywords]" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点描述</th>
								<td><textarea class="text-input textarea name="val[siteDescription]" cols="50" rows="3"><?php echo CHtml::encode($sysinfo['siteDescription']); ?></textarea></td>
							</tr>

							<tr class="none-bg">
								<td>网站版权信息： </td>
								<td><textarea class="text-input textarea" name="val[siteCopyright]" cols="50" rows="3"><?php echo CHtml::encode($sysinfo['siteCopyright']); ?></textarea></td>
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
		<?php $this->renderPartial('../default/foot');?>
	</div>
    </body>