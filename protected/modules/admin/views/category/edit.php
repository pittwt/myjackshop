<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改文章分类</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php echo CHtml::beginForm('category/add','post')?>
            <table class="setting">
                <tr>
                    <td><?php echo CHtml::activeLabel($category, '分类名称');?></td>
                    <td><?php echo CHtml::activeTextField($category, 'name', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($category, '上级分类');?></td>
                    <td><?php echo CHtml::activeDropDownList($category, 'parent_id', $catelist, array('empty'=>'顶级分类','id'=>'parent_id'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($category, '连接网址');?></td>
                    <td><?php echo CHtml::activeTextField($category, 'linkurl', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($category, '链接介绍');?></td>
                    <td><?php echo CHtml::activeTextArea($category, 'description', array('class'=>'text-input textarea'));?>
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