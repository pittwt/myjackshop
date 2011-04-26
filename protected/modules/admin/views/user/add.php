<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>添加文章</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php echo CHtml::beginForm(url(''),'post')?>
            <table class="setting">
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '用户名');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'username', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, 'Email');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'email', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '密码');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'password', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '状态');?></td>
                    <td><?php echo CHtml::activeTextField($model, 'state', array('class'=>'text-input small-input'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '角色');?></td>
                    <td><?php echo CHtml::activeTextArea($model, 'ismanage', array('class'=>'text-input textarea','cols'=>50, 'rows'=>3));?>
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
