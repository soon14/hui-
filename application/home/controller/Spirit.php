<?php
namespace app\home\controller;

use app\common\model\Work;
use think\Controller;
use app\v1\service\Workservice;

class Spirit extends Controller
{
    /**
     * @return bool|mixed
     * 慧灵工 首页
     */
    public function  index()
    {
        if($this->request->isGet()){
            //行业资讯
            $data = Workservice::instance()->three();
            $this->assign('data',$data);
            $this->assign('title','惠灵工');
            return $this->fetch();
        }
        return false;
    }


    /**
     * 慧灵工 列表页
     */
     public function informationList(){

         if($this->request->isGet()){
           $keyword = input('get.keyword','','trim');
           $list = Workservice::instance()->getNewList($keyword);
           $this->assign('list',$list);
           $this->assign('title','惠灵工行业资讯');
           return $this->fetch();
         }
         return false;
     }

     /**
      * 惠灵工详情页
      */
     public function detail(){

         if($this->request->isGet()){

         }
         return false;
     }

}