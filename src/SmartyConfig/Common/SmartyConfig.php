<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/yichang-share-config/src/SmartyConfig/Yc',
            S_ROOT.'vendor/qixinyun/yichang-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/yichang-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
