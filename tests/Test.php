<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 06/03/17
 * Time: 10:19 ص
 */

namespace Ali\Tests;
use PHPUnit\Framework\TestCase;
use \Ali\Lamsa\Shapes\Tree;
use \Ali\Lamsa\Engine\Draw;


class Test extends TestCase
{
    function testSavedTree()
    {
        $tree = new Tree();
        $tree->setHeight(5)->setRepetition(2);

        $draw = new Draw();
        $draw->outputType = "html";
        $draw->draw($tree);


        $this->assertFileExists('output/lamsa.html');
    }

}