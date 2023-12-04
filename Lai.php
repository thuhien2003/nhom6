<!DOCTYPE HTML>
<HTML>
    <head>
        <title>Nguyenthithuhien</title>
    </head>
    <body>
        <h1>
            Điền form
        </h1>
        <form action="" method="POST">
            Má sách: <input type="text" name="MaSach"> <br>
            Tên sách: <input type="text" name="TenSach"> <br>
            Tg: <input type="text" name="TacGia"> <br>
           NXB: <input type="text" name="NhaXuatBan"> <br>
            Gía: <input type="text" name="Gia"> <br>
            Thể loại: <select name=TheLoai>
                <option value="1">Tin</option>
                <option value="2">Toán</option>
                <option value="3">Ngoại ngữ</option>
            </select>
            <button>Thêm</button>

        </form>
        <?php
        $connect=new mysqli('localhost','root','','baitapvenha');
        if($connect->connect_error){
            echo"ketnoi ko thanh".$connect->connect_error;
        }
        else{
            echo "ket noi thanh cong <br>";
        }
        $sql="delete from sach where MaSach='100'";
        if($connect->query($sql)===true)
    {
        echo "da xoa";
    }
    else { echo "xoa khong thanh". $sql."<br>".$connect->error;}
        if(!empty($_POST)){
            $MaSach=$_POST['MaSach'];
            $TenSach=$_POST['TenSach'];
            $TacGia=$_POST['TacGia'];
            $NhaXuatBan=$_POST['NhaXuatBan'];
            $Gia=$_POST['Gia'];
            $TheLoai=$_POST['TheLoai'];
        }
        
        ?>
        
        <table border=2px>
            <tr>
                <th>STT</th>
                <th>MaScah</th>
                <th>Teen Scah</th>
                <th>TacGia</th>
                <th>NhaXuatBan</th>
                <th>Gia</th>
                <th>TheLoai</th>
            </tr>
            <?php
            $sql="select * from sach";
            $ketqua=mysqli_query($connect,$sql);
            $i=1;
            while($row=$ketqua->fetch_assoc()){

                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['MaSach'];?></td>
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
</HTML>