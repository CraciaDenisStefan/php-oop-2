<?php
    class Food {
        public $weight;
        public $ingredients;
    

        public function __construct($weight, $ingredients){
            $this-> weight = $weight;
            $this-> ingredients = $ingredients;
        }
};
?>