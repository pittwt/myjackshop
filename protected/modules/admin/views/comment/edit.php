<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改评论</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php echo CHtml::beginForm('','post')?>
            <table class="setting">
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '标题');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'title', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '评论用户');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'nick', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '用户邮箱');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'email', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '评论内容');?></td>
                    <td><?php echo CHtml::activeTextArea($model, 'content', array('class'=>'text-input textarea', 'cols'=>50, 'rows'=>3));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '回复');?></td>
                    <td><?php echo CHtml::activeTextArea($model, 'reply', array('class'=>'text-input textarea', 'cols'=>50, 'rows'=>3));?>
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
