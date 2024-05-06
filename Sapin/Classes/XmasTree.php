<?php

include_once dirname(__FILE__) . '/../Config/TreeConfig.php';
include_once dirname(__FILE__) . '/../Services/MaxStarsService.php';
include_once dirname(__FILE__) . '/../Classes/TreeBody.php';
include_once dirname(__FILE__) . '/../Classes/BaublesOrNot.php';
include_once dirname(__FILE__) . '/../Classes/Trunk.php';


class XmasTree {

    private $maxStars;
 
    public function __construct() {
        $this->maxStars = MaxStarsService::getMaxStarNumber();
        $this->drawTree();
    }

    private function drawTree() {
        new TreeBody($this->maxStars);
        new BaublesOrNot($this->maxStars);
        new Trunk($this->maxStars);
    }
}