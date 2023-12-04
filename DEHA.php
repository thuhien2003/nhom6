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
// them dữ liệu
$sql= "insert into hang (MaHang, TenHang, DonGia, SoLuong)
values ('008', 'Hoa', '1000', '12')";
if ($connect ->query($sql)===true ){
    echo "Đã thêm dữ liệu! <br>";
}
else{
    echo "Thêm dữ liệu không thành công!!". $sql. "<br>". $connect->error;
}
$connect->close();


// update 
$sql="update hang set TenHang='update' where MaHang='001' ";
if($connect->query($sql)===true){
    echo"Đã update! <br>";
}
else{
    echo"update không thành công".$sql."<br>".$connect->error;
}
// xoas data
$sql="delete  from hang where MaHang='2'";
if($connect->query($sql)===true) {
    echo"xoa thanh cong <br>";
}
else{
    echo " xoa khong thanh".$sql."<br>".$connect->error;
}
?>
<table border=2px>
    <tr>
        <th>STT</th>
        <th>Mã Hàng</th>
        <th>Tên Hàng</th>
        <th>Đơn giá</th>
        <th>Số lượng</th>
    </tr>
    <?php
    $sql="select*from hang";
    $ket_qua=mysqli_query($connect,$sql);
    $i=1;
    while($row=$ket_qua->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $row['MaHang'];?></td>
        <td><?php echo $row['TenHang'];?></td>
        <td><?php echo $row['DonGia'];?></td>
        <td><?php echo $row['SoLuong'];?></td>
        
    </tr>
    <?php
    $i++;
}
    ?>


</table>
</html>
