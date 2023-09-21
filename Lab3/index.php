<?php
include "Product.php";
include "Shoes.php";

// viet code goi thu cac phuong thu o day

$shoes = new
Shoes("V","44","f",
    "f","444"
    ,"ggg");
$shoes->sayHi();
$shoes->compare();
$shoes->test(); // goi tới test và trong test
// truy cập tới các biến thuộc lớp cha : Product !!!



