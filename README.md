###更新（2017年1月19日）

- 增加对 Hanny 友链插件的支持(没用插件的直接编辑源文件来修改友链)
- 修正某些小bug

PS：因为友链插件输出的原因，如果要和本站一样效果，需要修改插件来实现。

1、修改 Links 插件目录 Plugin.php 文件的 267行 替换为 

```php
        } else if ($pattern == "SHOW_JUNICHI") {
			$pattern = "<li><a href=\"{url}\" target=\"_blank\">{name}</a><span class=\"more\">（{title}）</span></li>\n";
        }
```
2、修改主题目录 page-links.php 文件的 18行 替换为

```php
        <ul class="links iconfont">
        <?php Links_Plugin::output('SHOW_JUNICHI',0,'https'); ?>
        </ul>
        <ul>
        <?php Links_Plugin::output('SHOW_JUNICHI',0,'http'); ?>
        </ul> 
```
3、添加友链的时候 若是 https 的链接添加链接分类为 https，否则链接分类为 http。

###更新（2017年1月16日）

根据网友要求更新一些细节，例如

- 增加评论锚点；
- 增加外观后台设置图片设置和社交链接；
- Favicon 图标和头像分开设置；
- 主题样式 style.css 细节修改；
- 替换了主题默认背景图和头像，和本站区分。

<hr>

Junichi 是 Typecho 的一套主题模板，Junichi 这个主题的名字由来，是因为博主起名实在没天分，所以就用我宝贝儿子的英文名来命名。

主题从2016年11月14日开始制作，现在只是有形无神，正在进一步优化代码和适配功能。

下载地址：

https://github.com/siseboy/junichi

主题预览：

![image](https://oh34w4h6l.qnssl.com/screenshot.jpg?imageView3)

###主题特性

 - 无jQuery，无前端框架，轻量级
 - InstantClick实现PJAX无刷新操作
 - Prismjs代码高亮集成
 - 响应式设计
 - 支持图片CDN
 - 支持社交按钮

###主题启用

下载后，重命名文件夹为junichi，然后放到typecho里的theme目录内，进入typecho后台，外观，启用即可。

###主题设置

进入主题外观设置

依次是标语，开启Pjax和的社交链接

然后是图片CDN，推荐使用七牛云镜像

缩略名命名为about，建立关于单页，

选择 Archives 的页面模板，缩略名命名为archives，建立归档页，

选择 Links 的页面模板，缩略名命名为links，建立友链页面。