/*
 * articles.js
 * 文章
 *
 * @author Nero Yang
 * @email nerosoft@outlook.com.com
 * */
var articles = {
  URL :{
    baseUrl: function(){
      return "http://localhost:8080/blog/index.php/Home/";
    },
    getArticles : function(){
      return articles.URL.baseUrl()+"Article/getarticles";
    },
    getArticle:function(){
        return articles.URL.baseUrl()+"Article/getarticle";
    }
  },
  Operate:{
    getArticles: function(page) {
      $.get(articles.URL.getArticles(),{
        'page':page
      },function(data,status){
          $("#top_tip").css("transition", "all 3s");
          $("#top_tip").attr("class", "col-md-12");
        if(status){
          //noinspection JSDuplicatedDeclaration
            var data = eval("("+data+")");
            console.log(data);
            /*遍历数据*/
          $.each(data,function(k,v){
            articles.View.updateArticles(v);
          });
        }else{
            /* not 200*/
          $("#top_tip").html("服务器开小差啦！");
        }
      });
    },
    getArticle:function (id) {
        $.get(articles.URL.getArticle(),{
            'id':id
        },function(data,status){
            $("#top_tip").css("transition", "all 3s");
            $("#top_tip").attr("class", "col-md-12");
            if(status){
                //noinspection JSDuplicatedDeclaration
                var data = eval("("+data+")");
                console.log(data);
                /*遍历数据*/

                if(data.state==true){
                    $("title").text(data.data.title);
                    articles.View.updateArticle(data.data);
                }else{
                    $("#top_tip").css("transition", "all 0.5s");
                    $("#top_tip").css("background","rgb(234,67,53)");
                    $("#top_tip").css("height","2em");
                    $("#top_tip").css("border-bottom","solid 3px #333");
                    var time = 5;
                    $("#top_tip").html(data.msg+"&nbsp;&nbsp;[该提示会在"+time+"秒后自动关闭]");
                    setInterval(function () {
                        time--;
                        $("#top_tip").html(data.msg+"&nbsp;&nbsp;[该提示会在"+time+"秒后自动关闭]");
                    },1000);
                    setTimeout(function () {
                        $("#top_tip").css("height","3px");
                        $("#top_tip").css("background","#333");
                        $("#top_tip").html("");
                        window.location.href=articles.URL.baseUrl();
                    },5400);
                }
            }else{
                /* not 200*/
                $("#top_tip").html("服务器开小差啦！");
            }
        });
    }
  },
  Utils:{
      gotoDetail:function(id){
          window.location.href = articles.URL.baseUrl()+"Article/detail?id="+id;
      },
      getId:function () {
          var path = window.location.href;
          return path.split("?")[1].substr(3);
      }
  },
  Listener:{
    listen:function() {
        var page = 0;
        for(var i =0;i<4;i++){
            articles.Operate.getArticles(i);
            page = i;
        }
        $("#load_more").click(function () {
            articles.Operate.getArticles(page);
            page++;
        });
    },
    detail:function(){
        articles.Operate.getArticle(articles.Utils.getId());
    }
  },
  View:{
    updateArticles:function(data){
        var item = $('<div class="col-md-12" id="article">'+
            '<div class="col-md-12" style="margin-top:3em;">'+
            '<strong class="col-md-12" style="font-weight:blod;text-align:center;font-size:2em;">'+data.title+'</strong>'+
            '<p class="col-md-12" style="text-align:center;color:#aaa;font-size:0.8em;margin-top:0.5em;">发表于 '+data.ctime+'  |   分类于 <a>'+data.tag+'</a>   |   <a>暂无评论</a>   |   阅读次数 34</p>'+
            '</div>'+
            '<div class="col-md-12" style="margin-top:4em;">'+
            '<p class="col-md-12" style="color:#666;line-height:2em;">'+data.content+'</p>'+
            '<p class="col-md-12" style="text-align:center;margin-top:4em;"><button id="bt_readmore" onclick="javascript:articles.Utils.gotoDetail('+data.id+');" >阅读全文>></button></p>'+
            '</div>'+
            '<div class="col-md-12" style="margin-top:4em;">'+
            '<p class="col-md-12" style="text-align:center;"><hr style="width:5em;"/></p>'+
            '</div>'+
            '</div>').hide();
        $("#article_container").append(item);
        item.slideDown();
    },
      updateArticle:function(data){

          var converter = new showdown.Converter();
          var content   = converter.makeHtml(data.content);

          var item=$('<div class="col-md-12" id="article">'+
              '<div class="col-md-12" style="margin-top:3em;">'+
              '<strong class="col-md-12" style="font-weight:blod;text-align:center;font-size:2em;">'+data.title+'</strong>'+
              '<p class="col-md-12" style="text-align:center;color:#aaa;font-size:0.8em;margin-top:0.5em;">发表于 '+data.ctime+'  |   分类于 <a>'+data.tag+'</a>   |   <a>暂无评论</a>   |   阅读次数 34</p>'+
              '</div>'+
              '<div class="col-md-12" style="margin-top:4em;">'+
              '<p class="col-md-12" style="color:#666;line-height:2em;">'+content+'</p>'+
              '<hr/><p class="col-md-12" style="text-align:center;margin-top:4em;">' +
              '<img src="http://localhost:8080/blog/Public/Static/img/triangle-left-light-grey.png"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="http://localhost:8080/blog/Public/Static/img/triangle-right-light-grey.png"/></p>'+
              '</div>'+
              '<div class="col-md-12" style="margin-top:4em;">'+
              '</div>'+
              '</div>').hide();
          $("#article_container").append(item);
          item.slideDown();
      }
  }
};
