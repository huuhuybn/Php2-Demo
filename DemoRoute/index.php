<html>
<head>
    <title>My Fpoly Page</title>
</head>
<body>
<h1>My Fpoly Page</h1>
<a href="index.php">Home</a>
<a href="index.php?url=news">News</a>
<a href="index.php?url=category">Category</a>
<hr>
<?php
// viet dieu huong noi dung website bang cach kiem tra if else
require './app/Route.php';
require './app/Controllers/HomeControllers.php';
require './app/Controllers/NewControllers.php';
require './app/Controllers/CatControllers.php';

if(isset($_GET['url'])){
    $url = $_GET['url'];
} else $url = '/';

echo 'Address: ' . $url . '<br>'; // in ra tham so url

$route = new demoRoute\Route();
$route->addRoute('/',[HomeControllers::class,'show']);
$route->addRoute('news',[NewControllers::class,'show']);
$route->addRoute('category',[demoRoute\CatControllers::class,'show']);

// lay ra hàm trc đó đã thêm trong route
$handler = $route->getRoute($url);
call_user_func($handler); // thuc thi handler bang call_user_func

/*if ($url == '/'){
    echo '<h4>Welcome to HomePage</h4> <br>';
    // truy van database - mysql
}else if ($url == 'news'){
    echo '<h4>Welcome to NewsPage</h4> <br>';
    // truy van .....
}else if ($url == 'category'){
    echo '<h4>Welcome to CategoryPage</h4> <br>';
}else {
    echo '<h4>404 Not Found</h4> <br>';
}*/


?>
</body>
</html>
<?php
// Route trong php - mvc
// Route Là điều hướng trong website
// vnexpress.net/giai-tri
// vnexpress.net/xe-co
// 1. Thủ công , t tự xây dựng 1 code điều hướng cho website