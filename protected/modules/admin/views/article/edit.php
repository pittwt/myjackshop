
<script type="text/javascript" src="<?php echo resBu('xheditor/xheditor.min.js?v=1.0.0-final');?>"></script>
<script type="text/javascript">
var introeditor;
$(function(){
	introeditor=$("#description").xheditor({skin:'vista',tools:"Cut,Copy,Paste,Pastetext,Separator,Blocktag,Fontface,FontSize,Bold,Italic,Underline,Strikethrough,FontColor,BackColor,SelectAll,Removeformat,Separator,Align,List,Outdent,Indent,Separator,Link,Unlink,Img,Table,Separator,Source,Fullscreen,About"});
});
</script>
<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>修改文章分类</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <?php $form=$this->beginWidget('CActiveForm',array('htmlOptions'=>array('enctype'=>'multipart/form-data'))); ?>
            <table class="setting">
                <tr>
                    <td><?php echo $form->labelEx($model, 'title'); ?></td>
                    <td><?php echo $form->textField($model, 'title',array('maxlength'=>255,'class'=>'text-input small-input')); ?>
                    <?php echo $form->error($model,'title'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'cat_id');?></td>
                    <td><?php echo $form->dropDownList($model, 'cat_id', $catelist, array('empty'=>'顶级分类','id'=>'cat_id'));?>
                    <?php echo $form->error($model,'cat_id'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'thumb'); ?></td>
                    <td><img width="100" height="100" src="<?php echo sbu().'/'.$model->thumb?>" />
                    <?php echo $form->fileField($model, 'thumb'); ?>
                    <?php echo $form->error($model,'thumb'); ?>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'order');?></td>
                    <td><?php echo $form->textField($model, 'order', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'order'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'linkurl');?></td>
                    <td><?php echo $form->textField($model, 'linkurl', array('class'=>'text-input small-input'));?>
                    <?php echo $form->error($model,'linkurl'); ?></td>
                </tr>
                <tr>
                    <td><?php echo $form->labelEx($model, 'description');?></td>
                    <td><?php echo $form->textArea($model, 'description', array('class'=>'text-input textarea', 'id'=>'description', 'cols'=>80, 'rows'=>3));?>
                    <?php echo $form->error($model,'description'); ?></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="修改" /></td>
                </tr>
            </table>
            <?php $this->endWidget();?>
		</div>
	</div>
</div>
<div class="clear"></div>

