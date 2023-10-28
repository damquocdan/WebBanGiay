<?php
	include_once "CauHinh.php";

	if ($connect -> query("Delete From loai
							Where MaLoai = {$_GET['id']}"))
		header("Location: DanhSachLoai.php");
	else
		die ("Lỗi: ".$connect->error);
?>

