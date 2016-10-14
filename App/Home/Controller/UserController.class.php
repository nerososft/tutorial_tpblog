<?php
namespace Home\Controller;
use Think\Controller;
use Home\Service\impl\UserService;
class UserController extends Controller{
  public function getuserinfo(){
    $userservice = new UserService();
    $user =  $userservice->getBaseInfo("1");
    echo $user->__toString();
  }
}


 ?>
