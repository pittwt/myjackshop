<div id="page">
  <!--/header -->
  <div id="columns">
    <div id="centercol">
     <!-- <div class="box post" id="post-41">
        <div class="content">
          <div class="pic fl"><a href="#" rel="bookmark"><img src="<?php echo resBu()?>images/img_1.jpg" alt="Post Pic" width="234" height="234" /></a></div>
          <div class="post-title">
            <h2>HTML静态化</h2>
          </div>
         
          <div class="social-links">
            <div class="post-date">On 02.05.09, In <a href="#">Tutorials, Preview, Tutorials, Preview, Tutorials, Preview</a> by <a href="#">TemplateAccess</a> </div>
            
          </div>
          
          <div class="post-excerpt">
            <p>　　其实大家都知道，效率最高、消耗最小的就是纯静态化的html页面，所以我们尽可能使我们的网站上的页面采用静态页面来实现，这个最简单的方法其实也是 最有效的方法。但是对于大量内容并且频繁更新的网站，我们无法全部手动去挨个实现，于是出现了我们常见的信息发布系统CMS，像我们常访问的各个门户站点 的新闻频道，甚至他们的其他频道，都是通过信息发布系统来管理和实现[...]</p>
          </div>
          
          <div class="clr"></div>
          <div class="post-commets"><a href="#" title="View Comments" class="font-sm">23 comments</a></div>
          
        </div>
        
      </div>
      
      <div class="clr"></div>-->
      <div class="article">
      	<ul>
        <?php foreach($article as $item):?>
        	<li>
            	<div class="article_title"><?php echo l($item->title,array('site/info','id'=>$item->id));?></div>
                <div class="article_info">
                	<span class="left"><a href="#"><?php echo $item->category->name;?></a></span>
                    <span class="right">
                        <?php if($item->commentCount > 0){?>
                                <a href="#"><?php echo $item->commentCount;?></a> 条评论
                        <?php }else{?>
                                没有评论
                        <?php }?>| 编辑
                    </span>
                </div>
                <div class="article_content"><?php echo $item->description;?></div>
            </li>
        <?php endforeach;?>
        
           <!-- <li>
            	<div class="article_title">N900落选 全球10大智能3G手机排行榜</div>
                <div class="article_info">
                	<span class="left">腾讯数码讯 </span>
                    <span class="right">没有评论 | 编辑</span>
                </div>
                <div class="article_content">腾讯数码讯 借助开放式的操作系统和无限可能的扩展能力，智能手机不仅成为了手机巨头们激烈竞争的主战场，而且也让越来越多的消费者将智能手机作为未来购机的首要选 择。只是在众多搭载不同系统的智能手机中，那些怎样才是真正值得我们选择的智能产品或许难以找到一个标准答案。因此，来自专业媒体公布的智能手机的评选排 名，在某种程度上可以让我们作为一定的参考。接下来，就让我们通过知名英国媒体《stuff》最新评选的全球十大智能手机排名，一起来看看在专业媒体眼中 的10款最佳智能手机都有那些不同寻常之处吧</div>
            </li>
            <li>
            	<div class="article_title">N900落选 全球10大智能3G手机排行榜</div>
                <div class="article_info">
                	<span class="left">腾讯数码讯 </span>
                    <span class="right">评论 | 编辑</span>
                </div>
                <div class="article_content">腾讯数码讯 借助开放式的操作系统和无限可能的扩展能力，智能手机不仅成为了手机巨头们激烈竞争的主战场，而且也让越来越多的消费者将智能手机作为未来购机的首要选 择。只是在众多搭载不同系统的智能手机中，那些怎样才是真正值得我们选择的智能产品或许难以找到一个标准答案。因此，来自专业媒体公布的智能手机的评选排 名，在某种程度上可以让我们作为一定的参考。接下来，就让我们通过知名英国媒体《stuff》最新评选的全球十大智能手机排名，一起来看看在专业媒体眼中 的10款最佳智能手机都有那些不同寻常之处吧</div>
            </li>-->
        </ul>
      </div>
      <div class="pagenavi">
        <?php $this->widget('CLinkPager', array(
    		'pages' => $pages,
    	    'header' => '',
    	    'firstPageLabel' => '首页',
    	    'lastPageLabel' => '末页',
    	    'nextPageLabel' => '下一页',
    	    'prevPageLabel' => '上一页',
            'cssFile' =>resBu('style/pagenavi.css'),
    	));?>
      </div>
    </div>
    <!--/centercol -->
    <div id="rightcol">
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
      <?php $this->widget('FriendLinkSidebar');?>
    </div>
    <!--/rightcol -->
    <div class="clr"></div>
  </div>
  <!--/columns -->
    <div class="clr"></div>
</div>
<!--/page -->

