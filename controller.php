<?php
session_start(); //bắt đầu sesstion
$controller =new Controller();
if (isset($_GET['q'])) {
    $q = $_GET['q'];
} else {
    $q = '';
}

switch ($q) {
    case 'verify': {
        $controller->verify();
        break;
    }
    case 'add-to-cart': {
        $controller->addToCart();
        break;
    }
    case 'checkout': {
        $controller->checkout();
        break;
    }
    case 'delete-bill': {
        $controller->xoaDonDatHang();
        break;
    }
    case 'update-bill': {
        $controller->suaDonDatHang();
        break;
    }
}

class Controller {
    private $conn;
    public function __construct() {
        include('dbConnect.php');
        $this->conn = $conn;
    }

    function verify() {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $qr = "
            SELECT * FROM nguoidung WHERE username = '$username' AND password = '$password'
        ";
        $result = mysqli_query($this->conn,$qr);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_array($result);
            $_SESSION['id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['address'] = $user['address'];
            $_SESSION['role'] = $user['role'];
        }
        echo mysqli_num_rows($result);
    }

    function getNewItem() {
        $qr = "
            SELECT * FROM mathang WHERE New = 1 ORDER BY id DESC LIMIT 0,4;
        ";

        $result = mysqli_query($this->conn,$qr);
        if ($result) {
            $result_array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($result_array, $row);
            }
            return $result_array;
        }
        return null;
    }

    function getHotItem() {
        $qr = "
            SELECT * FROM mathang WHERE Hot = 1 ORDER BY id DESC LIMIT 0,3;
        ";

        $result = mysqli_query($this->conn,$qr);
        if ($result) {
            $result_array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($result_array, $row);
            }
            return $result_array;
        }
        return null;
    }

    function getDiscountItem() {
        $qr = "
            SELECT * FROM mathang WHERE Discount <> 0 ORDER BY id DESC LIMIT 0,8;
        ";

        $result = mysqli_query($this->conn,$qr);
        if ($result) {
            $result_array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($result_array, $row);
            }
            return $result_array;
        }
        return null;
    }

    function addToCart() {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array();
        }
        $id = $_POST['itemId'];
        if (!isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] = 1;
        } else {
            $_SESSION['cart'][$id] = $_SESSION['cart'][$id] + 1;
        }
        $total = 0;
        foreach ($_SESSION['cart'] as $key => $value) {
            $total += $value;
        }
        echo $total;
    }

    function getItemById($id) {
        $qr = "
            SELECT * FROM mathang WHERE id = '$id'
        ";
        $result = mysqli_query($this->conn, $qr);
        $row = mysqli_fetch_array($result);
        return $row;
    }

    function checkout() {
        $idkhachhang = $_SESSION['id'];
        $price = 0;
        $amount = 0;
        $address = $_SESSION['address'];
        foreach ($_SESSION['cart'] as $key => $value) {
            $cart = $this->getItemById($key);
            $price += ($cart['price'] - $cart['price'] * $cart['Discount'] / 100) * $value;
            $amount += $value;
        }
        $date = date('Y-m-d H:i:s');
        $status = 'Chờ xác nhận';
        $qr = "
            INSERT INTO dondathang  (idkhachhang, price, amount, status, date, address)
            VALUES ('$idkhachhang', '$price','$amount','$status','$date', '$address')
        ";
        mysqli_query($this->conn, $qr);// tao don hang
        $iddonhang = mysqli_insert_id($this->conn);// lây id đơn hàng vừa tạo
        echo $qr;
        echo $iddonhang;
        foreach ($_SESSION['cart'] as $key => $value) {
            $qr= "
                INSERT INTO hangduocdat (idmathang, iddondathang, soluong)
                VALUES ('$key', '$iddonhang','$value')
            ";
            mysqli_query($this->conn,$qr); // tao ra hang duoc dat
        }
        $_SESSION['cart'] = array();// khởi tạo lại giỏ hàng
        echo true;
    }

    function getDonDatHang() {
        $qr = "
            SELECT dondathang.id, dondathang.address, dondathang.date, dondathang.price, dondathang.status, nguoidung.fullname
            FROM dondathang, nguoidung
            WHERE dondathang.idkhachhang = nguoidung.id
            ORDER BY id DESC
        ";
    
        $result = mysqli_query($this->conn,$qr);
        if ($result) {
            $result_array = array();
            while ($row = mysqli_fetch_array($result)) {
                array_push($result_array, $row);
            }
            return $result_array;
        }
        return null;
    }

    function getBillById($id) {
        $qr = "
            SELECT dondathang.*, fullname
            FROM dondathang, nguoidung 
            WHERE dondathang.id = '$id'
            AND dondathang.idkhachhang = nguoidung.id
        ";

        $result = mysqli_query($this->conn,$qr);
        return mysqli_fetch_array($result);
    }


    function xoaDonDatHang(){
        $iddonhang = $_POST['iddonhang'];
        $qr =" 
            DELETE FROM dondathang
            WHERE id = '$iddonhang'
        ";
        $result = mysqli_query($this->conn,$qr);
    }

    function suaDonDatHang($iddonhang) {
        $address = $_POST['address'];
        $status = $_POST['status'];
        $qr =" 
            UPDATE dondathang
            SET address = '$address', status = '$status'
            WHERE id = '$iddonhang'
        ";
        $result = mysqli_query($this->conn,$qr);
    }
}

?>