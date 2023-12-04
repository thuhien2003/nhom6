<?php
        $username='root';
        $password='';
        $server='localhost';
        $dbname='kimcoffee';
        $connect= new mysqli($server,$username, $password,$dbname);
        if($connect->connect_error){
            die("khong ket noi:".$connect->connect_error);
            exit();
        }
        echo "Khi ket noi thanh cong se tiep tuc dongh code duoi day";
        // them data
        $sql="insert into hethongbanhang (username,password)
        values ('hien','1112')";
        $sql="insert into hethongbanhang (username,password)
        values ('abc','11123')";
        $sql="insert into hethongbanhang (username,password)
        values ('xyzz','111233')";
        if($connect->query($sql)===true) {
            echo "them du lieu thanh cong";
        }
        else {
            echo "error:". $sql."<br>". $connect->error;
        }
        $connect->close();

        //cap nhat du lieu
        // $sql= "update hethongbanhang set username='update' where password='111'";
        // if($connect->query($sql)===true){
        //     echo "du lieu da duoc update <br>";

        // }
        // else{
        //     echo "loi roi <br>".$connect->error;
        // }

        //  //xoa du lieu
        //  $sql= "delete from hethongbanhang where password='111'";
        //  if($connect->query($sql)===true){
        //      echo "du lieu da duoc xoa <br>";
 
        //  }
        //  else{
        //      echo "loi roi <br>".$connect->error;
        //  }

        //   //xoa cột
        //   $sql= "alter 'hethongbanhang drop 'password' from hethongbanhang";
        //   if($connect->query($sql)===true){
        //       echo "cot da duoc xoa <br>";
  
        //   }
        //   else{
        //       echo "loi roi <br>".$connect->error;
        //   }

        ?>








 
<table border=2px>
        <tr>
            <th class="stt"><label for="register_name" class="label">STT</label></th>
            <th class="MaSach"><label for="register_name" class="label">Mã sách</label></th>
            <th class="TenSach"><label for="register_name" class="label">Tên sách</label></th>
            <th class="TacGia"><label for="register_name" class="label">Tác giả</label></th>
            <th class="NhaXuatBan"><label for="register_name" class="label">Nhà xuất bản</label></th>
            <th class="Gia"><label for="register_name" class="label">Giá</label></th>
            <th class="TheLoai"><label for="register_name" class="label">Thể loại</label></th>
            
        </tr>
        
        <tr>
            <td name="stt">
                
            </td>
            <td name="MaSach">
                <?php
                if(!empty($_POST)) {
                 $MaSach=$_POST["MaSach"];
                 echo $MaSach;
                //  echo $_POST["MaSach"];
                }
                ?>
            </td>
            <td name="TenSach">
            <?php
                if(!empty($_POST)) {
                 $TenSach=$_POST["TenSach"];
                 echo $TenSach;
                //  echo $_POST["TenSach"];
                }
                ?>
            </td>
            <td name="TacGia">
            <?php
                if(!empty($_POST)) {
                 $TacGia=$_POST["TacGia"];
                 echo $TacGia;
                //  echo $_POST["TacGia"];
                }
                ?>
            </td>
            <td name="NhaXuatBan">
            <?php
                if(!empty($_POST)) {
                 $NhaXuatBan=$_POST["NhaXuatBan"];
                 echo $NhaXuatBan;
                //  echo $_POST["NhaXuatBan"];
                }
                ?>
            </td>
            <td name="Gia">
            <?php
                if(!empty($_POST)) {
                 $Gia=$_POST["Gia"];
                 echo $Gia;
                //  echo $_POST["Gia"];
                }
                ?>
            </td>
            <td name="TheLoai">
            <?php
                if(!empty($_POST)) {
                 $TheLoai=$_POST["TheLoai"];
                 echo $TheLoai;
                //  echo $_POST["TheLoai"];
                }
                ?>
            </td>
        </tr>
       
    
        </table> 
