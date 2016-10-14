<?php
namespace Home\Service\core;
use Home\Fliter\Fliter;

abstract class BaseService implements Fliter{
  public function fliter($data){
    return htmlspecialchars($data);
  }
}



 ?>
