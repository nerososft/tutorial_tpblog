<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
  <meta charset="utf-8">
  <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <title>博客首页</title>
 </head>
 <body style="background:rgb(245,247,249);padding:0;margin:0;">
   <div class=".container-fluid" style="padding:0;margin:0;width:100%;">
     <div class="row" style="margin:0;padding:0;">
         <div class="col-md-12" style="padding:0;margin:0;">
             <div id="top_tip" class="col-md-1" style="padding:0;height:3px;background:#333;text-align:center;color: #fff;line-height: 1.8em;font-weight: bolder;">
             </div>
         </div>
       <div class="col-md-1">
       </div>
       <div class="col-md-10">
         <div class="col-md-3" style="background:rgb(245,247,249)">
          <div class="col-md-12" style="background:#fff;padding:0px;">
              <div class="col-md-12" style="background:#333;background-size:100% 100%;color:#fff;padding-top:1em;height:8em;">
                  <strong class="col-md-12" style="text-align:center;margin-top:1em;">My Blog!</strong>
                  <p class="col-md-12" style="text-align:center;margin-top:1em;">here is some ...!</p>
              </div>
              <style>
              .nav_normal{
                border-left:solid 2px #fff;
                display:inline-block;height:2.5em;line-height:2.5em;
              }
              .nav_normal:hover{
                display:inline-block;height:2.5em;line-height:2.5em;
                border-left:solid 2px #555;
                background: rgb(249,249,249);
              }
              .nav_active{
                display:inline-block;height:2.5em;line-height:2.5em;
                border-left:solid 2px #555;
                background: rgb(249,249,249);
              }
              *{
              font-family: 微软雅黑;
                  outline: none;
              }
              a{
                color:#333;
              }
              </style>
              <div class="col-md-12" style="background:#fff;padding:0px;padding-top:1em;">
                  <ul class="col-md-12" style="display:inline-block;padding:0px;">
                    <li class="nav_active col-md-12"><span class="glyphicon glyphicon-home"></span>&nbsp&nbsp首页</li>
                    <li class="nav_normal col-md-12"><span class="glyphicon glyphicon glyphicon-th"></span>&nbsp&nbsp分类</li>
                    <li class="nav_normal col-md-12"><span class="glyphicon glyphicon-tasks"></span>&nbsp&nbsp归档</li>
                    <li class="nav_normal col-md-12"><span class="glyphicon glyphicon-tags"></span>&nbsp&nbsp标签</li>
                    <li class="nav_normal col-md-12"><span class="glyphicon glyphicon-magnet"></span>&nbsp&nbsp关于</li>
                    <li class="nav_normal col-md-12"><span class="glyphicon glyphicon glyphicon-search"></span>&nbsp&nbsp搜索</li>
                  </ul>
              </div>
          </div>
          <div class="col-md-12" style="background:#fff;padding:1em;margin-top:1em;">
              <img id="info_avatar" class="col-md-5" src="http://oceanjaya.com/images/default_avatar.jpg" />
              <div class="col-md-5" style="padding:0;">
                <Strong id="info_name" class="col-md-12">Name</Strong>
                <p id="info_signature" class="col-md-12">biu~</p>
              </div>
              <div class="col-md-12" style="padding:0;">
                <div class="col-md-4" style="padding:0;margin-top:1em;border-right:solid 1px #ddd;">
                    <strong id="other_articles" class="col-md-12" style="text-align:center;">7</strong>
                    <p class="col-md-12" style="text-align:center;color:#999;">日志</p>
                </div>
                <div class="col-md-4" style="padding:0;margin-top:1em;border-right:solid 1px #ddd;">
                    <strong id="other_types" class="col-md-12" style="text-align:center;">7</strong>
                    <p class="col-md-12" style="text-align:center;color:#999;">分类</p>
                </div>
                <div class="col-md-4" style="padding:0;margin-top:1em;">
                    <strong id="other_tags" class="col-md-12" style="text-align:center;">7</strong>
                    <p class="col-md-12" style="text-align:center;color:#999;">标签</p>
                </div>
                <div class="col-md-12">
                <hr style="height:1px;border:none;border-top:1px dashed #ddd;margin:0;padding:0;margin-top:1em" />
                <p class="col-md-12" style="text-align:center;color:rgb(252,100,35);margin:0;padding:0;margin-top:0.5em;"><span class="fa fa-rss">&nbsp&nbsp订阅</span></p>
              <hr style="height:1px;border:none;border-top:1px dashed #ddd;margin-top:2.0em;" />
                <style>
                #go_tag{
                  text-align:center;color:#333;padding:0.3em;margin:0;padding-left: 1em;
                }
                #go_tag:hover{
                  background: #eee;border-radius: 0.4em;
                }
                </style>
                <div class="col-md-12" style="padding:0;margin:0;">
                  <div class="col-md-6" style="padding:0;">
                    <p class="col-md-12" id = "go_tag" ><span  style="float:left;" class="fa fa-github"></span><span style="float:left;color:#777;font-size:1em;">&nbspGitHub</span></p>
                    <p class="col-md-12" id = "go_tag" ><span style="float:left;" class="fa fa-twitter"></span><span style="float:left;color:#777;font-size:1em;">&nbspTwitter</span></p>
                    <p class="col-md-12" id = "go_tag" ><span style="float:left;" class="fa fa-fire"></span><span style="float:left;color:#777;font-size:1em;">&nbsp知乎</span></p>
                  </div>
                  <div class="col-md-6" style="padding:0;">
                    <p class="col-md-12" id = "go_tag" ><span style="float:left;" class="fa fa-weibo"></span><span style="float:left;color:#777;font-size:1em;">&nbsp微博</span></p>
                    <p class="col-md-12" id = "go_tag" ><span style="float:left;" class="fa fa-hand-spock-o"></span><span style="float:left;color:#777;font-size:1em;">&nbspV2EX</span></p>
                    <p class="col-md-12" id = "go_tag" ><span style="float:left;" class="fa fa-book"></span><span style="float:left;color:#777;font-size:1em;">&nbsp豆瓣</span></p>
                  </div>
                </div>
                </div>
                <div class="col-md-12" style="margin-top:1em;padding:0;">
                    <p class="col-md-12" style="text-align:left;"><strong>友情链接</strong></p>
                    <p class="col-md-12"><a href="http://www.twt.edu.cn">天外天</a></p>
                </div>
              </div>
          </div>
         </div>
         <style>
         #bt_readmore{
           border:solid 2px #555; border-radius:3px;background:#fff;padding-left:1em;padding-right:1em;padding-top:0.3em;padding-bottom:0.3em;
         }
         #bt_readmore:hover{
           transition: all 0.5s;
           border: solid 2px #111;
           background:#111;
           color:#fff;
         }
         </style>

         <div class="col-md-9" style="background:#fff;padding-top:5em;">

             <div class="col-md-12" id="article_container" style="padding: 0;margin: 0;">

             </div>
             <div class="col-md-12" id="load_more">
                 <p class="col-md-12" style="text-align:center;"><img src="/blog/Public/Static/img/product-fleches.png"/></p>
             </div>

         </div>
       </div>
       <div class="col-md-1">
       </div>
     </div>
   </div>
 </body>
 <script src="/blog/Public/Static/js/user.js"></script>
 <script src="/blog/Public/Static/js/articles.js"></script>
 <script>
//$.ready(function(){
  user.Operate.getBaseInfo();
  articles.Listener.listen();

//});
 </script>
</html>