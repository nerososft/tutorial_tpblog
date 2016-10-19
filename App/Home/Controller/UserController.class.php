<?php
namespace Home\Controller;
use Home\Service\impl\ArticleService;
use Home\Service\impl\TagService;
use Home\Service\impl\TypeService;
use Think\Controller;
use Home\Service\impl\UserService;
class UserController extends Controller{
  public function getuserinfo(){
    $userservice = new UserService();
    $user =  $userservice->getBaseInfo("1");
    echo $user->__toString();
  }

  public function getotherinfo(){
    $userservice = new UserService();
    $typeService = new TypeService();
    $tagService  = new TagService();
    $articleService = new ArticleService();

    echo $userservice->getOtherInfo(1,$typeService,$tagService,$articleService)->__toString();
  }
}


 ?>
