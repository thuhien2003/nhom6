<!doctype html>
<html>
    <head>
        <title>BTVN</title>
    </head>
    <body>
      <h1>Bài tập về nhà</h1>
      <form action="" method = "POST">
        Mã sách: <input type="text" name = "MaSach" placeholder ="điền"> <br>
      Tên sách: <input type="text" name = "TenSach" placeholder ="điền"> <br>
      Tác giả: <input type="text" name = "TacGia" placeholder ="điền"> <br>
      NXB: <input type="text" name = "NhaXuatBan" placeholder ="điền"> <br>
      GIA: <input type="text" name = "Gia" placeholder ="điền"> <br>
      Thể loại:
      <select name="TheLoai" id="">
      <option value="1">Tin học</option>
      <option value="2">Toán</option>
      <option value="3">Ngoại ngữ</option>
      </select>
      <br>
      <button>Thêm mới</button> 
      <br></form>
     
        
    <?php
    $username='root';
    $password='';
    $server='localhost';
    $dbname='baitapvenha';
    $connect= new mysqli($server,$username, $password,$dbname);
    if($connect->connect_error){
        die("khong ket noi:".$connect->connect_error);
        exit();
    }
    echo "KẾT NỐI THÀNH CÔNG VỚI MYSQL!"."<br>";
    if(!empty($_POST)) {
        $MaSach=$_POST["MaSach"];
        $TenSach=$_POST["TenSach"];
        $TacGia=$_POST["TacGia"];
        $NhaXuatBan=$_POST["NhaXuatBan"];
        $Gia=$_POST["Gia"];
        $TheLoai=$_POST["TheLoai"];
    }
    ?>
    <?php

    $sql="insert into sach (MaSach, TenSach,TacGia,NhaXuatBan,TheLoai,Gia)
    values ('$MaSach','$TenSach','$TacGia','$NhaXuatBan','$TheLoai','$Gia')";
    // if(mysqli_query($connect,$sql)){
    if($connect->query($sql)===true) {
        echo "Thêm dữ liệu thành công!";
    }
    else {
        echo "error:". $sql."<br>". $connect->error;
    }
    ?> 

    ?>
     <table class="table" border=2px>
            <tr>
                <th>STT</th>
                <th>Mã sách</th>
                <th>Tên sách</th>
                <th>Tác giả</th>
                <th>Nhà xuất bản</th>
                <th>Thể loại</th>
                <th>Giá</th>
            </tr>
        <?php
        $sql="select * from sach";
        $ket_qua=mysqli_query($connect,$sql);
        $i=1;
        while ($row=$ket_qua->fetch_assoc()){
            ?>
            <tr>
            <td><?php echo $i;?></td>
            <td><?php echo $row['MaSach']; ?></td>
            <td><?php echo $row['TenSach']; ?></td>
            <td><?php echo $row['TacGia']; ?></td>
            <td><?php echo $row['NhaXuatBan']; ?></td>
            <td><?php echo $row['TheLoai']; ?></td>
            <td><?php echo $row['Gia']; ?></td>
            </tr>
        <?php
        $i++;
    }
        ?>
        </table>
        </body>
</html>
