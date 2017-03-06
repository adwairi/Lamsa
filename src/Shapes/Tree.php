<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 06/03/17
 * Time: 09:51 ص
 */

namespace Ali\Lamsa\Shapes;
use Ali\Lamsa\Interfaces\Shape;

class Tree implements Shape
{
    private $_heignt;
    private $_repetition;

    function setHeight($heignt = 0)
    {
        $this->_heignt = $heignt;
        return $this;
    }

    function setRepetition($repetition = 0)
    {
        $this->_repetition = $repetition;
        return $this;
    }

    function getOutput(){
        $height = $this->_heignt;
        $repetition = $this->_repetition;
        $sum = 1;
        $output = '';
        for ($i=1; $i<=$height; $i++){
            if ($i !=1)
                $sum += $repetition;
            $space = ($height-$i)*$repetition/2;
            $output .= str_repeat(' ', $space);
            $output .= str_repeat('*', $sum)."\n";
        }
        return $output;
    }
}