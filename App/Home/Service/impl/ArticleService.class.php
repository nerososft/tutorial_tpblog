<?php
namespace Home\Service\impl;
use Home\Service\IArticleService;
use Home\Dto\Article;
use Home\Service\core\BaseService;

class ArticleService extends BaseService implements IArticleService{

  private $articleModel;

function  __construct(){
  $this->articleModel = M("Articles");
}

  public function getArticles($limit,$offset){
     $result = $this->articleModel->limit($limit,$offset)->select();
      $articlesList = array();
      // $returnjson = '[';
      foreach ($result as $key => $value) {
        
        $article = new Article($value['id'],$value['title'],$value['content'],$value['ctime'],$value['tag'],$value['count']);

        array_unshift($articlesList,$article);

        // if($key!=(count($result)-1)){
        //   $returnjson.=$article->__toString().",";
        // }else{
        //     $returnjson.=$article->__toString();
        // }
      }

      // $returnjson.="]";
      return $articlesList;
  }
}



?>
