<div id="main-content">
	<div class="content-box none-border">
		<div class="content-title">
			<h4>友情链接</h4>
		</div>
		<div class="content-box-content none-border tabrow">
            <form method="post" action="" name="EditFriendlink">
            <table class="setting">
                <tr>
                    <td>连接名称</td>
                    <td><input class="text-input small-input" value="<?php echo CHtml::encode($friendlink->name); ?>" type="text" name="friendlink[name]" /></td>
                </tr>
                <tr>
                    <td>连接网址</td>
                    <td><input class="text-input small-input" value="<?php echo CHtml::encode($friendlink->linkurl); ?>" type="text" name="friendlink[linkurl]" /></td>
                </tr>
                <tr>
                    <td>排序</td>
                    <td><input class="text-input small-input" value="<?php echo CHtml::encode($friendlink->order); ?>" type="text" name="friendlink[order]" /></td>
                </tr>
                <tr>
                    <td>状态</td>
                    <td>
                    <input value="1"<?php echo $friendlink->isvalid ? ' checked="checked"' : '' ;?> type="radio" name="friendlink[isvalid]" />显示
                    <input value="0"<?php echo $friendlink->isvalid ? '' : ' checked="checked"' ;?> type="radio" name="friendlink[isvalid]" />不显示
                    </td>
                </tr>
                <tr>
                    <td>链接介绍</td>
                    <td><textarea class="text-input textarea" type="text" name="friendlink[description]" /><?php echo CHtml::encode($friendlink->description); ?></textarea></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input class="button" type="submit" value="修改" /></td>
                </tr>
            </table>
            </form>
		</div>
	</div>
</div>
<div class="clear"></div>
