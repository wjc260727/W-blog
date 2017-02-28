<?php
    /**
     * 路由配置
     */
    \think\Route::domain('www','index');
    \think\Route::domain('admin','admin');
    return [
        '__pattern__' => [
            'name' => '\w+',
        ],
        '[hello]'     => [
            ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
            ':name' => ['index/hello', ['method' => 'post']],
        ],
    
    ];
