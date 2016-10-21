<?php
/**
 * Created by IntelliJ IDEA.
 * User: nero
 * Date: 2016/10/21 0021
 * Time: 0:27
 */

namespace Home\Controller;
use Think\Controller;
use Home\Service\impl\ArticleService;

class GuidangController extends Controller
{
    public function index(){
        $this->display();
    }
    public function guidang(){
        $articleService = new ArticleService();
        echo json_encode($articleService->guidang());
    }
}