<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novel B&B - Best Novel Online Store</title>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- FONT GOOGlE -->
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    {{-- <link rel="stylesheet" href="./css/Home-page/slick/slicker.css"> --}}
    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/slick/slicker.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/home-menu/home.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/product-detail/de-product.css')}}">

    <!--Slick-->
    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/home-menu/slick.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/pro-de.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/handcash.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/product/cart.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/Home-page/product/customent.css')}}">

    <link rel="stylesheet" href="{{asset('public/frontend/css/sweetalert.css')}}">
  


</head>

<body>
    <!-- HEADER -->
    <nav class="navbar">
        <div class="text-center">
            <p>Chào mừng bạn đến với shop Novel B&B</p>
        </div>
        <div class="nav">
            <img src="{{asset('public/frontend/images/lg.png')}}" class="brand-logo" alt="">
            <div class="nav-item">
                <?php
                    $customer_id = Session::get('customer_id');
                    $shipping_id = Session::get('shipping_id');
                    if ($customer_id != NULL && $shipping_id == NULL) {
                ?>
                <a style="padding: 10px" href="{{URL::to('/checkout')}}">Thanh toán</a>
                <a style="padding: 10px" href="{{URL::to('/bill-order')}}">Đơn mua</a>
                <?php
                    }elseif ($customer_id != NULL && $shipping_id != NULL){
                ?>
                <a style="padding: 10px" href="{{URL::to('/payment')}}">Thanh toán</a>
                <a style="padding: 10px" href="{{URL::to('/bill-order')}}">Đơn mua</a>
                <?php
                }else {
                ?>
                <a style="padding: 10px" href="{{URL::to('/login-checkout')}}">Thanh toán</a>
                <?php
                    }
                ?>

                <?php
                    $customer_id = Session::get('customer_id');
                    if ($customer_id != NULL) {
                ?>
                <a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a>
                <?php
                   }else {
                ?>
                <a href="{{URL::to('/login-checkout')}}"><i class="fa fa-user-circle"></i></a>
                <?php
                }
                ?>
                <a href="{{URL::to('/show-cart')}}">
                    <i class="fa fa-shopping-cart"></i>
                </a>

            </div>
        </div>
        <div class="desktop-navigation-menu">

            <div class="container">

                <ul class="desktop-menu-category-list">

                    <li class="menu-category">
                        <a href="{{URL::to('/trang-chu')}}" class="menu-title">Trang chủ</a>
                    </li>

                    <li class="menu-category">
                        <a href="./classfix.html" class="menu-title">Danh mục sách
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">

                                <li class="menu-title">
                                    <a href="#">Sách Hot</a>
                                </li>

                                @foreach ($category as $key => $cate) 

                                    <li class="panel-list-item">
                                        <a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                                    </li>

                                @endforeach


                            </ul>

                            

                        </div>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Sách bán chạy</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">phụ kiện</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Blog</a>

                        <ul class="dropdown-list">

                            <li class="dropdown-item">
                                <a href="#">Tin Tức</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Thông báo bản quyền</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Review</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">Trò chuyện cùng B&B</a>
                            </li>

                            <li class="dropdown-item">
                                <a href="#">CTKM</a>
                            </li>

                        </ul>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Giới thiệu</a>
                    </li>

                    <li class="menu-category">
                        <a href="#" class="menu-title">Liên hệ</a>
                    </li>
                </ul>

            </div>

        </div>
    </nav>
    
    @yield('content')
    
    <div style="padding: 0" class="top-footer">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="area_newsletter">
                        <div class="title_newsletter">
                            <h4>Đăng kí nhận tin</h4>
                        </div>
                        <div class="form_newsletter form_newsletter_customer">
                            <form accept-charset="UTF-8" action="/account/contact" class="contact-form" method="post">
                                <input name="form_type" type="hidden" value="customer">
                                <input name="utf8" type="hidden" value="✓">

                                <div class="input-group" style="display: flex">
                                    <input required="" type="email" id="newsletter-email" value=""
                                        placeholder="Nhập email của bạn" name="contact[email]"
                                        aria-label="Email Address">
                                    <button type="submit" class="button dark">Đăng kí</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="area_phone_contact">
                    <p class="number_phone">
                        <i class="fa fa-phone "></i>
                        <span>Hỗ trợ / Mua hàng:</span>
                        <a href="tel:093.663.9870">
                            093.663.9870
                        </a>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <footer>
        <div class="footer-nav">

            <div class="container">

                <div class="footer-logo">
                    <img src="./images/lg.png" alt="">
                    <h2>WEBSITE THUỘC QUYỀN</h2>
                    <P>ANH DŨNG</P>
                </div>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Liên kết</h2>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Chính sách thanh toán</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Chính sách vận chuyển</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Chính sách bảo mật thông tin</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Chính sách xử lý khiếu nại</a>
                    </li>

                    <li class="footer-nav-item">
                        <a href="#" class="footer-nav-link">Chính sách đổi trảt</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">Novel Bed & Breakfast</h2>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            01 Tràng Tiền, Hoàn Kiếm, Hà Nội 100000, Việt Nam
                        </address>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <a href="tel:+607936-8058" class="footer-nav-link">093.663.9870</a>
                    </li>

                    <li class="footer-nav-item flex">
                        <div class="icon-box">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>

                        <a href="mailto:example@gmail.com" class="footer-nav-link">NovelShop@gmail.com</a>
                    </li>

                </ul>

                <ul class="footer-nav-list">

                    <li class="footer-nav-item">
                        <h2 class="nav-title">FANPAGE</h2>
                    </li>

                    <li>
                        <ul class="social-link">

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>

                            <li class="footer-nav-item">
                                <a href="#" class="footer-nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </div>
        <div class="footer-bottom">

            <div class="container">

                <img src="./images/payment.png" alt="payment method" class="payment-img">

                <p class="copyright">
                    Copyright &copy; <a href="#">Anon</a> all rights reserved.
                </p>

            </div>

        </div>
    </footer>


    <script type="text/javascript" src="{{asset('public/frontend/js/slide.js')}}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!-- JS -->
    <!-- <script src="./js/app.js"></script> -->
    <script src="{{asset('public/frontend/js/index.js')}}"></script>
    <script src="{{asset('public/frontend/js/search.js')}}"></script>
    
    <!--SLICK-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{asset('public/frontend/js/slick.js')}}"></script>
    <script src="{{asset('public/frontend/js/app.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            $(window).on('scroll', function () {
                if ($(window).scrollTop()) {
                    $(".navbar").addClass('bgc');
                } else {
                    $(".navbar").removeClass('bgc');
                }
            });
        });
        </script>


