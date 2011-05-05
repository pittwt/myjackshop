<div id="header">
<div id="header_content">
    <div class="logo">
      <h1><a href="#">My yiicms</a></h1>
    </div>
    <!--/logo -->
  <div class="rss">
    <div class="icon"><a href="#"><img src="<?php echo resBu()?>images/rss_1.gif" alt="picture" width="16" height="16" /></a> <a href="#"><img src="<?php echo resBu()?>images/rss_2.gif" alt="picture" width="16" height="16" /></a> <a href="#"><img src="<?php echo resBu()?>images/rss_3.gif" alt="picture" width="16" height="16" /></a> <a href="#"><img src="<?php echo resBu()?>images/rss_4.gif" alt="picture" width="16" height="16" /></a> <a href="#"><img src="<?php echo resBu()?>images/rss_5.gif" alt="picture" width="16" height="16" /></a> <a href="#"><img src="<?php echo resBu()?>images/rss_6.gif" alt="picture" width="16" height="16" /></a></div>
    Just  by My-yiicms weblog.</div>
    <!--/rss -->
    <div class="clr"></div>
    <div class="topnav">
      <ul>
        <li<?php if($this->id == 'site' && $this->action->id == 'index'){echo ' class="current_page_item"';}?>><a href="#"><span>首页</span></a></li>
        <li><a href="#"><span>关于我们</span></a></li>
        <li><a href="#"><span>分类</span></a></li>
      </ul>
      <div class="clr"></div>
    </div>
    <!--/topnav -->
    <form method="get" id="searchform" action="">
      <fieldset id="search">
        <span>
        <input type="text" value="Search..." class="left" onclick="this.value='';" name="s" id="s" />
        <input name="searchsubmit" type="image" src="<?php echo resBu()?>images/search.gif" value="搜索" id="searchsubmit" class="btn right" />
        </span>
      </fieldset>
    </form>
    <!--/searchform -->
    <div class="clr"></div>
  </div>
  </div>