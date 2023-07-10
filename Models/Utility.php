<?php
    class Utility extends ProductDescription{
        public $materials;
        public $dimensions;
    

        public function __construct($materials, $dimensions){
            $this-> materials = $materials;
            $this-> dimensions = $dimensions;
        }
};
?>