<!--Autoplay-->
<script type="text/javascript">
        var counter = 1;
        setInterval(function () {
            document.getElementById('radio' + counter).checked = true;
            counter++;
            if (counter > 4) {
                counter = 1;
            }
        }, 8000);
</script>
<script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(){
            var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_'+ id).val();
            var cart_product_name = $('.cart_product_name_'+ id).val();
            var cart_product_image = $('.cart_product_image_'+ id).val();
            var cart_product_price = $('.cart_product_price_'+ id).val();
            var cart_product_promotionalprice = $('.cart_product_promotionalprice_'+ id).val();
            var cart_product_qty = $('.cart_product_qty_'+ id).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/add-cart-ajax')}}',
                method: 'POST',
                data:{
                    cart_product_id:cart_product_id,
                    cart_product_name:cart_product_name,
                    cart_product_image:cart_product_image,
                    cart_product_price:cart_product_price,
                    cart_product_promotionalprice:cart_product_promotionalprice,
                    cart_product_qty:cart_product_qty,
                    _token:_token
                },
                success:function(){
                    swal({
                            title: "Đã thêm sản phẩm vào giỏ hàng",
                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                            showCancelButton: true,
                            cancelButtonText: "Xem tiếp",
                            confirmButtonClass: "btn-success",
                            confirmButtonText: "Đi đến giỏ hàng",
                            closeOnConfirm: false
                        },
                        function() {
                            window.location.href = "{{url('/gio-hang')}}";
                        });
                }


            });
        });
    });
</script>


<script src="{{asset('public/frontend/js/pro-de.js')}}"></script>



</body>

</html>