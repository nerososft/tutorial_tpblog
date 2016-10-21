<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/19 0019
 * Time: 22:29
 */

namespace Home\Controller;


use Think\Controller;
use Home\Service\impl\TypeService;
use Home\Service\impl\ArticleService;

class CategoriesController extends Controller
{
    public function index(){
        $this->display();
    }
     public function categories(){
        $typeService = new TypeService();
        echo json_encode($typeService->getAllType(new ArticleService()));
    }
}