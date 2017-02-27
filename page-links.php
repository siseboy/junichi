<?php
    /**
    * links
    *
    * @package custom
    */
    $this->need('header.php'); ?>

	<div class="mid-col">
		<div class="mid-col-container">
			<div id="content" class="inner">
				<article class="post post-archives">
					<h1 class="title"><?php $this->title() ?></h1>
					<div class="entry-content">	
                    	<?php $all = Typecho_Plugin::export();?>
                        <?php if (array_key_exists('Links', $all['activated'])) : ?>
                            <ul>
                            <?php Links_Plugin::output('SHOW_TEXT'); ?>
                            </ul>                       
                            <?php else : ?>
                            <ul>
                            <!-- 不带 Https 图标需要删除 <i class="iconfont icon-https"></i>  -->
					           <li><i class="iconfont icon-https"></i><a href="https://uefeng.com/" target="_blank">有意</a><span class="more">（IT 民工的折腾记录）</span></li>
                            </ul>
				        <?php endif; ?> 
					</div>
				</article>
			</div>
		</div>


<?php $this->need('footer.php'); ?>
