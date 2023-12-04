<html>
    <?php
require 'connect.php';
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
