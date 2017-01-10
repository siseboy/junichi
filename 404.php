<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="shortcut icon" href="<?php $this->options->themeUrl('images/favicon.ico'); ?>">
        <title>请求的页面不存在</title>
        <style>
        body{
            margin:0;padding:0;
            font-family: Lato, Helvetica Neue, Arial, PingFang SC, Hiragino Sans GB, STHeiti, Microsoft YaHei, WenQuanYi Micro Hei, sans-serif;
        }
        a, button.submit {
            color:#6E7173;
            text-decoration:none;
            -webkit-transition:all .1s ease-in;
            -moz-transition:all .1s ease-in;
            -o-transition:all .1s ease-in;
            transition:all .1s ease-in;
        }

        .body404{
            position: absolute;
            height: 100%;
            width: 100%;
            background:#fff;
            background-size: auto 100%;
            text-shadow:1px 1px 0 #fff;
        }
        .body-about .body404{
            background:#fff;
        }
        .site-name404 {
            margin: 0 auto;
            text-align: center;
            letter-spacing: 2px;
            font-size: 150px;
            color:#444;
        }
        .site-name404 h1{
            margin: 0 0 10px;
            font-size:50px;
            line-height:1.2;
        }
        .title404 span{
            font-size: 15px;
            width: 2px;
        }
        .site-name404 i {
            font-style: normal;
        }
        .title404 p{
            font-size: 20px;
            line-height:1.5;
            margin:0;
            color:#444;
        }
        .info404{
            position: absolute;
            top: 50%;
            text-align: center;
            width: 100%;
            margin-top: -160px;
        }
        .body-about .info404{
            margin-top: -180px;
        }
        #footer404{
            margin-top:30px;
            font-size:10px;
        }
        .index404 {
            margin-top: 24px;
            display: inline-block;
            white-space: nowrap;
            cursor: pointer;
            background: #444;
            letter-spacing: 1px;
            font-size: 14px;
            -moz-user-select: -moz-none;
            -webkit-user-select: none;
            -ms-user-select: none;
            -o-user-select: none;
            user-select: none;
            text-shadow: none;
            border: 1px solid #ccc;
            line-height: 36px;
            text-align: center;
            height: 36px;
            padding: 0 25px;
            border-radius: 16px;
            -webkit-transition-duration: 400ms;
            transition-duration: 400ms;
            background-color: #fff;
            color: #999;
        }
        .index404:hover{
            color: #2479cc;
            border-color: #2479cc;
            outline-style: none;
        }

        </style>
    </head>
    <body>
        <div class="body404">
            <div class="info404">
                <header id="header404" class="clearfix">
                    <div class="site-name404"><i>404</i>
                    </div>
                </header>
                <section>
                    <div class="title404">
                        <p>从前有座山，山里有座庙；</p>
                        <p>庙里有个页面，现在找不到…</p>
                    </div><a href="<?php $this->options->siteUrl(); ?>" class="index404">返回首页</a>
                </section>
                <footer id="footer404">© <?php echo date('Y'); ?> <?php $this->options->title(); ?></footer>
            </div>
        </div>
    </body>
</html>
</html>