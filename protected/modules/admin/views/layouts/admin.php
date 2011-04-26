<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php echo CHtml::metaTag('text/html; charset=' . app()->charset, null, 'Content-Type');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->pageTitle;?></title>
<?php
cs()->registerCssFile(resBu("admin/styles/reset.css"));
cs()->registerCssFile(resBu("admin/styles/style.css"));
cs()->registerCssFile(resBu("admin/styles/invalid.css"));

?>
</head>
<body>
    <?php $this->renderPartial('../default/top');?>
	<div id="main">
	<?php $this->renderPartial('../default/sidebar');?>
    
    <?php echo $content?>
    
    <?php $this->renderPartial('../default/foot');?>
</div>
</body>
<?php
cs()->registerCoreScript('jquery');
cs()->registerScriptFile(resBu('scripts/global.js'), CClientScript::POS_END);
cs()->registerScriptFile(resBu('admin/scripts/admin.configuration.js'), CClientScript::POS_END);
cs()->registerScriptFile(resBu('admin/scripts/facebox.js'), CClientScript::POS_END);
cs()->registerScriptFile(resBu('admin/scripts/jquery.wysiwyg.js'), CClientScript::POS_END);
?>
</html>
