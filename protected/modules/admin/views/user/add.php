<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>添加文章</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form=$this->beginWidget('CActiveForm'); ?>
            <table class="setting">
                <tr>
                    <td><?php echo $form->labelEx($model,'username'); ?></td>
                    <td><?php echo $form->textField($model,'username',array('maxlength'=>255,'class'=>'text-input small-input')); ?>
                    <?php echo $form->error($model,'username'); ?> </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'password');?></td>
                    <td><?php echo $form->textField($model, 'password', array('maxlength'=>15,'class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'password'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model,'Email'); ?></td>
                    <td><?php echo $form->textField($model,'email',array('class'=>'text-input small-input')); ?>
                    <?php echo $form->error($model,'email'); ?>
                    </td>
                </tr>
                
                <tr>
                    <td><?php echo $form->labelEx($model, '状态');?></td>
                    <td><?php echo $form->radioButtonList($model, 'state',User::$states);?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, '角色');?></td>
                    <td><?php echo $form->radioButtonList($model, 'ismanage',User::$userRole);?>
                    </td>
                </tr>
                 <tr>
                    <td></td>
                    <td><?php echo CHtml::submitButton('submit', array('class'=>'button', 'value'=>'添加'));?></td>
                </tr>
            </table>
            <?php $this->endWidget(); ?> 
		</div>
	</div>
</div>
<div class="clear"></div>
