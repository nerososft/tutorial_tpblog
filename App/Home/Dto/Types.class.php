<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/19 0019
 * Time: 22:55
 */

namespace Home\Dto;


use Home\Dto\core\BaseDto;

class Types extends BaseDto
{
    var $typeid;
    var $typename;
    var $count;

    /**
     * Types constructor.
     * @param $typeid
     * @param $typename
     * @param $count
     */
    public function __construct($typeid, $typename, $count)
    {
        $this->typeid = $typeid;
        $this->typename = $typename;
        $this->count = $count;
    }

}