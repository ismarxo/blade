<?php

namespace App\Model;



abstract class Section extends Model {
    public static function getTags() {
        return [
            'div'   => 'div',
            'h1'    => 'h1',
            'h2'    => 'h2',
            'h3'    => 'h3',
            'h4'    => 'h4',
            'h5'    => 'h5',
            'h6'    => 'h6'
        ];
    }
}

// collect all simple data-components

function glob_dirs_reсursive($path, $ret = array())
{
    $dirs = glob(rtrim($path,"/")."/*", GLOB_ONLYDIR) or array();
    foreach ($dirs as $path)
    {
        $ret[] = $path;
        $ret = glob_dirs_reсursive($path, $ret);
    }
    return $ret;
}

$currentDir = __DIR__;
$dirs = glob_dirs_reсursive($currentDir);

foreach($dirs as $dir) {
    require_once($dir.'/Simple.php');
}