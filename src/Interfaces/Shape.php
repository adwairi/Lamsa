<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 06/03/17
 * Time: 09:53 ص
 */

namespace Ali\Lamsa\Interfaces;


interface Shape
{
    function setHeight($heignt=0);
    function setRepetition($repetition=0);
    function getOutput();
}