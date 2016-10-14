<?php
namespace Home\Dto;
use Home\Dto\BaseDto;

class Article extends BaseDto{
  var $id;
  var $title;
  var $content;
  var $ctime;
  var $tag;
  var $count;
  function __construct($id,$title,$content, $ctime,$tag,$count){
    $htis->id = $id;
    $this->title = $title;
    $this->content = $content;
    $this->ctime =  $ctime;
    $this->tag = $tag;
    $this->count = $count;
  }
}




 ?>
