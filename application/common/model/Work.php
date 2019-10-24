<?php
namespace app\common\model;

use think\Model;

class Work extends  Model
{
    protected static $readInstance = null;
    //表名
    protected $table='work_news';
    /**
     * 单例
     * @author lamkakyun
     * @date 2019-04-12 09:47:11
     * @return void
     */
    public static function instance()
    {
        if(!self::$readInstance) self::$readInstance = new self('', '', '');
        return self::$readInstance;
    }

}