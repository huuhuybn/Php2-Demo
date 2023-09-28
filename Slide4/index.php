<?php
//1. Kiem soát lỗi với câu lệnh throw và try catch
//2. tìm hiểu đối tượng datetime trong php
//3. các  Superglobals - biến Siêu toàn cục : $_GET, $_POST , $_REQUEST
//4. Điều hướng request trong website : Route !!!!

// 1. Kiểm soát lỗi với câu lệnh throw và try catch
/*$number = 5;
if($number < 10){
    throw new Exception("number < 10 nhe!!!!");
}

echo ("number ko nho hon 10 dau");*/
include "TestException.php";
// thuc thi cau lenh trong try
try {

    // neu co loi thi dieu huong chuong trinh chay vao catch
    // ko gay loi chuong trinh !!!!!
    $num = -5;
    if ($num < 0) throw new TestException();
    // dieu huong cau lenh vao catch de xu ly thay vi hien thi loi chuong trinh tren
    // trinh duyet

}catch (TestException $loi){
    echo("<h1>Co loi xay ra. Vui long lien he admin</h1>");
}
//2. doi tuong datetime
$time = new DateTime();
echo($time->getTimestamp() . '<br>');
echo($time->getOffset() . '<br>');
// tim hieu cac phuong thuc thuong dung voi datetime.
// format datetime
$thoigian = "2023-09-27"; // chuyen no thanh 27-09-2023
$formatThoiGian = new DateTime($thoigian);
echo $formatThoiGian->format("d-m-y"); // -> 27-09-2023

// kiem tra khoang thoi gian giua 2 moc datetime la ???
$timeA = new DateTime("27-09-2023");
$timeB = new DateTime("30-09-2023");
$interval = $timeA->diff($timeB); // kq = 3 ngay !!!
var_dump($interval);;
// cong hoac tru thoi gian vao moc thoi gian
$thoiGian1 = new DateTime("27-09-2023");
// 3 ngay nua thi la ngay ? hoach 4 ngay nua
$baNgay = new DateInterval("P3D"); // cu phap P : cu phap , 3 la so , D = day
echo  $thoiGian1->add($baNgay)->format("d-m-y") . '<br>';

$bonNgay = new DateInterval("P4D");
echo $thoiGian1->add($bonNgay)->format("d-m-y") . '<br>';

$motTuan = new DateInterval("P1W"); // w = week
echo $thoiGian1->add($motTuan)->format("d-m-y") . '<br>';

// nguoc lai voi add - sub
echo $thoiGian1->sub($baNgay)->sub($bonNgay)->sub($motTuan)->format("d-m-y").'<br>';
// so sanh 2 moc thoi gian
// 1. thoi gian a xay ra truoc thoi gian b hoac nguoc lai
$thoigianA = new DateTime("25-09-2023");
$thoigianB = new DateTime("2023-10-01");
// tien hanh so sanh xem ngay nao xay ra truoc
if ($thoigianB > $thoigianA){
    echo "thoi gian b xay ra sau thoi gian A" . '<br>';
}else echo "thoi gian A xay ra sau thoi gian B" . '<br>';

// so sanh ngang bang voi toan tu ==  hoac !=
if ($thoigianA != $thoigianB){
    echo "thoi gian khong khop nhau" . '<br>';
}

// datetime ho tro 2 datetime khong cung format . php tu dong so sanh .
// tuy nhien . format date can phai la loai php ho tro .

// Superglobals - biến Siêu toàn cục

// Điều hướng request trong website : Route !!!!

// dieu huong kieu thu cong - if else
// dieu huong kieu su dung Route !!!!!

