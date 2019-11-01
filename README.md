Junichi 是 Typecho 的一套主题模板，Junichi 这个主题的名字由来，是因为博主起名实在没天分，所以就用我宝贝儿子的英文名来命名。

主题从2016年11月14日开始制作，现在只是有形无神，正在进一步优化代码和适配功能。

**下载地址**

https://github.com/siseboy/junichi

**主题预览**

![image](https://uefeng.com/usr/uploads/2016/11/2121536658.png)

## 主题特性

 - 无jQuery，无前端框架，轻量级
 - InstantClick实现PJAX无刷新操作
 - Prismjs代码高亮集成
 - 响应式设计
 - 支持图片CDN
 - 支持社交按钮

## 主题使用

下载后，重命名文件夹为junichi，然后放到typecho里的theme目录内，进入typecho后台，外观，启用即可。

## 外观设置

进入主题外观设置

依次是标语，开启Pjax和的社交链接

然后是图片CDN，推荐使用七牛云镜像

主题背景图和头像请直接替换images目录下的图片

缩略名命名为about，建立关于单页，

选择 Archives 的页面模板，缩略名命名为archives，建立归档页，

建立缩略名命名为 links 的友链页面。

**最后一次更新（2019年11月1日）**

友链页面内容，可按照下面示例获得和我一样的友链效果。 

```html
<ul class="links">
	<li><i class="iconfont icon-https"></i><a href="https://uefeng.com/" target="_blank">有意</a>
	    <span>IT 民工的折腾记录</span>
	</li>
	<li><i class="iconfont icon-no-https"></i><a href="https://uefeng.com/" target="_blank">有意</a>
	    <span>IT 民工的折腾记录</span>
	</li>
</ul>
```
