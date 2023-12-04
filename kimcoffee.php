<!doctype html>
<html>
    <head>
        <title>KIMCOFFE</title>

    </head>
    <body>

        <h1>ĐĂNG KÍ FORM</h1>
        <form  method="POST" action="">
            username:<input type="text" name="username" placeholder="username..."> <br>
            pasword:<input type="text" name="password" placeholder="password..."> <br> -->
            <!-- old:<input type="text" name="old" placeholder="old..."> <br>
            sex:<input type="text" name="sex" placeholder="sex"> <br> -->
            <input type="submit">
        </form>
        
        <!-- // echo "PHẦN NÀY LÀ PHP" .'<br/>';
        // if(!empty($_POST)) {
        //     $username=$_POST['username'];
        //     $password=$_POST['password'];
        //     $old=$_POST['old'];
        //     $sex=$_POST['sex'];
        //     echo "Ketqua:" .'<br/>';
        //     echo 'Username:'.$username.'<br/>';
        //     echo 'Password:'.$password.'<br/>';
        //     echo 'Old:'.$old.'<br/>';
        //     echo 'Sex:'.$sex.'<br/>';
        // }  -->
        
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
        // echo "Khi ket noi thanh cong se tiep tuc dongh code duoi day";
        $sql="insert into hethongbanhang (MaHang,TenHang, DonGia, SoLuong)
        values ('5','ao','200','20')";
        if($connect->query($sql)===true) {
            echo "them du lieu thanh cong";
        }
        else {
            echo "error:". $sql."<br>". $connect->error;
        }
        $connect->close();
        ?>
        
    </body>
</html>
