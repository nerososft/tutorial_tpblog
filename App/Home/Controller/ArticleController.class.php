<?php
namespace Home\Controller;
use Think\Controller;
use Home\Service\impl\ArticleService;
class ArticleController extends Controller{
  public function getarticles(){
    $articleService = new ArticleService();
    echo json_encode($articleService->getArticles(0,5),JSON_UNESCAPED_UNICODE);

  }
}


 ?>
