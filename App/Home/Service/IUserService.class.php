<?php
namespace Home\Service;

interface IUserService{

  /**
  *获取用户基本信息
  *Param $uid 用户id
  *return User
  */
  function getBaseInfo($uid);


}


 ?>
