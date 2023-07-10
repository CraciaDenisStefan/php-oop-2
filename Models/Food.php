<?php
    class Food extends ProductDescription {
        public $weight;
        public $ingredients;
    

        public function __construct($weight, $ingredients){
            $this-> weight = $weight;
            $this-> ingredients = $ingredients;
        }
};
?>