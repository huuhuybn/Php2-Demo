<?php

// Định nghĩa hàm autoload
function my_autoloader($class_name) {
    include  $class_name . '.php';
}
// Đăng ký hàm autoload
spl_autoload_register('my_autoloader');

// goi class Student nhưng ko xài include mà chương trình vẫn chạy
// vì !!! spl_autoload_register tự tìm tên class và truyền vaò my_autoloader !!!
$student = new Student();

echo $student->name;
