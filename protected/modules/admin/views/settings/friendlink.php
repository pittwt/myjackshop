<body>
	<?php include(dirname(__FILE__).'./../default/top.php');?>
	<div id="main">
	<?php include(dirname(__FILE__).'./../default/sidebar.php');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
				<div>
					友情链接
				</div>
				<div class="content-box-content none-border tabrow">
                    	<table class="setting">
							<tr>
								<th width="5%"><input type="checkbox" name="flid[]"></th>
								<th width="15%">链接名称</th>
								<th width="25%">连接网址</th>
								<th width="30%">链接介绍</th>
								<th width="10%">显示</th>
								<th width="15%">操作</th>
							</tr>
							<?php foreach($friendlink as $item):?>
							<tr class="none-bg">
								<td><input type="checkbox" name="flid[]"></td>
								<td><?php echo CHtml::encode($item->name);?></td>
								<td><?php echo CHtml::encode($item->linkurl);?></td>
								<td><?php echo CHtml::encode($item->description);?></td>
								<td><img src="<?php echo $item->isvalid ? resBu("admin/images/icons/tick_circle.png") : resBu("admin/images/icons/cross.png");?>" /></td>
								<td>
									<?php echo CHtml::link('<img src="'.resBu("admin/images/icons/pencil.png").'">', array('settings/editfriendlink','id'=>$item->id))?>
									<?php echo CHtml::link('<img src="'.resBu("admin/images/icons/cross.png").'">', array('settings/delfriendlink','id'=>$item->id),array('class'=>'delete','confirm'=>'确定删除?'))?>
								</td>
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