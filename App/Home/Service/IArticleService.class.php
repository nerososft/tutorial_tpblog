<?php
namespace Home\Service;
use Home\Dto\Article;

interface IArticleService{
  /**
  *批量获取Articles
  *@param $limit
  *@param $offset
  *@return Article
  */
  function getArticles($limit,$offset,$typeService);

  /**
   * 获取详情
   * @param $id
   * @return mixed
   * @return Article
   */
  function getArticle($id,$typeService);

  /**
   * @return mixed
   */
  function countArticles();


  /**
  *计数某类文章
  */
  function countByTypeId($typeid);


  /**
   * @return mixed文章归档
   */
  function guidang();
}
?>
