<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 06/03/17
 * Time: 09:48 ص
 */

namespace Ali\Lamsa\Engine;


class Draw
{

    use Output;
    public $outputType='';
    function draw(Shape $shape){

        if ($this->outputType == '')
            echo $shape->getOutput();
        else
            $this->output($shape->getOutput(), $this->outputType);
    }
}