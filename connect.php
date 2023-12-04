<html>
<?php
//kẾT NỐI VỚI DATABASE
$username ="root";
$password ="";
$sever ="localhost";
$dbname ="hethongbanhang";
$connect= new mysqli($sever,$username,$password,$dbname);
if($connect->connect_error){
    echo"Lỗi kết nối!".$connect->connect_error;
} else{
    echo"Kết nối thành công!"."<br>";
}


