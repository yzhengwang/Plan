<?php


// +----------------------------------------------------------------------
// | To say and To do and It will change yzhengwang.github.io
// +----------------------------------------------------------------------
// | 功能描述: xxxxx
// +----------------------------------------------------------------------
// | 时　　间: 2017 2017/8/26 15:46 
// +----------------------------------------------------------------------
// | 代码创建: 姚政旺 <1402205524@qq.com>
// +----------------------------------------------------------------------
// | 版本信息: V1.0.0
// +----------------------------------------------------------------------
// | 代码修改:（修改人 - 修改时间）
// +----------------------------------------------------------------------


namespace Home\Controller;
use Think\Controller;

class ManagerController extends Controller{
/*
    //输入模板
    public function _setModel(&$model){
        $model = D('manager');
    }

    //读写操作
    public function _setWriteModel(&$model){
        $model = D('manager');
    }

    //删除操作
    public function _setDelModel(&$model){
        $model = D('manager');
    }*/

    public function index()
    {

        if (IS_POST) {
            echo $_POST['text'];    
        }

        $this->display();
    }

    


}