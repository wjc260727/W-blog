<?php
    /**
     * 基础控制器
     * User: wujiachen
     * Date: 2017/2/28
     * Time: 11:20
     */
    namespace app\admin\controller;
    
    use think\Controller;
    
    class BaseAdminController extends Controller
    {
        public function _initialize()
        {
            parent::_initialize();
        }
    }