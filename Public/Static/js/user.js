var user = {
  URL :{
    baseUrl: function(){
      return "http://localhost:8080/blog/index.php/Home/";
    },
    getBaseInfo : function(uid){
      return user.URL.baseUrl()+"User/getuserinfo";
    },
    getOtherInfo : function(){
      return user.URL.baseUrl()+"User/getotherinfo";
    }
  },
  Operate:{
    getBaseInfo: function() {
      user.Operate.getOtherInfo();
      $.get(user.URL.getBaseInfo(1),{},function(data,status){
        if(status){
          var data = eval("("+data+")");
          console.log(data);
          user.View.updateUser(data);
        }else{
          $("#top_tip").html("服务器开小差啦！");
        }
      });
    },
    getOtherInfo:function() {
      $.get(user.URL.getOtherInfo(),{},function(data,status){
        if(status){
          var data = eval("("+data+")");
          console.log(data);
          user.View.updateOther(data);
        }else{
          $("#top_tip").html("服务器开小差啦！");
        }
      });
    }
  },
  View:{
    updateUser:function(data){
        $('#info_name').html(data.username);
        $('#info_signature').html(data.signature);
        $('#info_avatar').attr("src",data.avatarurl);
    },
    updateOther:function(data){
      $('#other_articles').html(data.articlescount);
      $('#other_tags').html(data.tagcount);
      $('#other_types').html(data.typecount);
    }
  }
};
