<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Example HTML Page</title>
</head>
<body>
<header>
    <h1>Welcome to My Website</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?url=category">Category</a></li>
            <li><a href="index.php?url=service">Services</a></li>
            <li><a href="index.php?url=contact">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    <?php
    require_once 'Route.php';
    require_once './app/Controllers/HomeController.php';
    require_once './app/Controllers/CategoryController.php';

    // Đọc URL được yêu cầu
    if (isset($_GET["url"]))
    $url = $_GET["url"];
    else $url = '/';
    echo 'Address : '. $url . '<br>';

    $route = new Route();
    $route->addRoute("/",[HomeController::class,'show']);
    $route->addRoute("category",[CategoryController::class,'index']);

    call_user_func($route->getHandler($url))


   ?>

</main>
<footer>
    <p>&copy; 2023 My Website</p>
</footer>
</body>
</html>
