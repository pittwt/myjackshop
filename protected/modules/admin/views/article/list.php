<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>文章</h4>
            <span class="add"><?php echo CHtml::link('添加', array('article/add'));?></span>
		</div>
		<div class="content-box-content none-border tabrow">
        	<table class="setting">
				<tr>
					<th width="5%"><input type="checkbox" name="flid[]" class="allbox"></th>
					<th width="15%">文章标题</th>
                    <th width="15%">分类</th>
					<th width="25%">描述</th>
					<th width="10%">文章</th>
					<th width="15%">操作</th>
				</tr>
            <?php foreach($model as $item):?>
                <tr>
                    <td><input type="checkbox" name="flid[]"></td>
                    <td><?php echo CHtml::encode($item->title);?></td>
                    <td><?php if(isset($item->category->name)){echo $item->category->name;}else{echo '未分类';}?></td>
                    <td><?php echo GlobalTools::sub_str($item->description, 40);?></td>
                    <td><?php echo CHtml::encode($item->hits);?></td>
                    <td>
                        <?php echo l('<img src="'.resBu("admin/images/icons/pencil.png").'" alt="修改">',array('article/edit','id'=>$item['id']));?>
                        <?php echo l('<img src="'.resBu("admin/images/icons/cross.png").'" alt="删除">', array('article/del','id'=>$item['id']),array('class'=>'delete','confirm'=>'确定删除?'))?>
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
                        'cssFile' =>resBu('style/pagenavi.css'),
                	));?>
                </div>
            </div>
		</div>
	</div>
</div>
<div class="clear"></div>

    