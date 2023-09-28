<?php
include "Product.php";
include "Compare.php";
// lớp shoes kế thừa các thuộc tính của
// lớp product
class Shoes extends Product
    implements Compare
{
    // phuong thuc ghi de tu
    // interface Compare
    function compare()
    {
        echo  "HELLO COMPARE" ."</br";
    }
    // ghi de tu lop arent do co abstract
    function sayHi()
    {
        // TODO: Implement sayHi() method.
    }

    var $size;
    var $type;
    private $image;
    // PT set/get để truy cập 1 biến private
    // PT này có thể sẽ được bổ sung thêm các câu lệnh
    // dạng bảo mật như : xác thực tài khoản,
    // xác thực quyền trước khi truy cập trong các dự án
    // thật !!!!
    function setImage($image){
        $this->image = $image;
    }
    function getImage(){
        return $this->image;
    }

    public function __construct($name, $price,
                                $color, $brand,
                                $size,$type)
    {
        parent::__construct($name,$price,$color,$brand);
        // gọi đến PT trong lớp cha bằng cú phá
        // parent::
        $this->size = $size;
        $this->type = $type;
    }

    function test(){
        echo $this->name;
        echo $this->color;
        //echo $this->brand;
        // gọi đến biến static của lớp
        // Product mà ko cần khởi tạo Product
        // ví dụ như :
        // $p = new Product();
        // $p->name;
        echo Product::$promotion;
        echo Product::PI;
    }
}

echo "Hell";
