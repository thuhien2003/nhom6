<!doctype html>
<html>
    <head>
        <title>DIENFORM</title>
    </head>
    <body>
        <!-- tạo form -->
        <form action="" method="POST">
        <h1>ĐĂNG KÝ FORM</h1>
        Mã sách: <input type="text" name=MaSach placeholder="Điền mã sách..."><br>
        Tên sách: <input type="text" name=TenSach placeholder="Điền tênsách..."><br>
        Tác giả: <input type="text" name=TacGia placeholder="Điền tác giả..."><br>
        Nhà Xuất Bản: <input type="text" name=NhaXuatBan placeholder="Điền nxb..."><br>
        Gia: <input type="text" name=Gia placeholder="Điền giá..."><br>
        Thể loại: <select name="TheLoai">
            <option value="1">Tin</option>
            <option value="2">Toán</option>
            <option value="3">Ngọai ngữ</option>
        </select>
        <button>them</button>
        </form>
        <!-- Tạo kết nối và post dữ liệu -->
        <?php
        $username='root';
        $password='';
        $server='localhost';
        $dbname='baitapvenha';
        $connect=new mysqli($server,$username,$password,$dbname);
        if($connect->connect_error){
            echo"ket noi khong thanh cong!".$connect->connect_error;

        }
        else{
            echo"ket noi thanh cong!";
        }
    
        if(!empty($_POST)){
            $MaSach=$_POST['MaSach'];
            $TenSach=$_POST['TenSach'];
            $TacGia=$_POST['TacGia'];
            $NhaXuatBan=$_POST['NhaXuatBan'];
            $Gia=$_POST['Gia'];
            $TheLoai=$_POST['TheLoai'];
            
        }
    
        ?>
        <!-- Inssert dữ liệu từ forrm vào sql -->
        <?php
        $sql="insert into sach (MaSach, TenSach, TacGia, NhaXuatBan,Gia,TheLoai)
        values('$MaSach','$TenSach', '$TacGia','$NhaXuatBan','$Gia','$TheLoai')";
        if ($connect->query($sql)===true){
            echo "them dl thanh cong <br>";

        }
        else{
            echo "Khong the them dl".$sql."<br.".$connect->error;
        }
        ?>
        <!-- Tạo bảng hiện tổng dữ liệu -->
        <table border=2px>
            <tr>
                <th>STT</th>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Tacgia</th>
                <th>nxb</th>
                <th>giá</th>
                <th>thể loại</th>
            </tr>
            <?php
            $sql="select * from sach";
            $ket_qua=mysqli_query($connect,$sql);
            $i=1;
            while($row=$ket_qua->fetch_assoc()){
                ?>
                <tr>
                <td>
                    <?php
                    echo $i;
                    ?>
                </td>
                <td> <?php echo $row['MaSach'];?></td>
                <td><?php echo $row['TenSach'];?></td>
                <td><?php echo $row['TacGia'];?></td>
                <td><?php echo $row['NhaXuatBan'];?></td>
                <td><?php echo $row['Gia'];?></td>
                <td><?php echo $row['TheLoai'];?></td>
            </tr>
            <?php
            $i++;
        }
            ?>
        
        </table>
    </body>

</html>
<?php

?>





































