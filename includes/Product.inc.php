<?php
/**
 * Description of Product
 *
 * @author phm
 */
abstract class Product {
    protected $type;
    protected $title;
    
    public function getProductType() {
        return $this->type;
    }
    
    public function getTitle() {
        return $this->title;
    }
    
    abstract public function display();
}