<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo CHtml::metaTag('text/html; charset=' . app()->charset, null, 'Content-Type');?>
<title><?php echo $this->pageTitle . ' - ' . param('siteKeywords') . '_' . app()->name . '有什么';?></title>
<?php
echo CHtml::metaTag('KanShen.Me', 'Author');
echo CHtml::metaTag('KanShen.Me', 'Generator');
echo CHtml::metaTag('Copyright (c) 2010 KanShen.Me. All Rights Reserved.', 'CopyRight');
echo CHtml::linkTag('shortcut icon', 'image/x-icon', '/favicon.ico');
echo CHtml::script('RESBU = \'' . resBu() . '\';');
?>
</head>
<body>
<div class="wrapper">
<?php echo $content;?>
<div class="ma-t10px"><?php echo $this->renderPartial('//public/statistics');?></div>
</div>
</body>
</html>
<?php
cs()->registerCssFile(resBu('style/base.inc.css'), 'screen');
cs()->registerCssFile(resBu('style/main.css'), 'screen');
cs()->registerScriptFile(resBu('script/jquery.min.js'), CClientScript::POS_HEAD);
?>