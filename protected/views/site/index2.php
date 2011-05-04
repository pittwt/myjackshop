<div class="f80px fb ac"><img src="<?php echo resBu('images/logo.jpg');?>" title="看美女,看帅哥,看电影,看笑话_看什么有什么" /><span class="f12px">2011.01.23</span></div>
<div class="list">
	<div class="f60px fb fl item ar cred"><?php echo l('看美女', url('album/meinv')); ?></div>
	<div class="f60px fb fl item al ma-l20px border-gray">看帅哥</div>
	<div class="clear"></div>
</div>
<div class="list">
	<div class="f60px fb fl item ar border-gray">看笑话</div>
	<div class="f60px fb fl item al ma-l20px border-gray">看电影</div>
	<div class="clear"></div>
</div>
<div class="ma-t20px cgray">
	<div>友情链接：</div>
	<div class="friendlink">
	<?php foreach ($friendlink as $k=>$f):?>
		<?php echo l($f->name, $f->linkurl, array('target'=>'_blank')); ?>
	<?php endforeach;?>
	</div>
</div>