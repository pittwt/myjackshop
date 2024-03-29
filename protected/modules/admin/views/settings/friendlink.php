<div id="main-content">
	<div class="content-box none-border"><!-- Start Content Box -->
		<div class="content-title">
			<h4>友情链接</h4>
            <span class="add"><?php echo CHtml::link('添加', array('settings/addfriendlink'));?></span>
		</div>
		<div class="content-box-content none-border tabrow">
            	<table class="setting">
					<tr>
						<th width="5%"><input type="checkbox" name="flid[]" class="allbox"></th>
						<th width="15%">链接名称</th>
						<th width="25%">连接网址</th>
						<th width="30%">链接介绍</th>
						<th width="10%">状态</th>
						<th width="15%">操作</th>
					</tr>
					<?php foreach($friendlink as $item):?>
					<tr class="none-bg">
						<td><input type="checkbox" name="flid[]"></td>
						<td><?php echo CHtml::encode($item->name);?></td>
						<td><?php echo CHtml::encode($item->linkurl);?></td>
						<td><?php echo CHtml::encode($item->description);?></td>
						<td><span id="isvalid<?php echo $item->id;?>">
                        <?php if($item->isvalid){
                                echo CHtml::link('<img src="'.resBu("admin/images/icons/tick_circle.png").'" />',array("settings/changestate",'isvalid'=>$item->isvalid,'id'=>$item->id),array('class'=>'flstate','rel'=>$item->isvalid));
                              }else{
                                echo CHtml::link('<img src="'.resBu("admin/images/icons/cross.png").'" />',array("settings/changestate",'isvalid'=>$item->isvalid,'id'=>$item->id),array('class'=>'flstate','rel'=>$item->isvalid));
                              }?>
                        </span></td>
						<td>
							<?php echo CHtml::link('<img src="'.resBu("admin/images/icons/pencil.png").'">', array('settings/editfriendlink','id'=>$item->id))?>
							<?php echo CHtml::link('<img src="'.resBu("admin/images/icons/cross.png").'">', array('settings/delfriendlink','id'=>$item->id),array('class'=>'delete','confirm'=>'确定删除?'))?>
						</td>
					</tr>
					<?php endforeach;?>
                </table>
                <div class="pages">
                	<?php $this->widget('CLinkPager', array(
                		'pages' => $pages,
                	    'header' => '',
                	    'firstPageLabel' => '首页',
                	    'lastPageLabel' => '末页',
                	    'nextPageLabel' => '下一页',
                	    'prevPageLabel' => '上一页',
                	));?>
                </div>
		</div>
	</div>
</div>
<div class="clear"></div>
