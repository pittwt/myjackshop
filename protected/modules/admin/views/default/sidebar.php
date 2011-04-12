<div id="sidebar">
		<div class="separate">

        </div>
    	<ul>
        	<li class="title">系统设置</li>
            <li><a class="current" href="<?php echo $this->createUrl('settings/'); ?>">站点设置</a></li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">地域管理</a></li>
			<li><a href="<?php echo $this->createUrl('settings/friendlink'); ?>">友情链接</a></li>
        </ul>
        <ul>
        	<li class="title">内容管理</li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">文章分类</a></li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">文章评论</a></li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">发布文章</a></li> <!-- Add class "current" to sub menu items also -->
		</ul>
		<ul>
			<li class="title">会员管理</li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">添加会员</a></li>
			<li><a href="<?php echo $this->createUrl('default/start'); ?>">会员组管理</a></li>
		</ul>
</div>
<div class="dwindle" style="display:none;"></div>
