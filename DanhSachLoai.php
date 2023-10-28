<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="DinhDangAdmin.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" >
        <a class="navbar-brand" href="TrangChuAdmin.php"><img src="images/shoeslogo.png" alt="ảnh lỗi"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ADMIN SITE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="DangXuat.php">Đăng xuất</a>
                        <a class="dropdown-item" href="HoaDonAdmin.php">Danh sách đơn hàng</a>
                        <a class="dropdown-item" href="DanhSachSP.php">Danh sách sản phẩm</a>
                        <a class="dropdown-item" href="DanhSachLoai.php">Danh sách loại</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="col-md-12">
        <h4 class="TieuDe">DANH SÁCH LOẠI</h4>
    </div>
    <div style="margin-top:20px; margin-bottom:20px; text-align:right">
        <a href="ThemLoai.php"><button name="btnThem" class="btn btn-success">Thêm loại</button></a>
    </div>
    <table class="text-center">
        <tr>
            <th>Mã loại</th>
            <th>Tên loại</th>
            <th colspan="2">HÀNH ĐỘNG</th>
            </tr>

            <?php
    include_once "CauHinh.php";

    $danhSach = $connect->query("Select * from loai");

    while ($row = $danhSach->fetch_array(MYSQLI_ASSOC)) {
        echo "<tr class='elem_row'>";
        echo "<td width: 5% class='box_row'>{$row["MaLoai"]}</td>";
        echo "<td width: 10%>{$row["TenLoai"]}</td>";
        echo "<td width: 15% class='box_row'><a href='SuaLoai.php?id={$row["MaLoai"]}'>Sửa</a></td>";
        echo "<td width: 15% class='box_row'><a href='XoaLoai.php?id={$row["MaLoai"]}'>Xóa</a></td>";
        echo "</tr>";
    }
    ?>
    </table>
    <div class="footer"></div>
</body>