<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>添加文章</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php echo CHtml::beginForm(url('admin/article/add'),'post')?>
            <table class="setting">
                <tr>
                    <td><?php echo CHtml::activeLabel($article, '分类名称');?></td>
                    <td><?php echo CHtml::activeTextField($article, 'title', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($article, '上级分类');?></td>
                    <td><?php echo CHtml::activeDropDownList($article, 'cat_id', $catelist, array('empty'=>'顶级分类','id'=>'cat_id'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($article, '排序');?></td>
                    <td><?php echo CHtml::activeTextField($article, 'order', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($article, '连接网址');?></td>
                    <td><?php echo CHtml::activeTextField($article, 'linkurl', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($article, '链接介绍');?></td>
                    <td><?php echo CHtml::activeTextArea($article, 'description', array('class'=>'text-input textarea','cols'=>50, 'rows'=>3));?>
                    </td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="修改" /></td>
                </tr>
            </table>
            <?php echo CHtml::endForm();?>
		</div>
	</div>
</div>
<div class="clear"></div>
