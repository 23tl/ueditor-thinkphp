<?php

/**
 * @author Masterton
 * @version 1.0.0
 * @time 2017-8-14 14:42:49
 * UEditor编辑器通用配置文件
 */

namespace Ueditor;

class Config
{
    public static function getConfig()
    {
        return config('ueditor');
    }  
}