<div id="top">
	<div class="logo">
    	<img src="<?php echo resBu("admin/images/logo2.png")?>" />
    </div>
    <div class="top-right">
    	<?php echo Yii::app()->session['username'];?></a> | 网站首页 | <a href="<?php echo $this->createUrl('default/logout'); ?>">退出</a>
    </div>
</div>