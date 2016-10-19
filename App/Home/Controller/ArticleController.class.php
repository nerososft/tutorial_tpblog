<?php
namespace Home\Controller;
use Home\Dto\core\Result;
use Home\Exception\ArticleNotFoundException;
use Home\Service\impl\TypeService;
use Think\Controller;
use Home\Service\impl\ArticleService;
class ArticleController extends Controller{
  public function getarticles(){
    $articleService = new ArticleService();
    $typeService = new TypeService();
    $page = $_GET['page'];
    $offset = 1;
    echo json_encode($articleService->getArticles($page,$offset,$typeService),JSON_UNESCAPED_UNICODE);
  }
  public function detail(){
    $this->display();
  }
  public function getarticle(){
    $articleService = new ArticleService();
    $typeService = new TypeService();
    try {
      $result = new Result(true,200,null, $articleService->getArticle($_GET['id'],$typeService));
      echo $result->__toString();
    }catch(ArticleNotFoundException $e){
      $result = new Result(false, 100, $e->getMessage(),null);
      echo $result->__toString();
    }

  }
}


 ?>
