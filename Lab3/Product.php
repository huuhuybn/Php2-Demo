<?php

// parent class
abstract class Product
{
    //khai bao phương thức ko có phần thân
    abstract function sayHi();
    // biến static :
    // không phụ thuộc vào class chứa nó
    static $promotion = 100;
    // biến hằng số : chỉ gán giá trị 1 lần
    // đầu tiên
    // khai báo biến bằng var hoặc
    // public , private , protected
    // ở phía trước
    // hoặc $name = "dddd";
    const PI = 3.14;
    public var $name;
    public $ten;
    var $price;
    protected $color;
    private $brand;

    public function __construct(
        $name, $price, $color, $brand)
    {
        $this->name = $name;
        $this->price = $price;
        $this->color = $color;
        $this->brand = $brand;
    }
}