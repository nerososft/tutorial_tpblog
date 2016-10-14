var user = {
  URL :{
    baseUrl: function(){
      return "http://localhost:8080/blog/index.php/Home/";
    },
    getBaseInfo : function(uid){
      return user.URL.baseUrl()+"User/getuserinfo";
    }
  },
  Operate:{
    getBaseInfo: function() {
      $.get(user.URL.getBaseInfo(1),{},function(data,status){
        if(status){
          var data = eval("("+data+")");
          console.log(data);
          user.View.updateUser(data);
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
    }
  }
}
