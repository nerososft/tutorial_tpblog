<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/18 0018
 * Time: 23:59
 */

namespace Home\Service\impl;


use Home\Service\core\BaseService;
use Home\Service\ITagService;

class TagService extends BaseService implements ITagService
{

    private $tagModel;

    /**
     * TypeService constructor.
     * @param $typeModel
     */
    public function __construct()
    {
        $this->tagModel = M("Tag");
    }


    /**
     * 根据typeid查询typename
     */
    public function getTagNameById($id)
    {
        // TODO: Implement getTypeNameById() method.
        $tagname = $this->tagModel->where("id=%d",$this->filter($id))->getField("name");
        if($tagname==""||$tagname==null){
            return "其他";
        }
        return $tagname;
    }

    /**
     * 获取分类条数
     * @return mixed
     */
    public function countTag()
    {
        // TODO: Implement countType() method.
        return $this->tagModel->count();
    }
}