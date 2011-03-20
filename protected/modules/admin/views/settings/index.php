<body>
	<?php include(dirname(__FILE__).'./../default/top.php');?>
	<div id="main">
	<?php include(dirname(__FILE__).'./../default/sidebar.php');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
				<div class="content-box-content none-border">
					<?php echo CHtml::beginForm();?>
                    	<table class="setting">
							<tr class="none-bg">
								<th><span class="wid2">网站名称</span></th>
								<td><input class="text-input small-input" type="text" id="small-input" name="small-input" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点关键字</th>
								<td><input class="text-input small-input datetricker" type="text" id="medium-input" name="medium-input" /></td>
							</tr>

							<tr class="none-bg">
								<th>站点描述</th>
								<td><textarea class="text-input textarea" name="textfield" cols="50" rows="3"></textarea></td>
							</tr>

							<tr>
								<td>网站版权信息： </td>
								<td><textarea class="text-input textarea" name="textfield" cols="50" rows="3"></textarea></td>
							</tr>

							<tr>
                            	<td>&nbsp;</td>
								<td><input class="button" type="submit" value="更新站点设置" /></td>
							</tr>
<!--
							<tr>
								This is a drotr down list
								<select name="drotrdown" class="small-input">
									<otrtion value="otrtion1">Otrtion 1</otrtion>
									<otrtion value="otrtion2">Otrtion 2</otrtion>
									<otrtion value="otrtion3">Otrtion 3</otrtion>
									<otrtion value="otrtion4">Otrtion 4</otrtion>
								</select>
							</tr>

							<tr>
								Textarea with WYSIWYG
								<textarea class="text-input textarea wysiwyg" id="textarea" name="textfield" cols="79" rows="15"></textarea>
							</tr>

							<tr>
								<input class="button" type="submit" value="Submit" />
							</tr>-->
                        </table>
					<?php echo CHtml::endForm();?>
				</div>
			</div>
			
		</div>
		<?php include(dirname(__FILE__).'./../default/foot.php');?>
	</div>
    </body>