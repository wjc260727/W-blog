<?php
    /**
     * 首页控制器
     * User: wujiachen
     * Date: 2017/2/28
     * Time: 11:46
     */
    namespace app\admin\controller;
    
    class IndexController extends BaseAdminController
    {
        public function index()
        {
            return $this->fetch();
        }
    }