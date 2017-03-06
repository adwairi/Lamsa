<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 06/03/17
 * Time: 09:51 ص
 */

namespace Ali\Lamsa\Traits;


trait Output
{
    function output($output='', $type='html'){
        if (!is_dir("output")){
            mkdir("output");
        }
        return file_put_contents("output/lamsa.".$type, $output);
    }
}