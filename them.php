
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
// them dữ liệu
$sql= "insert into hang (MaHang, TenHang, DonGia, SoLuong)
values ('0009', 'Hoa', '1000', '12')";
if ($connect ->query($sql)===true ){
    echo "Đã thêm dữ liệu! <br>";
}
else{
    echo "Thêm dữ liệu không thành công!!". $sql. "<br>". $connect->error;
}
$connect->close();


?>
