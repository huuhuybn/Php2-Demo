<?php
class Example {
    private $value = 42;
}

// Tạo một Closure object
$closure = function () {
    return $this->value;
};

$example = new Example();
// Ràng buộc Closure object với đối tượng $example
$boundClosure = $closure->bindTo($example, $example);

echo $boundClosure(); // Kết quả: 42

