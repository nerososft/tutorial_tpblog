<?php
namespace Home\Filter;
interface Filter{


  /**htmlspecialchars 过滤
  */
  function filter($data);

  /**其他过滤规则*/
}

 ?>
