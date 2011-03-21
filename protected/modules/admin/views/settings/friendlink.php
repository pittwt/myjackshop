<body>
	<?php include(dirname(__FILE__).'./../default/top.php');?>
	<div id="main">
	<?php include(dirname(__FILE__).'./../default/sidebar.php');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
				<div class="content-box-content none-border">
                    	<table class="setting">
							<tr>
								<th width="15%">链接名称</th>
								<th width="25%">连接网址</th>
								<th width="35%">链接介绍</th>
								<th width="10%">显示</th>
								<th width="15%">操作</th>
							</tr>
							<?php foreach($friendlink as $item):?>
							<tr class="none-bg">
								<td><?php echo CHtml::encode($item->name);?></td>
								<td><?php echo CHtml::encode($item->linkurl);?></td>
								<td><?php echo CHtml::encode($item->description);?></td>
								<td><?php echo CHtml::encode($item->isvalid);?></td>
								<td>修改  删除</td>
							</tr>
							<?php endforeach;?>
                        </table>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<?php include(dirname(__FILE__).'./../default/foot.php');?>
	</div>
    </body>