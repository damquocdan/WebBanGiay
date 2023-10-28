<?php
    include_once "CauHinh.php";
    if ((!isset($_POST["MaLoai"])) || (!isset($_POST["TenLoai"])))
    {
        echo "Sửa thất bại! Các trường đều phải được điền.";
        echo "<a href='SuaLoai.php'>Chỉnh sửa lại thông tin sản phẩm.</a>";
    }
    else
    {
        $maLoai = $_POST["MaLoai"];
        $tenLoai = $_POST["TenLoai"];

            
        $sql = "Update loai
            Set TenLoai = '$tenLoai' Where MaLoai = '$maLoai'";
        if ($connect -> query($sql))
            header("Location: DanhSachLoai.php");
        else
            header("Location: ThongBaoLoi.php");
    }
		
?>
