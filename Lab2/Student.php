<?php
namespace Lab2;
// Định nghĩa một lớp (class) có tên là Person
class Student {
    public $name = 'hello'; // Thuộc tính (property) của lớp

    public function sayHello() { // Phương thức (method) của lớp
        echo "Hello, my name is " . $this->name;
    }

}

/*// Tạo một đối tượng từ lớp Person
$person1 = new Person();
$person1->name = "John"; // Gán giá trị cho thuộc tính name
$person1->sayHello(); // Gọi phương thức sayHello()

// Tạo một đối tượng khác từ lớp Person
$person2 = new Person();
$person2->name = "Alice";
$person2->sayHello();*/

