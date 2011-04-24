<div id="main-content">
	<div class="content-box none-border"><!-- Start Content Box -->
        <div class="content-title">
			<h4>站点设置</h4>
		</div>
		<div class="content-box-content none-border">
			<?php echo CHtml::beginForm(url('admin/settings/index'),'post',array('name'=>'settingsform'));?>
            	<table class="setting">
					<tr class="none-bg">
						<th><span class="wid2">网站名称</span></th>
						<td><input class="text-input small-input" value="<?php echo CHtml::encode($setting['sitename']); ?>" type="text" name="setting[sitename]" /></td>
					</tr>

					<tr class="none-bg">
						<th>站点关键字</th>
						<td><input class="text-input small-input datetricker" value="<?php echo CHtml::encode($setting['keywords']); ?>" type="text" name="setting[keywords]" /></td>
					</tr>

					<tr class="none-bg">
						<th>站点描述</th>
						<td><textarea class="text-input textarea name="setting[siteDescription]" cols="50" rows="3"><?php echo CHtml::encode($setting['siteDescription']); ?></textarea></td>
					</tr>

					<tr class="none-bg">
						<td>网站版权信息：</td>
						<td><textarea class="text-input textarea" name="setting[siteCopyright]" cols="50" rows="3"><?php echo CHtml::encode($setting['siteCopyright']); ?></textarea></td>
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