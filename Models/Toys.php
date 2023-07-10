<?php
    class Toys {
        public $characteristics;
        public $dimensions;
    

        public function __construct($characteristics, $dimensions){
            $this-> characteristics = $characteristics;
            $this-> dimensions = $dimensions;
        }
};