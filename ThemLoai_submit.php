<?php
    include_once "CauHinh.php";
    if ((!isset($_POST["TenLoai"])))
    {
        echo "Sửa thất bại! Các trường đều phải được điền.";
        echo "<a href='ThemLoai.php'>Chỉnh sửa lại thông tin sản phẩm.</a>";
    }
    else
    {

        $tenLoai = $_POST["TenLoai"];
        
        $sql = "Insert Into `loai`(`TenLoai`)
        values('$tenLoai')";
        if ($connect -> query($sql))
        header("Location: DanhSachLoai.php");
    else
        header("Location: ThongBaoLoi.php");
    }
?>