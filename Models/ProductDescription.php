<?php
    class ProductDescription {
        public $img;
        public $brandName;
        public $animal;
        public $price;
        public $typeDescribtion;
    

        public function __construct($img, $brandName, $animal, $price, $typeDescribtion){
            $this-> img = $img;
            $this-> brandName = $brandName;
            $this-> animal = $animal;
            $this-> price = $price;
            $this-> typeDescribtion = $typeDescribtion;
        }
};
?>