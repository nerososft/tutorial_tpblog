<?php
namespace Home\Service;

interface IUserService{

  /**
  *获取用户基本信息
  *Param $uid 用户id
  *return User
  */
  function getBaseInfo($uid);

    /**
     * 获取用户博客相关信息
     *
     */
    function getOtherInfo($uid,$typeService,$tagService,$articleService);


}


 ?>
