var guidang = {
    URL :{
        baseUrl: function(){
            return "http://localhost:8080/blog/index.php/Home/";
        },
        getG: function(){
            return user.URL.baseUrl()+"Guidang/guidang";
        }
    },
    Operate:{
        getG: function() {
            $.get(guidang.URL.getG(),{},function(data,status){
                if(status){
                    var data = eval("("+data+")");
                    console.log(data);
                    guidang.View.updateG(data);
                }else{
                    $("#top_tip").html("服务器开小差啦！");
                }
            });
        }
    },
    View:{
        updateG:function(data){
            $.each(data,function(k,v){
                $("#guidang_container").append("<div  class='col-md-12' style='font-size:2em;' id='"+k+"'></div>");
                $("#"+k).append("<p class='col-md-12' style='font-size:1em;'><p style='width:0.3em;height:0.3em;background:#999;border-radius:0.5em;float:left;margin-top:0.5em;'></p>&nbsp;"+k+"</p>");
                $.each(v,function(key,value){
                    $("#"+k).append("<li class='col-md-12' style='margin-top:1em;padding:0.2em;margin-bottom:1.5em; border-bottom:dashed 1px #666;color:#666;font-size:0.5em;'><span style='font-size:0.2em;'>"+value.ctime.substr(5,5)+"</span>&nbsp;&nbsp;"+value.title+"</li>");
                });
            });
        }
    } 
};