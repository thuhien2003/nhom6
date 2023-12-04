<!-- Bài 1: Viết chương trình PHP, sử dụng câu lệnh điều kiện if else để kiểm tra 1 số là số chẵn hay số lẻ? -->
<?php
echo "Bài 1: <br>"
function kiemTraChanLe($so) {
    if ($so % 2 == 0) {
        echo "$so là số chẵn. <br>";
    } else {
        echo "$so là số lẻ. <br>";
    }
}

kiemTraChanLe(32);
?>
<!-- Bài 2: Viết chương trình PHP, sử dụng câu lệnh if else để xếp hạng học lực 
của học sinh dựa trên điểm điểm thi giữa kỳ, điểm thi cuối kỳ. 
Công thức tính điểm trung bình = (điểm giữa kỳ * 30%) + (điểm cuối kỳ * 70%) 
Điểm trung bình >= 9.0 in ra là hạng "Xuất sắc". 
Điểm trung bình >= 7.0 và < 9.0 in ra là hạng "Giỏi" 
Điểm trung bình >= 5.0 và < 7.0 in ra là hạng "Khá" 
Điểm trung bình < 5.0 in ra là hạng "Trung bình - Yếu" -->
<?php
function xepHangHocLuc($diemGiuaKy, $diemCuoiKy) {
    // Tính điểm trung bình theo công thức
    $diemTrungBinh = ($diemGiuaKy * 0.3) + ($diemCuoiKy * 0.7);

    // Xác định hạng học lực
    if ($diemTrungBinh >= 9.0) {
        echo "Hạng: Xuất sắc. <br>";
    } elseif ($diemTrungBinh >= 7.0 && $diemTrungBinh < 9.0) {
        echo "Hạng: Giỏi. <br>";
    } elseif ($diemTrungBinh >= 5.0 && $diemTrungBinh < 7.0) {
        echo "Hạng: Khá. <br>";
    } else {
        echo "Hạng: Trung bình - Yếu. <br>";
    }
}
xepHangHocLuc(10, 9.0);
?>
<!-- Bài 3: Kiểm tra năm nay là năm chẵn hay năm lẻ, in ra màn hình kết quả chẵn hay lẻ.
Trong đoạn mã trên, date("Y") được sử dụng để lấy năm hiện tại. 
Sau đó, câu lệnh điều kiện if else được sử dụng để kiểm tra xem năm hiện tại có chia hết cho 2 hay không. 
Nếu chia hết, năm đó là năm chẵn; ngược lại, năm đó là năm lẻ.  -->
<?php
function NamChanLe() {
    $namHienTai = date("Y");

    if ($namHienTai % 2 == 0) {
        echo "$namHienTai là năm chẵn. <br>";
    } else {
        echo "$namHienTai là năm lẻ.. <br>";
    }
}
// Gọi hàm để kiểm tra năm hiện tại
NamChanLe();
?>

<!-- Bài 4: Viết chương trình PHP, sử dụng câu lệnh vòng lặp For để in ra số từ 1 đến 100.
Hướng dẫn: Sử dụng vòng lặp for, 1 biển đếm i, toán tử %.  -->
<?php
for ($i = 1; $i <= 100; $i++) {
    echo $i . " ";
}
?>
<!-- Bài 5: Viết trang PHP hiển thị dãy số n 1 đến 100 sao cho số chẵn là chữ in đậm, số lẽ là chữ in thường. -->
<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo '<span class="even">' . $i . '</span> ';
    } else {
        echo $i . ' ';
    }
}
?>


<!-- Bài 6: Viết chương trình PHP, sử dụng vòng lặp For each in ra các năm trong mảng có sẵn dưới đây: 
$nam = array (1990, 1991, 1992, 1993, 1994, 1995)  -->
<?php
$nam = array(1990, 1991, 1992, 1993, 1994, 1995);

foreach ($nam as $namHienThi) {
    echo $namHienThi . " . <br>";
}
?>





