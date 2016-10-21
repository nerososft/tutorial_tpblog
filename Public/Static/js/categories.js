var categories = {
    URL :{
        baseUrl: function(){
            return "http://localhost:8080/blog/index.php/Home/";
        },
        getC: function(){
            return user.URL.baseUrl()+"Categories/categories";
        }
    },
    Operate:{
        getC: function() {
            $.get(categories.URL.getC(),{},function(data,status){
                if(status){
                    var data = eval("("+data+")");
                    console.log(data);
                    categories.View.updateC(data);
                }else{
                    $("#top_tip").html("服务器开小差啦！");
                }
            });
        }
    },
    View:{
        updateC:function(data){
            $.each(data,function(k,v){
                var categories_item = $('<span class="categories_item">'+v.typename+'</span><span class="categories_item_count">('+v.count+')</span>').hide();
                $("#categories_container").append(categories_item);
                categories_item.slideDown();
            });
        }
    } 
};