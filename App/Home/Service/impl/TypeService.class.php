<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/18 0018
 * Time: 23:59
 */

namespace Home\Service\impl;


use Home\Service\core\BaseService;
use Home\Service\ITypeService;
use Home\Dto\Types;

class TypeService extends BaseService implements ITypeService
{

    private $typeModel;

    /**
     * TypeService constructor.
     * @param $typeModel
     */
    public function __construct()
    {
        $this->typeModel = M("Type");
    }


    /**
     * 根据typeid查询typename
     */
    public function getTypeNameById($id)
    {
        // TODO: Implement getTypeNameById() method.
        $typename = $this->typeModel->where("id=%d",$this->filter($id))->getField("name");
        if($typename==""||$typename==null){
            return "其他";
        }
        return $typename;
    }

    /**
     * 获取分类条数
     * @return mixed
     */
    public function countType()
    {
        // TODO: Implement countType() method.
        return $this->typeModel->count();
    }

    public function getAllType($articleService){
        $result =  $this->typeModel->select();
        $typeList = array();
        foreach ($result as $key => $value) {
            # code...
            array_unshift($typeList,new Types($value['id'],$value['name'],$articleService->countByTypeId($value['id'])));
        }
        return $typeList;
    }
}