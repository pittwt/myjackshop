<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>文章评论</h4>
		</div>
		<div class="content-box-content none-border tabrow">
        	<table class="setting">
				<tr>
					<th width="5%"><input type="checkbox" name="flid[]" class="allbox"></th>
					<th width="15%">标题</th>
                    <th width="15%">评论用户</th>
                    <th width="15%">文章</th>
					<th width="25%">评论内容</th>
					<th width="10%">评论时间</th>
					<th width="15%">操作</th>
				</tr>
            <?php foreach($model as $item):?>
                <tr>
                    <td><input type="checkbox" name="flid[]"></td>
                    <td><?php echo CHtml::encode($item->title);?></td>
                    <td><?php echo CHtml::encode($item->nick);?><br><?php echo CHtml::encode($item->email);?></td>
                    <td><?php echo CHtml::encode($item->content);?></td>
                    <td><?php echo CHtml::encode(date('Y-m-d H:i:s',$item->create_time));?></td>
                    <td>
                        <?php echo l('<img src="'.resBu("admin/images/icons/pencil.png").'">',array('comment/edit','id'=>$item['id']));?>
                        <?php echo l('<img src="'.resBu("admin/images/icons/cross.png").'">', array('comment/del','id'=>$item['id']),array('class'=>'delete','confirm'=>'确定删除?'))?>
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

    