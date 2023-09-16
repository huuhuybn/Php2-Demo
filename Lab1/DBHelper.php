<?php
class DBHelper
{
    function connectDB()
    {
        // Tạo kết nối đến cơ sở dữ liệu
        $servername = "sql.freedb.tech";
        $username = "freedb_underroot";
        $password = '26Ke2xWThh4R$WJ';
        $dbname = "freedb_fpolyhn";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Kết nối thất bại: " . $conn->connect_error);
        } else return $conn;

    }

}

