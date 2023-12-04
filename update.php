<html>
<?php   
    require 'connect.php';
// update 
$sql="update hang set TenHang='update' where MaHang='001' ";
if($connect->query($sql)===true){
    echo"Đã update! <br>";
}
else{
    echo"update không thành công".$sql."<br>".$connect->error;
}

?>
</table>
</html>
