<body>
    <?php $this->renderPartial('../default/top');?>
	<div id="main">
	<?php $this->renderPartial('../default/sidebar');?>
		<div id="main-content">
			<div class="content-box none-border">
				<div class="content-title">
					<h4>文章分类</h4>
                    <span class="add"><?php echo CHtml::link('添加', array('category/add'));?></span>
				</div>
				<div class="content-box-content none-border tabrow">
                	<table class="setting">
						<tr>
							<th width="5%"><input type="checkbox" name="flid[]" class="allbox"></th>
							<th width="15%">分类名称</th>
							<th width="25%">描述</th>
							<th width="10%">文章</th>
							<th width="15%">操作</th>
						</tr>
                    <?php foreach($model as $item):?>
                        <tr>
                            <td><input type="checkbox" name="flid[]"></td>
                            <td><?php echo CHtml::encode($item->name);?></td>
                            <td><?php echo CHtml::encode($item->description);?></td>
                            <td><?php echo CHtml::encode($item->hits);?></td>
                            <td>
                                <?php echo l('<img src="'.resBu("admin/images/icons/pencil.png").'">',array('category/edit','id'=>$item->id));?>
                                <?php echo l('<img src="'.resBu("admin/images/icons/cross.png").'">', array('category/del','id'=>$item->id),array('class'=>'delete','confirm'=>'确定删除?'))?>
                            </td>
                        </tr>
                    <?php endforeach;?>
                    </table>
				</div>
			</div>
		</div>
		<div class="clear"></div>
        <?php $this->renderPartial('../default/foot');?>
	</div>
    </body>
    