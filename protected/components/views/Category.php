<div class="box">
        <div class="wtitle">
          <h2>分类目录</h2>
          <div class="clr"></div>
        </div>
        <div class="content">
          <ul class="rlist">
            <?php foreach($category as $item):?>
                <li><?php echo $item['strpre'];?>&nbsp;<a href="<?php echo $item['id'];?>"><?php echo $item['name'];?></a></li>
            <?php endforeach;?>
            </ul>
        </div>
        <!--/content -->
      </div>
      <!--/box -->