<?php
namespace Home\Service\impl;
use Home\Exception\ArticleNotFoundException;
use Home\Service\IArticleService;
use Home\Dto\Article;
use Home\Service\core\BaseService;

class ArticleService extends BaseService implements IArticleService{

  private $articleModel;

function  __construct(){
  $this->articleModel = M("Articles");
}

  public function getArticles($limit,$offset,$typeService){
     $result = $this->articleModel->limit($limit,$offset)->select();
      $articlesList = array();
      foreach ($result as $key => $value) {
        $type = $typeService->getTypeNameById($value['tagid']);
        $article = new Article($value['id'],$value['title'],mb_substr($value['content'],1,256,"utf-8")."...",$value['ctime'],$type,$value['count']);

        array_unshift($articlesList,$article);
      }
      return $articlesList;
  }
    public function getArticle($id,$typeService){
        $value =  $this->articleModel->where("id = %d",$this->filter($id))->find();

        if($value==null){
            throw new ArticleNotFoundException("文章 ".$id." 找不到!");
        }else {
            $type = $typeService->getTypeNameById($value['typeid']);
            return new Article($value['id'], $value['title'], $value['content'], $value['ctime'], $type, $value['count']);
        }
    }
    public function countArticles(){
        return $this->articleModel->count();
    }
}



?>
