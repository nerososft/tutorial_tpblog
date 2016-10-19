<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/18 0018
 * Time: 23:58
 */

namespace Home\Service;


interface ITypeService
{
    /**
     * 根据typeid查询typename
     */
    function getTypeNameById($id);

    /**
     * 获取分类条数
     * @return mixed
     */
    function countType();


}