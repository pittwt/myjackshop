<body>
	<?php include(dirname(__FILE__).'./../default/top.php');?>
	<div id="main">
	<?php include(dirname(__FILE__).'./../default/sidebar.php');?>
		<div id="main-content">
			<div class="content-box none-border"><!-- Start Content Box -->
				<div class="content-box-content none-border">
                    	<table class="setting">
							<tr>
								<th>链接名称</th>
								<th>连接网址</th>
								<th>链接介绍</th>
								<th>链接名称</th>
								<th>显示</th>
								<th>操作</th>
							</tr>
							<?php foreach():?>
							<tr class="none-bg">
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<?php endforeach;?>
                        </table>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<?php include(dirname(__FILE__).'./../default/foot.php');?>
	</div>
    </body>