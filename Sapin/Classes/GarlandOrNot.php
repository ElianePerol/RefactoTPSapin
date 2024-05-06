<?php

/**
 * @author Eliane Perol <eliane.perol@gmail.com>
 * @copyright 2024 Eliane Perol
 * @version  1.0.0
 * 
 */

/**
 * class GarlandOrNot
 * 
 * Manages whether we should use garlands or not
 */

class GarlandOrNot {

    /**
     * Defines whether there are garlands or not
     *
     * @var boolean
     */
    public bool $isGarland;

    /**
     * Symbols that represents the garlands
     *
     * @var string
     */
    public string $garland;

    /**
     * Constructor
     *
     * @param bool $isGarland
     */
    public function __construct(bool $isGarland) {
        $this->isGarland = $isGarland;
        $this->garlandDisplay();
    }

    /**
     * Garlands always display, the symbol is "S" when they need to be seen, " " when they don't
     *
     * @return string
     */
    private function garlandDisplay() : string {
        if($this->isGarland){
            return $this->garland = "S";
        }
        return $this->garland = " ";
    }
}