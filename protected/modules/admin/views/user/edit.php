<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改用户信息</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php echo CHtml::beginForm('','post')?>
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
                    (留空将不作修改)</td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '状态');?></td>
                    <td><?php echo CHtml::activeRadioButtonList($model, 'state', User::$states); ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '角色');?></td>
                    <td><?php echo CHtml::activeRadioButtonList($model, 'ismanage', User::$userRole); ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '上次登录时间');?></td>
                    <td><?php echo date('Y-m-d H:i:s', $model->last_login_time); ?></td>
                </tr>
                <tr>
                    <td><?php echo CHtml::activeLabel($model, '上次登录IP');?></td>
                    <td><?php echo $model->last_login_ip; ?></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><?php echo CHtml::submitButton('submit', array('class'=>'button', 'value'=>'修改用户信息'));?></td>
                </tr>
            </table>
            <?php echo CHtml::endForm();?>
		</div>
	</div>
</div>
<div class="clear"></div>
