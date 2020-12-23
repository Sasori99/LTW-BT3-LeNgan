<?php
    $iddonhang = $_GET['iddonhang'];
    $donhang = $controller->getBillById($iddonhang);
    if (isset($_POST['btnUpdate'])) {
        $controller->suaDonDatHang($iddonhang);
        echo '<script type="text/javascript">
           window.location = "http://localhost:8080/QuanLyDonHang/admin/index.php?p=danhsachdonhang"
        </script>';
    }
?>
<body>
    <h2>Cập nhật đơn hàng</h2>
    <br/>
    <form id="form-update" action="" name="form-update" method="post" style="padding: 30px;background-color: wheat;border-radius: 15px;overflow: auto;">
        <div class="row">
            <label class="col-md-2">Mã: </label>
            <span class="col-md-10"><?php echo $donhang['id']?></span>
        </div>
        <div class="row">
            <label class="col-md-2">Khách hàng: </label>
            <span name="id" class="col-md-10"><?php echo $donhang['fullname']?></span>
        </div>
        <div class="row">
            <label class="col-md-2">Giá:  </label>
            <span class="col-md-10" style="color:red"><?php echo number_format($donhang['price'], 0, '', ',')?><small>vnđ</small></span>
        </div>
        <div class="row">
            <label class="col-md-2">Địa chỉ: </label>
            <input type="text" name="address"class="col-md-10" value="<?php echo $donhang['address']?>" required></input>
        </div>
        <div class="row" style="margin-top: 12px;">
            <label class="col-md-2">Trạng thái: </label>
            <select name="status" class="col-md-10" value="<?php echo $donhang['status']?>">
                <option value="Chờ xác nhận">Chờ xác nhận</option>
                <option value="Chờ lấy hàng">Chờ lấy hàng</option>
                <option value="Đang giao">Đang giao</option>
                <option value="Hoàn thành">Hoàn thành</option>
            </select>
        </div>
        <div class="row">
            <label class="col-md-2">Ngày đặt hàng: </label>
            <span class="col-md-10"><?php echo $donhang['date']?></span>
        </div>
        <div class="row" style="float:right;">
            <button id="btnUpdate" name="btnUpdate" type="submit" class="btn btn-sm btn-primary">Cập nhật</button>
        </div>
    </form>
</body>