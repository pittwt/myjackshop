<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改文章分类</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form = $this->beginwidget('CActiveForm');?>
            <table class="setting">
                <tr>
                    <td><?php echo $form->labelEx($model, 'name');?></td>
                    <td><?php echo $form->textField($model, 'name', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model, 'name');?></a></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'parent_id');?></td>
                    <td><?php echo $form->dropDownList($model, 'parent_id', $catelist, array('empty'=>'顶级分类','id'=>'parent_id'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'linkurl');?></td>
                    <td><?php echo $form->textField($model, 'linkurl', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'description');?></td>
                    <td><?php echo $form->textArea($model, 'description', array('class'=>'text-input textarea', 'cols'=>50, 'rows'=>3));?>
                    </td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="修改" /></td>
                </tr>
            </table>
            <?php $this->endWidget();?>
		</div>
	</div>
</div>
<div class="clear"></div>