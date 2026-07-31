<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xet hoc luc</title>
</head>
<body>
    <?php
        $ketqua = "";
        $loi = "";

        if(isset($_POST["submit"])){
 
            if($_POST["toan"] != "" && $_POST["ly"] != "" && $_POST["hoa"] != "" && 
               $_POST["anh"] != "" && $_POST["van"] != "" && $_POST["su"] != ""){
                
                $toan = $_POST["toan"];
                $ly = $_POST["ly"];
                $hoa = $_POST["hoa"];
                $anh = $_POST["anh"];
                $van = $_POST["van"];
                $su = $_POST["su"];

                if( ($toan < 0 || $toan > 10) || ($ly < 0 || $ly > 10) || ($hoa < 0 || $hoa > 10) ||
                    ($anh < 0 || $anh > 10) || ($van < 0 || $van > 10) || ($su < 0 || $su > 10) ){
                    
                    $loi = "diem phai nam trong khoang 0-10";
                
                } else {
                    $tong = $toan + $ly + $hoa + $anh + $van + $su;
                    $dtb = $tong / 6;

                    if($toan < 4 || $ly < 4 || $hoa < 4 || $anh < 4 || $van < 4 || $su < 4){
                        $ketqua = "diem trung binh: $dtb. xep loai: YEU (Do co cac mon duoi 4).";
                    } 
                    elseif($dtb < 5) {
                        $ketqua = "diem trung binh: $dtb. xep loai: YEU.";
                    }
                    elseif($dtb >= 5 && $dtb <= 6.4) {
                        $ketqua = "diem trung binh: $dtb. xep loai: TRUNG BINH.";
                    }
                    elseif($dtb >= 6.5 && $dtb <= 7.9) {
                        $ketqua = "diem trung binh: $dtb. xep loai: KHA.";
                    }
                    else {
                        $ketqua = "diem trung binh: $dtb. xep loai: GIOI.";
                    }
                }
            } else {
                $loi = " vui long nhap dau du diem";
            }
        }
    ?>

    <h2>Chương Trình Kiểm Tra Học Lực</h2>

    <!-- Vùng hiển thị kết quả hoặc lỗi -->
    <p class="thanhcong"><?php echo $ketqua; ?></p>
    <p class="loi"><?php echo $loi; ?></p>

    <form action="" method="POST">
        <label>Toán:</label>
        <input type="text" name="toan"><br><br>
        
        <label>Lý:</label>
        <input type="text" name="ly"><br><br>
        
        <label>Hóa:</label>
        <input type="text" name="hoa"><br><br>
        
        <label>Tiếng Anh:</label>
        <input type="text" name="anh"><br><br>
        
        <label>Văn:</label>
        <input type="text" name="van"><br><br>
        
        <label>Lịch Sử:</label>
        <input type="text" name="su"><br><br>
        
        <button type="submit" name="submit">Xem Xếp Loại</button>
    </form>
    
</body>
</html>