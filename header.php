<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!doctype html>
<html>
<head>
<meta charset="<?php $this->options->charset(); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta name="renderer" content="webkit">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="keywords" content="<?php $this->keywords() ?>" />
<?php $this->header('keywords=&generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
<!--[if lt IE 9]>
	<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
	<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php if($this->options->favicon): $this->options->favicon(); else: $this->options->themeUrl('images/touxiang.png');endif; ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css?v=170120'); ?>">
<title><?php $this->archiveTitle(array(
	'category'  =>  _t(' %s '),
	'search'    =>  _t(' %s '),
	'tag'       =>  _t(' %s '),
	'author'    =>  _t(' %s ')
	), '', ' - '); ?><?php $this->options->title(); ?></title>
</head>
<body>
<!--[if lt IE 9]>
	<div class="browsehappy" role="dialog">你正在使用一个过时的浏览器，为了正常的访问, 请<a href="http://browsehappy.com/" target="_blank">升级你的浏览器</a>以查看此页面。</div>
<![endif]-->
<div class="container">
    <div class="left-col" style="background-image: url(<?php if($this->options->iosicon): $this->options->iosicon(); else: $this->options->themeUrl('images/left-bg.jpg');endif; ?>);">
        <header id="header">
            <div class="profilepic"><a href="/" style="background-image: url(<?php if($this->options->touxiang): $this->options->touxiang(); else: $this->options->themeUrl('images/touxiang.png');endif; ?>);"></a></div>
            <h1><a href="/"><?php $this->options->title() ?></a></h1>
            <p class="subtitle"><?php $this->options->slogan(); ?></p>
            <nav id="main-nav">
                <ul>
                   <li><a href="<?php $this->options->siteUrl(); ?>"><i class="iconfont icon-home"></i>首页</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>about.html"><i class="iconfont icon-aboutus"></i>关于</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>archives.html"><i class="iconfont icon-collect"></i>归档</a></li>
                   <li><a href="<?php $this->options->siteUrl(); ?>links.html"><i class="iconfont icon-links"></i>友链</a></li>
                </ul>
            </nav>
            <nav id="sub-nav">
                <div class="social">
                    <?php if ($this->options->socialgithub): ?>
                    <a class="social github" target="blank" href="<?php $this->options->socialgithub(); ?>"><i class="iconfont icon-github"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialgoogle): ?>
                    <a class="social google-plus" target="blank" href="<?php $this->options->socialgoogle(); ?>"><i class="iconfont icon-google"></i></a>
                    <?php endif; ?>
                    <a class="social rss" target="blank" href="<?php $this->options->siteUrl(); ?>feed/"><i class="iconfont icon-rss"></i></a>
                    <?php if ($this->options->socialtwitter): ?>
                    <a class="social twitter" target="blank" href="<?php $this->options->socialtwitter(); ?>"><i class="iconfont icon-twitter"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialwechat): ?>
                    <a id="wechat-toggle" class="social wechat" href="javascript:"><i class="iconfont icon-wechat"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialqq): ?>
                    <a class="social qq" target="blank" href="tencent://message/?uin=<?php $this->options->socialqq(); ?>&Site=junichi&Menu=yes"><i class="iconfont icon-qq"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialweibo): ?>
                    <a class="social weibo" target="blank" href="<?php $this->options->socialweibo(); ?>"><i class="iconfont icon-weibo"></i></a>
                    <?php endif; ?>
                    <?php if ($this->options->socialmusic): ?>
                    <a class="social music" target="blank" href="<?php $this->options->socialmusic(); ?>"><i class="iconfont icon-music"></i></a>
                    <?php endif; ?>
                    <a id="search-toggle" class="social search" href="javascript:"><i class="iconfont icon-sousuo"></i></a>
                    <form id="search" method="post" action="/" role="search">
                        <input type="text" class="input" name="s" required="true" placeholder="...Search">
                    </form>
                    <div id="wechat">
                        <img src="<?php $this->options->socialwechat(); ?>" />
                    </div>
                </div>
            </nav>
        </header>
    </div>