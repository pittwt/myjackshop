<div class="box">
        <div class="wtitle">
          <h2>友情链接</h2>
          <div class="clr"></div>
          <div class="content">
            <ul class="rlist">
            <?php foreach($friendlink as $item):?>
                <li><a href="<?php echo $item->linkurl;?>"><?php echo $item->name;?></a></li>
            <?php endforeach;?>
            </ul>
          </div>
        </div>
      </div>