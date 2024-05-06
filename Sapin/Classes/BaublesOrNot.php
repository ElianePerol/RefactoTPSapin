<?php

include_once dirname(__FILE__) . '/../Config/TreeConfig.php';
include_once dirname(__FILE__) . '/../Classes/Baubles.php';

class BaublesOrNot {

    public $isBaubles;
    public $maxStars;

    public function __construct($maxStars) {
        $this->isBaubles = TreeConfig::$isBaubles;
        $this->maxStars = $maxStars;
        $this->baublesOrNot();
    }

    // Les boules de Noël peuvent s'afficher ($isBaubles = TRUE) ou non.
    private function baublesOrNot() {
        if ($this->isBaubles) {
            new Baubles($this->maxStars);
        }
    }
}