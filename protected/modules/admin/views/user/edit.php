<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改用户信息</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form=$this->beginWidget('CActiveForm'); ?>
            <table class="setting">
                <tr>
                <!--<tr>
                    <td><?php echo $form->labelEx($model,'username'); ?></td>
                    <td><?php echo $form->textField($model,'username',array('maxlength'=>255,'class'=>'text-input small-input')); ?>
                    <?php echo $form->error($model,'username'); ?> </td>
                </tr>-->
                    <td><?php echo $form->labelEx($model, 'username');?></td>
                    <td><?php echo $form->textField($model, 'username', array('maxlength'=>255, 'class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'username'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'email');?></td>
                    <td><?php echo $form->textField($model, 'email', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'email'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'password');?></td>
                    <td><?php echo $form->textField($model, 'password', array('class'=>'text-input small-input'));?>
                    (留空将不作修改)</td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'state');?></td>
                    <td><?php echo $form->radioButtonList($model, 'state', User::$states); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'ismanage');?></td>
                    <td><?php echo $form->radioButtonList($model, 'ismanage', User::$userRole); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'last_login_time');?></td>
                    <td><?php echo date('Y-m-d H:i:s', $model->last_login_time); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'last_login_ip');?></td>
                    <td><?php echo $model->last_login_ip; ?></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><?php echo CHtml::submitButton('submit', array('class'=>'button', 'value'=>'修改用户信息'));?></td>
                </tr>
            </table>
            <?php $this->endWidget();?>
		</div>
	</div>
</div>
<div class="clear"></div>
