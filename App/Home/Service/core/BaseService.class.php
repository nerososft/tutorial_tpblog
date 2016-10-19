<?php
namespace Home\Service\core;
use Home\Filter\Filter;

abstract class BaseService implements Filter{
  public function filter($data){
    return htmlspecialchars($data);
  }
}



 ?>
