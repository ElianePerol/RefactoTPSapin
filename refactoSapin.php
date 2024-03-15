<?php

class Main {
    
    private $rowNumber = 6;
    private $starLine1 = 1;
    private $starLine2 = 3;
    private $starLine3 = 7;
    private $isBaubles = FALSE;
    private $isGarland = TRUE;
    private $garland;
    private $noBaubles = 0;
    
    public function __construct() {
        $this->maxStars = $this->getMaxStarNumber();
        $this->garland = $this->garlandDisplay();
        $this->treeBodyDisplay();
        $this->baublesDisplay();      
        $this->trunkDisplay();
    }
    
    private function getMaxStarNumber() {
        return (3 + 2*($this->rowNumber - 1))*2 + 1;
    }
    
    private function garlandDisplay() {
        if($this->isGarland){
            return "S";
        }
        return " ";
    }
    
    private function getLines($starsNumber = null) {
        $mainStarLines = "<pre style = 'margin: 0;'>";
        if($starsNumber) {
            $mainStarLines .= str_repeat(" ", ($this->maxStars - $starsNumber) / 2 + 1);
            $mainStarLines .= str_repeat("*", $starsNumber);
            $mainStarLines .= str_repeat(" ", ($this->maxStars - $starsNumber) / 2 + 1);
        } else {
            $mainStarLines .= str_repeat(" ", ($this->maxStars - 1) / 2);
            $mainStarLines .= str_repeat("*", 3);
            $mainStarLines .= str_repeat(" ", ($this->maxStars - 3) / 2);
        }
        $mainStarLines .= "</pre>";
        return $mainStarLines;
    }

    private function treeBodyDisplay() {
        for($i = 0; $i <= $this->rowNumber - 1; $i++){
            $topRow = $this->getLines($this->starLine1);
            $middleRow = $this->getLines($this->starLine2);
            
            $bottomRow = "<pre style = 'margin: 0;'>";
            $bottomRow .= str_repeat(" ", ($this->maxStars - $this->starLine3) / 2);
            $bottomRow .= $this->garland;
            $bottomRow .= str_repeat("*", $this->starLine3);
            $bottomRow .= $this->garland;
            $bottomRow .= str_repeat(" ", ($this->maxStars - $this->starLine3) / 2);
            $bottomRow .= "</pre>";
            
            echo $topRow;
            echo $middleRow;
            echo $bottomRow;
            
            $this->starLine1 = $this->starLine2;
            $this->starLine2 = $this->starLine3;
            $this->starLine3 += 4;
        }
    }

    private function baublesDisplay() {
        if($this->isBaubles) {
            $this->baublesSetup("|");
            $this->baublesSetup("0");
        } else{
            $this->getLines();
            $this->noBaubles = 2;
            }
        }
    
    
        private function baublesSetup($symbol) {
        $baubles = "<pre style = 'margin: 0;'>";
        $baubles .= str_repeat(" " . $symbol, ($this->maxStars - 3)/4);
        $baubles .= " ";
        $baubles .= str_repeat("*", 3);
        $baubles .= " ";
        $baubles .= str_repeat($symbol . " ", ($this->maxStars - 3)/4);
        $baubles .= "</pre>";
        echo($baubles);
    }

    private function trunkDisplay() {
        for($i = 0; $i <= $this->rowNumber + $this->noBaubles ; $i++){
            echo($this->getLines());
        }
    }        
}

new Main();