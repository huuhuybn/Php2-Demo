<?php
namespace lab2demo;
class Student
{
// properties
    public $name = "Huy Nguyen";
    public $msvv = "01410";
    private $stk;

// phuong thuc getName : nếu ko có public ở phía trước thì
//  chương trình coi là public
    /**
     * @param string $name
     * @param string $msvv
     * @param string $stk
     */
    // khoi tao gia tri ban đầu cho các biến của class
    public function __construct($name, $msvv, $stk)
    {
        $this->name = $name;
        $this->msvv = $msvv;
        $this->stk = $stk;
    }

    function getName()
    {
        return $this->name;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        // GC
    }
}