<?php
namespace Home\Service;
interface IArticleService{
  /**
  *批量获取Articles
  *@param $limit
  *@param $offset
  *@return Article
  */
  function getArticles($limit,$offset);
}
?>
