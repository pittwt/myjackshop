<body>
	<?php $this->renderPartial('../default/top');?>
	<div id="main">
	<?php $this->renderPartial('../default/sidebar');?>
		<div id="main-content">
			<div class="content-box none-border">
				<div class="content-title">
					<h4>友情链接</h4>
				</div>
				<div class="content-box-content none-border tabrow">
                    <?php echo CHtml::beginForm('addfriendlink','post')?>
                    <table class="setting">
                        <tr>
                            <td><?php echo CHtml::activeLabel($friendlink, '连接名称');?></td>
                            <td><?php echo CHtml::activeTextField($friendlink, 'name', array('class'=>'text-input small-input'));?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::activeLabel($friendlink, '连接网址');?></td>
                            <td><?php echo CHtml::activeTextField($friendlink, 'linkurl', array('class'=>'text-input small-input'));?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::activeLabel($friendlink, '排序');?></td>
                            <td>
                            <?php echo CHtml::activeTextField($friendlink, 'order', array('class'=>'text-input small-input'));?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::activeLabel($friendlink, '状态');?></td>
                            <td><?php echo CHtml::activeRadioButtonList($friendlink,'isvalid',Friendlink::$static, array('separator'=>'&nbsp;'));?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo CHtml::activeLabel($friendlink, '链接介绍');?></td>
                            <td><?php echo CHtml::activeTextArea($friendlink, 'description', array('class'=>'text-input textarea'));?>
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
		<?php $this->renderPartial('../default/foot');?>
	</div>
    </body>