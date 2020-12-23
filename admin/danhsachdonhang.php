<?php
    $danhsachdonhang = $controller->getDonDatHang();
?>
<body>
    <h2>Danh sách đơn hàng</h2>
    <br/>
    <table class="table table-bordered table-hover">
        <thead style="background-color: brown; color: white; text-align: center;">
            <tr>
                <th>Mã đặt hàng</th>
                <th>Thời gian</th>
                <th>Khách hàng</th>
                <th>Địa chỉ</th>
                <th>Thành tiền</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php
                    $dt = "";
                foreach($danhsachdonhang as $item) {
                    $dt .= "<tr>
                                <td>
                                    ".$item['id']."
                                </td>
                                <td>".$item['date']."</td>
                                <td>".$item['fullname']."</td>
                                <td>".$item['address']."</td>
                                <td style='color:red;'>".number_format($item['price'], 0, '', ',')."<small>vnđ</small></td>
                                <td>".$item['status']."</td>
                                <td>
                                    <i onclick='deleteBill(".$item['id'].")' class='fa fa-trash' title='Xóa'
                                        style='color: brown; cursor: pointer; margin-right: 5px'></i> 
                                    <a href='index.php?p=suadonhang&&iddonhang=".$item['id']."' class='fa  fa-paint-brush' title='Sửa'
                                        style='color: black; cursor: pointer; margin-right: 5px'></a>
                                </td>
                            </tr>
                        ";
                }

                echo $dt;
                
            ?>
        <tbody>
    </table>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
        </div>
    </div>
</div>
</body>
                  