
<?php 
  session_start();
  if(isset($_SESSION['username'])) {
    if($_SESSION['role']=='khachhang') header("Location:login.php ");
  } 
  else if(!isset($_SESSION['username'])) header("Location:login.php ");
?> 
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productcata.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:09:10 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Link Store</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="./iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="./iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="./iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="./css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="./css/slick.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="./css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
  <style>
    form.example input[type=text] {
      border-radius: 29px;
    padding: 10px;
    font-size: 17px;
    border: 1px solid #80808036;
    float: left;
    width: 80%;
    background: white;
}

/* Style the submit button */
form.example button {
  border-radius: 29px;
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    right: 56px;
    position: relative;
}
.setform{
  position: relative;
    float: right;
    padding: 0px !important;
    left: 55px;
}
form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
  </style>
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">


  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="./index.php">    <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="logo" style="max-width: 95px;">
       </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"><span><i class="fas fa-user-friends fs-16"></i>Quán lý thành viên</span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="./danhsachthanhvien.php">Danh sách thành viên</a>
          </li>
          
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- product -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Quản lý thông tin món ăn</span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
         
        <li> <a href="../danhmucsanpham.php">Danh mục sản phẩm</a>
          </li>

          <li> <a href="../danhsachsanpham.php">Danh sách món ăn</a>
          </li>
          
          <li> <a href="../themthongtinsanpham.php">Thêm thông tin món ăn</a>
          </li>
          
        </ul>
      </li>
    
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#thongke" aria-expanded="false" aria-controls="product"> <span><i class="fas fa-clipboard-list fs-16"></i>Thống kê báo cáo</span>
        </a>
        <ul id="thongke" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li> <a href="../thongkesanphambanchay.php">Sản phẩm bán chạy nhất</a>
          </li>
          <li> <a href="../thongkesanphamtindung.php">Sản phẩm tin dùng</a>
          </li>
          <li> <a href="../thongketheodanhmuc.php">Thống kê theo danh mục</a>
          </li>
        
        
        </ul>
      </li>

    
 
    </ul>


  </aside>


  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>

        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
  
        </div>


      </div>

    </div>

  </aside>

  <!-- Main Content -->
  <main class="body-content">

    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index.html"><img src="../../img/costic/costic-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
 
 <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>
 
 </li>
 <li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>
 
 </li>

 <li class="ms-nav-item ms-nav-user dropdown">
   <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <img class="ms-user-img ms-img-round float-right" src="../../../../images/<?php echo $_SESSION['image'] ?>" alt="people">
   </a>
   <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
     <li class="dropdown-menu-header">
     <?php if(isset($_SESSION['username'])){  ?>
        <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Xin chào ,  <?php echo $_SESSION['username']  ?></span></h6>
       <?php } ?>
      
     </li>
     <li class="dropdown-menu-footer">
       <a class="media fs-14 p-2" href="../../../indexUser.php"> <span><i class="fas fa-arrow-alt-circle-right mr-2" style="font-size: 19px;"></i> Đi đến trang User</span>
       </a>
     </li>
     <li class="dropdown-menu-footer">
       <a class="media fs-14 p-2" href="../../logout.php"> <span><i class="flaticon-shut-down mr-2"></i>Đăng xuất</span>
       </a>
     </li>
   </ul>
 </li>
</ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

    </nav>

    <div class="ms-content-wrapper box">

      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Danh sách thành viên</li>
            </ol>
          </nav>
        </div>
     
 
            <div class="col-md-12 text-right tool-datagrid">
              <div class="col col-sm-8">

              </div>
              <div class="col col-sm-4 setform" >
              <form class="example">
                  <input type="text" class="timkiemtv" placeholder="Tìm kiếm ..." name="timkiemtv">
                  <button class="timkiem" type="button"><i class="fa fa-search"></i></button>
              </form>
              </div>
  
            </div>
      
        <div class="col-md-12">

     <?php
        
        $dbhost= "localhost";
        $dbUser = "root" ;
        $dbPass ="";
        $dbName ="qlsp";
        $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
        if($conn){
          $setLang=mysqli_query($conn,"SET NAMES 'utf-8'");
        }else{
          die("kết nối thất bại".mysqli_connect_error());
        }
        $sql = "select * from thanhvien limit 0,5";
        $query = mysqli_query($conn,$sql);
     // phân trang
        $sql2 = "select * from thanhvien ";
        $query2 = mysqli_query($conn,$sql2);
        $tongslbanghi = mysqli_num_rows($query2);
        $sopage = ceil($tongslbanghi/5);
     //   echo $sopage;
     ?>


        <div class="ms-panel">
          <div class="ms-panel-header">
            <h6>Danh sách thành viên</h6>
          </div>
          <div class="ms-panel-body">
            <div class="table-responsive">
              <table class="table table-hover thead-primary">
                <thead >
                  <tr style="    background: #00c1ff;">
                    <th scope="col">ID </th>
                    <th scope="col">Tên </th>
                    <th scope="col">Email</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Quyền</th>
                    <th scope="col">Thêm/Sửa/Xóa</th>

                  </tr>
                </thead>
                <tbody class="appendl">
                  <?php
                     while($row= mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                    <th scope="row"> <?php echo $row['id']; ?></th>
                    <th scope="row"> <?php echo $row['ten']; ?></th>
                    <th scope="row"> <?php echo $row['email']; ?></th>
                   <th scope="row"><img src="/PHP_BAI3/images/<?php echo $row['image'] ?>" style="max-width: 57px;border-radius: 0%;"></th>
                   <?php 
                      if($row['role'] ==1) {
                       echo '<th>Admin</th>';
                      }else {
                        echo '<th>User</th>';
                      }
                    ?>
                    <td> 
                      <a href="#"><i data-toggle="modal" data-target="#myModal" class="fa fa-plus-circle" aria-hidden="true" style="color: #00ff8e;"></i></a>
                      <a href="suathanhvien.php?id=<?php echo $row['id'];?>"><i class="fas fa-pencil-alt text-secondary chinhsua" id="<?php echo $row['id'];?>"></i></a> 
                      <a href="#"><i class="fas fa-trash-alt xoa" id="<?php echo $row['id'];?>" onclick="xoathanhvien(this)"></i></a>
                      </td>    
                  </tr>
                  <?php
                     }
                  ?>
               

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-12">
          <div class="load">
            <i class="fas fa-redo alt  space text-muted" aria-hidden="true"></i><span class="xemthem" sopage=<?php echo $sopage; ?> onclick="xemthem(this)">Xem thêm</span>
          </div>
        </div>
      </div>

    </div>



 <!-- Modal thêm mới-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h1 class="modal-title" style="color: #7a00ff;">Thêm thành viên</h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col col-sm-12">
          <form >
  <div class="form-group">
    <label for="ten">Tên đăng nhập (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" name="ten" id="ten" require>
  </div>
  <div class="form-group">
    <label for="username">Username (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" id="username" name="username" require>
  </div>
  <div class="form-group">
    <label for="pass">Password (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="pass" name="pass" require>
  </div>
  <div class="form-group">
    <label for="pass">Repassword (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="repass" name="repass" require>
  </div>
  <div class="form-group">
    <label for="email">Email (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" id="email" name="email" require>
  </div>
  
  <div class="form-group">
     <label>Role (<span style="color: red;">*</span>)</label>
     <div class="form-control role">
     <input  name="role" type="radio" value="1"><label>Admin</label>
     <input  name="role" type="radio" value="0"><label>User</label>
     </div>
     </div>


     <div class="form-group">
     <label for="image">Avatar :</label>
     <input type="file" class="form-control" id="image" name="image">
     </div>
</form>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary themmoi">Thêm mới</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>




 <!-- Modal edit-->
 <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h1 class="modal-title" style="color: #7a00ff;">Sửa thông tin thành viên</h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col col-sm-12">
 <form >
  <div class="form-group">
    <label for="ten">Tên đăng nhập </label>
    <input type="text" class="form-control" name="ten" id="ten" require>
  </div>
  <div class="form-group">
    <label for="username">Username </label>
    <input type="text" class="form-control" id="username" name="username" require>
  </div>
  <div class="form-group">
    <label for="pass">Password </label>
    <input type="text" class="form-control" id="pass" name="pass" require>
  </div>
  <div class="form-group">
    <label for="email">Email </label>
    <input type="text" class="form-control" id="email" name="email" require>
  </div>
  
  <div class="form-group">
     <label>Role </label>
     <div class="form-control role">
     <input  name="role" type="radio" value="1"><label>Admin</label>
     <input  name="role" type="radio" value="0"><label>User</label>
     </div>
     </div>


     <div class="form-group">
     <label for="image">Avatar :</label>
     <input type="file" class="form-control" id="image" name="image" >
     </div>

</form>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary capnhat">Cập nhật</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>



  </main>



  <!-- MODALS -->
  <!-- Quick bar -->
  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">

      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
        <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
          <i class="flaticon-list"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
          <i class="flaticon-bell"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
        <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
          <i class="flaticon-pencil"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
        <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
          <i class="flaticon-share-1"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Settings" data-title="Settings">
        <a href="#qa-settings" aria-controls="qa-settings" role="tab" data-toggle="tab">
          <i class="flaticon-gear"></i>

        </a>
      </li>
    </ul>
    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

      <a href="#">
        <i class="flaticon-hammer"></i>

      </a>

    </div>


    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">



        <div role="tabpanel" class="tab-pane" id="qa-toDo">
          <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

            <form class="ms-add-task-block">
              <div class="form-group mx-3 mt-0  fs-14 clearfix">
                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
              </div>
            </form>

            <ul class="ms-todo-list">
              <li class="ms-card ms-qa-card ms-deletable">

                <div class="ms-card-header clearfix">
                  <h6 class="ms-card-title">Task Block Title</h6>
                  <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                </div>

                <div class="ms-card-body">
                  <ul class="ms-list ms-task-block">
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span> Task to do </span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span>Task to do</span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                  </ul>
                </div>

                <div class="ms-card-footer clearfix">
                  <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                  <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </li>
            </ul>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
            </ul>

            <div class="ms-quickbar-container ms-scrollable">

              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Developer Meeting in Block B </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>
              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Start adding change log to version 2 </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
            <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Don't forget to check with the designer</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="../../assets/img/people/people-3.jpg" alt="member"> </li>
                  <li class="ms-deletable"> <img src="../../assets/img/people/people-5.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-10.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-9.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Perform the required unit tests</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="../../assets/img/people/people-9.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-10.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-9.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="../../assets/img/people/people-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-invite">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <i class="flaticon-network"></i>
            <p>Invite Team Members</p>
            <form>
              <div class="ms-form-group">
                <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
              </div>
              <div class="ms-form-group">
                <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
              </div>
            </form>
          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-settings">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <div class="row">
              <div class="col-md-12 text-left mb-5">
                <h4 class="section-title bold">Customize</h4>
                <div>
                  <label class="ms-switch">
                    <input type="checkbox" id="dark-mode">
                    <span class="ms-switch-slider round"></span>
                  </label>
                  <span> Dark Mode </span>
                </div>
                <div>
                  <label class="ms-switch">
                    <input type="checkbox" id="remove-quickbar">
                    <span class="ms-switch-slider round"></span>
                  </label>
                  <span> Remove Quickbar </span>
                </div>
              </div>
              <div class="col-md-12 text-left">
                <h4 class="section-title bold">Keyboard Shortcuts</h4>
                <p class="ms-directions mb-0"><code>Esc</code> Close Quick Bar</p>
                <p class="ms-directions mb-0"><code>Alt + (1 -&gt; 6)</code> Open Quick Bar Tab</p>
                <p class="ms-directions mb-0"><code>Alt + Q</code> Enable Quick Bar Configure Mode</p>

              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </aside>

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Remind me about</label>
              <textarea class="form-control" name="reminder"></textarea>
            </div>

            <div class="ms-form-group">
              <span class="ms-option-name fs-14">Repeat Daily</span>
              <label class="ms-switch float-right">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="reminder-time">
                    <option value="">12:00 pm</option>
                    <option value="">1:00 pm</option>
                    <option value="">2:00 pm</option>
                    <option value="">3:00 pm</option>
                    <option value="">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>

            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/perfect-scrollbar.js"> </script>
  <script src="../../assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="../../assets/js/slick.min.js"> </script>
  <script src="../../assets/js/moment.js"> </script>
  <script src="../../assets/js/jquery.webticker.min.js"> </script>
  <script src="../../assets/js/Chart.bundle.min.js"> </script>
  <script src="../../assets/js/Chart.Financial.js"> </script>
   <!-- Xử lí vadidate thêm mới thành viên -->
   <script>
     // vadidate form

    function vadiate(ten,username,pass,email,role,repass){
      if(ten==""||username ==""||pass==""||email==""||role==null) {
       if(ten=="") $("input#ten").css("border","1px solid red");
       else $("input#ten").css("border","1px solid rgba(0,0,0,0.1)");
       if(username =="") $("input#username").css("border","1px solid red");
       else $("input#username").css("border","1px solid rgba(0,0,0,0.1)");
       if(pass =="") $("input#pass").css("border","1px solid red");
       else $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
       if(email =="") $("input#email").css("border","1px solid red");
       else $("input#email").css("border","1px solid rgba(0,0,0,0.1)");
       if(role ==null) $(".role").css("border","1px solid red");
       else $(".role").css("border","1px solid rgba(0,0,0,0.1)");
       if(repass =="") $("input#repass").css("border","1px solid red");
       else $("input#repass").css("border","1px solid rgba(0,0,0,0.1)");
       return false ;
      }else {
        $("input#ten").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#username").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#email").css("border","1px solid rgba(0,0,0,0.1)");
        $(".role").css("border","1px solid rgba(0,0,0,0.1)");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(email)) {
          alert("Hay nhap dia chi email hop le ! \n ví dụ : lehieu@gmail.com");
          return false;
        }
        if(repass!=pass) {
          alert("Hai mật khẩu không giống nhau !");
          return false;
        }
        else  return true;
      }
    }


    //  xử lí sự kiện thêm mới 




    $(".themmoi").click(function(){
       var ten = $("input#ten").val();
       var username = $("input#username").val();
       var pass = $("input#pass").val();
       var repass = $("input#repass").val();
       var email = $("input#email").val();
       var role =$('input[name="role"]:checked').val();
       var image = $('input[name="image"]').val();
       var file_data =  $('input[name="image"]').prop('files')[0];  
       if(vadiate(ten,username,pass,email,role,repass)){
        var form_data = new FormData();                  
       form_data.append('file', file_data);
       form_data.append('ten', ten);
       form_data.append('username', username);
       form_data.append('pass',pass); 
       form_data.append('email', email);
       form_data.append('role', role);
    
       $.ajax({
        url: "../ajax/themmoithanhvien.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(){
            alert("Thêm mới thành công !"); 
            location.reload();
        }
      });

       }

    });
   </script>







  <!-- Xử lí tìm kiếm -->
   <script>
      $(".timkiem").click(function(){
         var keytk = $(".timkiemtv").val();
         if(keytk=="") alert("Nhập tên tài khoản bạn muốn tìm !");
         else{ 

          var dl = JSON.stringify(keytk);
        
           $.ajax({
           type: 'POST',
           url: '../ajax/xulitimkiemthanhvien.php',
           data: {data: dl},
           datatype: 'json',
           success: function (data) {
            if(Object.keys(data).length==0) alert("Không tìm thấy bản ghi nào phù hợp !");
            else{
              var s =``;
              $(data).each(function (index, tv) {
                s+=` <tr>
                    <th scope="row"> `+tv.id+` </th>
                    <th scope="row"> `+tv.ten+` </th>
                    <th scope="row">`+tv.email+` </th>
                    <th scope="row"><img src="/PHP_BAI3/images/`+tv.image+`" style="max-width: 57px;border-radius: 0%;"></th> `;
                    if(tv.role=="1") s+=`<th scope="row">Admin</th>`;
                    else s+=`<th scope="row">User</th>`;
                   s+=` <td> 
                      <a href="#"><i data-toggle="modal" data-target="#myModal" class="fa fa-plus-circle" aria-hidden="true" style="color: #00ff8e;"></i></a>
                      <a href="suathanhvien.php?id=`+tv.id+`"><i class="fas fa-pencil-alt text-secondary"></i></a> 
                      <a href="#"><i class="fas fa-trash-alt xoa" id=`+tv.id+` onclick="xoathanhvien(this)"></i></a>
                      </td>    
                  </tr>`;
              });
              $(".appendl").html("");
              $(".appendl").html(s);    
           }
           },error: function () {
           alert("lỗi");
        
             }
          });
      
         }
      });
   </script>


  <!-- Chức năng xóa thành viên -->
   
  <script>
     function xoathanhvien(e){
       var id = $(e).attr("id");
       var dl = JSON.stringify(id);
       if(confirm("Bạn chắc chắn muốn xóa thành viên này ?")){
        $.ajax({
           type: 'POST',
           url: '../ajax/xoathanhvien.php',
           data: {data: dl},
           datatype: 'json',
           success: function (data) {
             location.reload();
           },error: function () {
                alert("lỗi");
        
              }
          });
       }
     }


     // phân trang 

      // phan trang 
 var pagecurrent = 0;
  function xemthem(e){
   
  
    var sopage = $(e).attr("sopage");
    pagecurrent++;
    if(pagecurrent<sopage){
    
      $.ajax({
       type: 'GET',
       url: '../ajax/phantrangthanhvien.php?pagecurent='+pagecurrent,
       success: function (data) {
        var s =``;
              $(data).each(function (index, tv) {
                s+=` <tr>
                    <th scope="row"> `+tv.id+` </th>
                    <th scope="row"> `+tv.ten+` </th>
                    <th scope="row">`+tv.email+` </th>
                    <th scope="row"><img src="/PHP_BAI3/images/`+tv.image+`" style="max-width: 57px;border-radius: 0%;"></th> `;
                    if(tv.role=="1") s+=`<th scope="row">Admin</th>`;
                    else s+=`<th scope="row">User</th>`;
                   s+=` <td> 
                      <a href="#"><i data-toggle="modal" data-target="#myModal" class="fa fa-plus-circle" aria-hidden="true" style="color: #00ff8e;"></i></a>
                      <a href="suathanhvien.php?id=`+tv.id+`"><i class="fas fa-pencil-alt text-secondary"></i></a> 
                      <a href="#"><i class="fas fa-trash-alt xoa" id=`+tv.id+` onclick="xoathanhvien(this)"></i></a>
                      </td>    
                  </tr>`;
              });
             
              $(".appendl").append(s);    
       },error: function () {
        alert("lỗi");
       
         }
      });
    }else {
      alert("không còn bản ghi nào !");
    }
 
  }

  </script>
  
  <script src="../../assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../../assets/js/settings.js"></script>
   
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productcata.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:09:40 GMT -->
</html>
