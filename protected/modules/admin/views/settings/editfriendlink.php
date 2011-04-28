<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>友情链接</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form = $this->beginWidget('CActiveForm');?>
            <table class="setting">
                <tr>
                    <td><?php echo $form->labelEx($model, 'name');?></td>
                    <td><?php echo $form->textField($model, 'name', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model, 'name')?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'linkurl');?></td>
                    <td><?php echo $form->textField($model, 'linkurl', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model, 'linkurl')?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'order');?></td>
                    <td><?php echo $form->textField($model, 'order', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model, 'order')?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'isvalid');?></td>
                    <td><?php echo $form->radioButtonList($model,'isvalid',Friendlink::$static, array('separator'=>'&nbsp;'));?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'description');?></td>
                    <td><?php echo $form->textArea($model, 'description', array('class'=>'text-input textarea'));?>
                    </td>
                </tr>
                 <tr>
                    <td></td>
                    <td><?php echo CHtml::submitButton('修改友情链接', array('class'=>'button'));?></td>
                </tr>
            </table>
            <?php $this->endWidget();?>
		</div>
	</div>
</div>
<div class="clear"></div>
