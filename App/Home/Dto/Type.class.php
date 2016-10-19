<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/18 0018
 * Time: 23:55
 */

namespace Home\Dto;


use Home\Dto\core\BaseDto;

class Type extends BaseDto
{

    var $id;

    var $name;

    var $ctime;

    /**
     * Type constructor.
     * @param $id
     * @param $name
     * @param $ctime
     */
    public function __construct($id, $name, $ctime)
    {
        $this->id = $id;
        $this->name = $name;
        $this->ctime = $ctime;
    }


}