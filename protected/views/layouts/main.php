<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo CHtml::metaTag('text/html; charset=' . app()->charset, null, 'Content-Type');?>
<title><?php echo $this->pageTitle . ' - ' . param('siteKeywords') . '_' . app()->name . 'My-yiicms';?></title>
<?php
echo CHtml::metaTag('My-yiicms', 'Author');
echo CHtml::metaTag('My-yiicms', 'Generator');
echo CHtml::metaTag('Copyright (c) 2010 My-yiicms. All Rights Reserved.', 'CopyRight');
echo CHtml::linkTag('shortcut icon', 'image/x-icon', '/favicon.ico');
echo CHtml::script('RESBU = \'' . resBu() . '\';');
?>
</head>
<body>
<?php $this->renderPartial('../site/header');?>

<?php echo $content;?>

<?php $this->renderPartial('../site/footer');?>
</body>
</html>
<?php
cs()->registerCssFile(resBu('style/style.css'), 'screen');

cs()->registerCssFile(resBu('style/superfish.css'), 'screen');
cs()->registerScriptFile(resBu('script/jquery.min.js'), CClientScript::POS_HEAD);
cs()->registerScriptFile(resBu('script/jquery_tabs.js'), CClientScript::POS_HEAD);
cs()->registerScriptFile(resBu('script/superfish.js'), CClientScript::POS_HEAD);
cs()->registerScriptFile(resBu('script/script.js'), CClientScript::POS_HEAD);
?>