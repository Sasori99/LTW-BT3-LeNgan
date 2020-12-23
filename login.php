<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 200px; height:100px;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
body {
  display: flex;
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT22q19i79vnVZ6ffHieB4GwqBhwpVhh_CQlw&usqp=CAU");
  background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	justify-content: center;
}
.form {
	width: 400px;
}
</style>
</head>
<body>
<div style="border: 1px solid black; margin-top:80px; background-color: white; border-radius: 15px">
  <div class="imgcontainer">
    <img src="https://linkstore.vn/wp-content/uploads/2018/03/Logo.png" alt="Avatar" class="avatar">
  </div>

  <div class="container" style="width:400px">
    <div class="error"></div>
    <label for="uname"><b>Tên đăng nhập</b></label>
    <input type="text" id="uname" placeholder="Tên đăng nhập" name="uname" required><br/>
    
    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" id="psw" placeholder="Mật khẩu" name="psw" required>
   	<div style="justify-content: center; display: flex;">
    	<button id="btnLogin" style="width: fit-content;">Đăng nhập</button>
    </div>
  </div>

</div>

</body>
</html>
<script src="js/script.js"></script>