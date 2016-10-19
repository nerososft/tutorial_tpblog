<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/19 0019
 * Time: 0:24
 */

namespace Home\Dto;


use Home\Dto\core\BaseDto;

class Other extends BaseDto
{
    var $typecount;
    var $tagcount;
    var $articlescount;

    /**
     * Other constructor.
     * @param $typecount
     * @param $tagcount
     * @param $articlescount
     */
    public function __construct($typecount, $tagcount, $articlescount)
    {
        $this->typecount = $typecount;
        $this->tagcount = $tagcount;
        $this->articlescount = $articlescount;
    }


}