<?php
namespace Home\Service\impl;
use Home\Dto\Other;
use Home\Service\IUserService;
use Home\Dto\User;
use Home\Service\core\BaseService;

class UserService extends BaseService implements IUserService{

  private $usermodel;

/**
*构造函数初始化usermodel
*
*/
  function __construct(){
    $this->usermodel = M("User");
  }

  public  function getBaseInfo($uid){
      $user =  $this->usermodel->where("id = %d",$this->filter($uid))->find();
      return new User($user['id'],$user['username'],$user['signature'],$user['avatarurl']);
  }
  
    public function getOtherInfo($uid,$typeService,$tagService,$articleService){

        return new Other($typeService->countType(),$tagService->countTag(),$articleService->countArticles());
        
    }



}



 ?>
