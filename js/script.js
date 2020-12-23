$('#btnLogin').on('click',function(){
    var username = $('#uname').val(); 
    var password = $('#psw').val(); 
    console.log(username," ", password)
    
    $.post('controller.php?q=verify',
           {
               username:username,
               password:password
           },
           function(data){
                console.log(data);
                if(data == 1){                        
                    $('.error').removeClass().addClass('alert alert-success').html('<i class="fa fa-unlock"></i> Logging in...'); 
                    setInterval(function(){
                        window.location = 'index.php';
                    },1000);
                }else{
                    $('.error').addClass('alert alert-danger').html('Tài khoản hoặc mật khẩu không chính xác!');
                }
        }); 
    });

    $(document).ready(function(){
        $(window).scroll(function () {
                if ($(this).scrollTop() > 40) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
    });
    
    
    ///
    function toggleResetPswd(e){
        e.preventDefault();
        $('#logreg-forms .form-signin').toggle() // display:block or none
        $('#logreg-forms .form-reset').toggle() // display:block or none
    }
    
    function toggleSignUp(e){
        e.preventDefault();
        $('#logreg-forms .form-signin').toggle(); // display:block or none
        $('#logreg-forms .form-signup').toggle(); // display:block or none
    }
    
    $(()=>{
        // Login Register Form
        $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
        $('#logreg-forms #cancel_reset').click(toggleResetPswd);
        $('#logreg-forms #btn-signup').click(toggleSignUp);
        $('#logreg-forms #cancel_signup').click(toggleSignUp);
    })
    
    function checkactive(e){
        $('a.item.active').removeClass("active"); 
        // var mang= $("a.item");
        // console.log(mang)
        // for(let i=0 ; i< mang.length ; i++){
        //  var item = mang[i];
        //  console.log($(item).html());
        // }
        $(e).addClass('active');
      
    }
    
    // function mouseOver(e) {
    //    $(this).css("display","block");
    //   }
      
    //   function mouseOut(e) {
    //     $(this).css("display","none");
    //   }
    
    // hiệu ứng clcik chọn cart
      function addtocart(e){
     
      // var img = $(e).closest(".card-title").find("img");
    
      // var options={to:'#giohang' ,className : 'cart-fly'}
      // var cart_css= `.cart-fly{background-image:  url("`+$(img).attr("src")+`"); width: 60px;
      // height: 60px;}`;
      // $("style#cart-css").html(cart_css);
      // img.effect('transfer',options,900);
    
      }
    
    
    
      // vote
      $(function (){
        var star = '.star',
            selected = '.selected';
        
        $(star).on('click', function(){
          $(selected).each(function(){
            $(this).removeClass('selected');
          });
          $(this).addClass('selected');
          // alert("Cảm ơn bạn đã đánh giá sản phẩm này  !")
        });
      
      });
    
      //addtocart
    
      // $(".addcart").click(function(){
      //   alert("Thêm vào giỏ hàng thành công");
      // })
    
    
      // // delete snar phẩm to cart
    
      // $(".far.fa-trash-alt").click(function(){
      //   if(confirm("bạn có muốn xóa sản phẩm này ra khỏi giỏ hàng không ?")){
      //     $(this).closest("tr").css("display","none");
      //   }
      // })
    