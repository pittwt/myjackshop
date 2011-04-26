<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>用户</h4>
            <span class="add"><?php echo CHtml::link('添加', array('user/add'));?></span>
		</div>
		<div class="content-box-content none-border tabrow">
        	<table class="setting">
				<tr>
					<th width="5%"><input type="checkbox" name="flid[]" class="allbox"></th>
					<th width="15%">ID</th>
                    <th width="15%">用户名</th>
					<th width="25%">Email</th>
					<th width="10%">上次登录时间</th>
                    <th width="10%">状态</th>
                    <th width="10%">角色</th>
					<th width="15%">操作</th>
				</tr>
            <?php foreach($model as $item):?>
                <tr>
                    <td><input type="checkbox" name="flid[]"></td>
                    <td><?php echo CHtml::encode($item->id);?></td>
                    <td><?php echo CHtml::encode($item->username);?></td>
                    <td><?php echo CHtml::encode($item->email);?></td>
                    <td><?php echo CHtml::encode($item->last_login_time );?></td>
                    <td><?php echo CHtml::encode(User::$states[$item->state]);?></td>
                    <td><?php echo CHtml::encode(User::$userRole[$item->ismanage]);?></td>
                    <td>
                        <?php echo l('<img src="'.resBu("admin/images/icons/pencil.png").'">',array('user/edit','id'=>$item['id']));?>
                        <?php echo l('<img src="'.resBu("admin/images/icons/cross.png").'">', array('user/del','id'=>$item['id']),array('class'=>'delete','confirm'=>'确定删除?'))?>
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
</div>
<div class="clear"></div>

    