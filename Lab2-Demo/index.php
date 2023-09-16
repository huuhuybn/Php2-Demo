<?php
// 1. Class là gì , cách khai báo, sử dụng class trong PHP
// Tính đóng gói
include 'Student.php';
// sử dụng :
// khai báo với từ khóa new để khởi tạo
// khai báo 1 đối tượng sinh viên
//$sv = new Student();
// có thể có nhiều đối tượng cùng kiểu là Student
$sv1 = new lab2demo\Student("QQ","8888","8888");
echo $sv1->name;

// khai bao class ẩn danh (anonymous)
// chỉ dùng trên php 7 trở
$anonymousClass = new class{
    // khong khai bao contruct cho class an danh duoc!!!!
    // thay thế bằng phương thức set
    public $name = "HUY";
    function setName($name){
        $this->name = $name;
    }
};
$anonymousClass->setName("KKKK");
echo $anonymousClass->name;
// phuong thuc ẩn danh
$tinhTong = function ($x,$y){
    return ($x + $y);
};
echo $tinhTong(4,5);

//$sv2  = new Student();
// đọc giá trị biến name trong $sv. sử dụng cú pháp ->
//$name = $sv->name; // bien name dang la public
// su dung funtion
//$name = $sv->getName();
//$stk = $sv1->stk; //ko truy cap dc stk do private
//echo $name;
// 2. Các kĩ thuật khai báo khác, xoay quanh class trong PHP


// bindTo của Closure Object !!!!!

// dùng để đọc 1 biến private trong class
$closure = function (){
  return $this->stk;
};
// gắn đối tượng sv1 và closure
// mà ko làm ảnh hưởng tới đối tương sv1
// tham số 1 : là biến sẽ bind,
// tham số 2 : phạm vi hàm bindTo đọc : scope
$boundClosure = $closure->bindTo($sv1,$sv1);

echo $boundClosure();
