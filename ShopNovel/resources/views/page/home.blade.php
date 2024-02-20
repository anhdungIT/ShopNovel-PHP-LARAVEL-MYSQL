@extends('layout')
@section('content')
<!-- SLIDE -->
<div class="slider-content">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">

        <div class="slide-im first">
            <img src="{{asset('public/frontend/images/panda_991c0f531ab741b6b66dca2614d6db0a.jpg')}}" alt="">
        </div>
        <div class="slide-im">
            <img src="{{asset('public/frontend/images/sl02.jpg')}}" alt="">
        </div>
        <div class="slide-im">
            <img src="{{asset('public/frontend/images/sl03.jpg')}}" alt="">
        </div>
        <div class="slide-im">
            <img src="{{asset('public/frontend/images/sl.jpg')}}" alt="">
        </div>

        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>

<div class="image-slider">
    <div class="image-item">
        <div class="image">
            <img src="{{asset('public/frontend/images/TT_BB.jpg')}}" alt="" />
            <div class="caption_banner_slide">
                <h3>Truyện Tranh</h3>
                <a href="#" class="btn">
                    <span class="btn-inner">Xem ngay</span>
                </a>
            </div>
        </div>
    </div>
    <div class="image-item">
        <div class="image">
            <img src="{{asset('public/frontend/images/LN_BB.jpg')}}" alt="" />
            <div class="caption_banner_slide">
                <h3>Light Novel</h3>
                <a href="#" class="btn">
                    <span class="btn-inner">Xem ngay</span>
                </a>
            </div>
        </div>
    </div>
    <div class="image-item">
        <div class="image">
            <img src="{{asset('public/frontend/images/TN_BB.jpg')}}" alt="" />
            <div class="caption_banner_slide">
                <h3>Thiếu Nhi</h3>
                <a href="#" class="btn">
                    <span class="btn-inner">Xem ngay</span>
                </a>
            </div>
        </div>
    </div>
    <div class="image-item">
        <div class="image">
            <img src="{{asset('public/frontend/images/TTTQ.jpg')}}" alt="" />
            <div class="caption_banner_slide">
                <h3>Tiểu Thuyết</h3>
                <a href="#" class="btn">
                    <span class="btn-inner">Xem ngay</span>
                </a>
            </div>
        </div>
    </div>

</div>

{{-- <section class="section section-collection">
    <div class="wrapper-heading-home animation-tran text-center active">
        <div class="container-fluid">
            <div class="site-animation">
                <h2>
                    <a href="/collections/sach-moi">
                        SÁCH MỚI
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <div class="wrapper-collection-1">
        <div class="container-fluid">
            <div class="row">
                <div class="clearfix content-product-list">
                    @foreach ($getall_product as $key => $product)
                        <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                            <div class="product-block product-resize fixheight" style="height: 331px;">
                                <div class="product-img ">
                                    <div class="product-sale"><span>-15%</span></div>
                                    <a href="/products/thuc-don-cua-bar-mao" title="Thực Đơn Của Bar Mao"
                                        class="image-resize ratiobox lazyloaded" data-expand="-1"
                                        style="height: 246px;">
                                        <picture>
                                            <img class="img-loop lazyautosizes lazyloaded" data-sizes="auto"
                                                src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="240px"
                                                alt=" Thực Đơn Của Bar Mao " sizes="500px">
                                        </picture>
                                        <picture>
                                            <img class="img-loop img-hover lazyloaded"
                                                data-src="//product.hstatic.net/200000294254/product/img_7097_612d14ca33fc4429ab8a82c1376f7bcc_grande.jpg"
                                                src="{{URL::to('public/uploads/product/'.$product->product_image)}}"
                                                alt=" Thực Đơn Của Bar Mao ">
                                        </picture>
                                    </a>
                                    <div class="pro-price-mb">
                                        <span class="pro-price">{{$product->product_promotionalprice}}</span>
                                        <span class="pro-price-del"><del class="compare-price">{{$product->product_price}}</del></span>
                                    </div>
                                </div>
                                <div class="product-detail clearfix">
                                    <div class="box-pro-detail">
                                        <h3 class="pro-name">
                                            <a href="/products/thuc-don-cua-bar-mao" title="Thực Đơn Của Bar Mao">
                                                {{$product->product_name}}
                                            </a>
                                        </h3>
                                        <div class="box-pro-prices">
                                            <p class="pro-price highlight">
                                                <span>{{number_format($product->product_promotionalprice).'đ'}}</span>

                                                <span class="pro-price-del">
                                                    <del class="compare-price">
                                                        {{number_format($product->product_price).'đ'}}
                                                    </del>
                                                </span>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="section section-collection">
    <div class="wrapper-heading-home animation-tran text-center active">
      <div class="container-fluid">
        <div class="site-animation">
          <h2>
            <a href="#">
              Sản phẩm mới
            </a>
          </h2>
        </div>
      </div>
    </div>
    <div class="wrapper-collection-2">
      <div class="container-fluid">
        <div class="row">
          <div class="clearfix content-product-list ">
            @foreach ($getall_product as $key => $product)
                <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                <div class="product-block product-resize fixheight" style="height: 438px;">
                    <div class="product-img ">
                    <div class="product-sale"><span>Mới</span></div>
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"
                        title="Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu"
                        class="image-resize ratiobox lazyloaded" style="height: 353px;" data-expand="-1">
                        <picture>
                        <img class="img-loop lazyautosizes lazyloaded" data-sizes="auto"
                            data-src="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            data-lowsrc="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$product->product_image)}}"
                            alt=" Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu " sizes="246px">
                        </picture>
                        <picture>
                        <img class="img-loop img-hover lazyloaded"
                            data-src="//product.hstatic.net/200000294254/product/img_3350_9388ef4280bc49689b40556833c0728b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$product->product_image)}}"
                            alt=" Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu ">
                        </picture>
                    </a>

                    <div class="pro-price-mb">
                        <span class="pro-price">49,500₫</span>
                        <span class="pro-price-del"><del class="compare-price">99,000₫</del></span>
                    </div>
                    </div>
                    <div class="product-detail clearfix">
                    <div class="box-pro-detail">
                        <h3 class="pro-name">
                        <a href="/products/ton-trong-cong-viec-bao-nhieu-tuong-lai-di-xa-bay-nhieu"
                            title="Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu">
                            {{$product->product_name}}
                        </a>
                        </h3>
                        <div class="box-pro-prices">
                        <p class="pro-price highlight">
                            <span>{{number_format($product->product_promotionalprice).'₫'}}</span>

                            <span class="pro-price-del">
                            <del class="compare-price">
                                {{number_format($product->product_price).'₫'}}
                            </del>
                            </span>

                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach


          </div>
        </div>
      </div>


    </div>
</section>

<div class="wrapper-home-banner">
    <div style="display: flex" class="clearfix">
        <div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
            <div class="block-banner-category ratiobox">
                <a class="link-banner lazyloaded" href="/products/su-co-ngoai-y-muon" data-expand="-1">
                    <img class="lazyautosizes lazyloaded" data-sizes="auto"
                        data-src="https://file.hstatic.net/200000294254/file/su-co_dbac36f79085449e82827845b1adaf8a.png"
                        data-lowsrc="https://file.hstatic.net/200000294254/file/su-co_dbac36f79085449e82827845b1adaf8a.png"
                        src="https://file.hstatic.net/200000294254/file/su-co_dbac36f79085449e82827845b1adaf8a.png"
                        alt="Sự Cố Ngoài Ý Muốn" sizes="502px">
                </a>
                <div class="caption_banner">
                    <span class="subtitle">Đam Mỹ </span>
                    <h3>Sự Cố Ngoài Ý Muốn</h3>

                    <a class="button" href="/products/su-co-ngoai-y-muon">Xem thêm</a>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
            <div class="block-banner-category ratiobox">
                <a class="link-banner lazyloaded" href="/products/to-thich-guong-mat-cau" data-expand="-1">
                    <img class=" lazyautosizes lazyloaded" data-sizes="auto"
                        data-src="https://file.hstatic.net/200000294254/file/kimi_7ad025868d804252928591543b26f3a1.jpeg"
                        data-lowsrc="https://file.hstatic.net/200000294254/file/kimi_7ad025868d804252928591543b26f3a1.jpeg"
                        src="https://file.hstatic.net/200000294254/file/kimi_7ad025868d804252928591543b26f3a1.jpeg"
                        alt="Tớ Thích Gương Mặt Cậu" sizes="502px">
                </a>
                <div class="caption_banner">
                    <span class="subtitle">Manga - Comic</span>
                    <h3>Tớ Thích Gương Mặt Cậu</h3>

                    <a class="button" href="/products/to-thich-guong-mat-cau">Xem thêm</a>

                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
            <div class="block-banner-category ratiobox">
                <a class="link-banner lazyloaded" href="/products/hanh-trinh-cua-elaina-tap-10" data-expand="-1">
                    <img class="lazyautosizes lazyloaded" data-sizes="auto"
                        data-src="https://file.hstatic.net/200000294254/file/elaina_cffc561aee834a58b6dc46646db03b2b.jpeg"
                        data-lowsrc="https://file.hstatic.net/200000294254/file/elaina_cffc561aee834a58b6dc46646db03b2b.jpeg"
                        src="https://file.hstatic.net/200000294254/file/elaina_cffc561aee834a58b6dc46646db03b2b.jpeg"
                        alt="Hành Trình Của Elaina 10" sizes="502px">
                </a>
                <div class="caption_banner">
                    <span class="subtitle">Light Novel</span>
                    <h3>Hành Trình Của Elaina 10</h3>

                    <a class="button" href="/products/hanh-trinh-cua-elaina-tap-10">Xem thêm</a>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="section section-collection">
    <div class="wrapper-heading-home animation-tran text-center active">
      <div class="container-fluid">
        <div class="site-animation">
          <h2>
            <a href="#">
              Giảm 50%+
            </a>
          </h2>
        </div>
      </div>
    </div>
    <div class="wrapper-collection-2">
      <div class="container-fluid">
        <div class="row">
          <div class="clearfix content-product-list ">
            @foreach ($sale_product as $key => $productsale)
                <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                <div class="product-block product-resize fixheight" style="height: 438px;">
                    <div class="product-img ">
                    <div class="product-sale"><span>50%</span></div>
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}"
                        title="Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu"
                        class="image-resize ratiobox lazyloaded" style="height: 353px;" data-expand="-1">
                        <picture>
                        <img class="img-loop lazyautosizes lazyloaded" data-sizes="auto"
                            data-src="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            data-lowsrc="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$productsale->product_image)}}"
                            alt=" Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu " sizes="246px">
                        </picture>
                        <picture>
                        <img class="img-loop img-hover lazyloaded"
                            data-src="//product.hstatic.net/200000294254/product/img_3350_9388ef4280bc49689b40556833c0728b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$productsale->product_image)}}"
                            alt=" Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu ">
                        </picture>
                    </a>

                    <div class="pro-price-mb">
                        <span class="pro-price">49,500₫</span>
                        <span class="pro-price-del"><del class="compare-price">99,000₫</del></span>
                    </div>
                    </div>
                    <div class="product-detail clearfix">
                    <div class="box-pro-detail">
                        <h3 class="pro-name">
                        <a href="/products/ton-trong-cong-viec-bao-nhieu-tuong-lai-di-xa-bay-nhieu"
                            title="Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu">
                            {{$productsale->product_name}}
                        </a>
                        </h3>
                        <div class="box-pro-prices">
                        <p class="pro-price highlight">
                            <span>{{number_format($productsale->product_promotionalprice).'₫'}}</span>

                            <span class="pro-price-del">
                            <del class="compare-price">
                                {{number_format($productsale->product_price).'₫'}}
                            </del>
                            </span>

                        </p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach


          </div>
        </div>
      </div>


    </div>
</section>

<div class="wrapper-home-information animation-tran active">
    <div class="container-fluid">
        <div class="flex-container-information">
            <div class="col-md-6 col-sm-12 col-xs-12 wrap-pd-infor wrap-flex-align flex-column box_stick">
                <div class="box-banner-inf">
                    <div class="content site-animation">
                        <h2 class="title dark">Về chúng tôi</h2>

                        <a class="button" href="/pages/about-us" title="Xem ngay">
                            <span>Xem ngay</span>
                        </a>

                    </div>
                </div>
                <div class="container-background">
                    <img class=" lazyloaded"
                        src="https://file.hstatic.net/200000294254/file/amak-store-hinh-2_3b2372fba5db49599bfd3ec412befd16.jpg"
                        data-src="https://file.hstatic.net/200000294254/file/amak-store-hinh-2_3b2372fba5db49599bfd3ec412befd16.jpg"
                        alt="Về chúng tôi">
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 wrap-pd-infor wrap-flex-align flex-column box_lef">
                <div class="inf-content site-animation">
                    <p>&nbsp;</p>
                    <h2>AMAK Store – Hiệu sách AMAK</h2>
                    <p>Hiệu sách Amak là không gian sách nho nhỏ nằm trong con ngõ yên tĩnh của phường Bách Khoa,
                        quận Hai Bà Trưng, Hà Nội. Tại đây, bạn có thể dễ dàng tìm thấy những ấn phẩm thuộc nhiều
                        thể loại dành cho các bạn trẻ như:</p>
                    <p><strong>Dòng Light Novel</strong> với các tựa nổi tiếng như Date A Live, Arifureta, Majo no
                        Tabitabi (Hành trình của Elaina), Rakudai Kishi no Cavalry (Hiệp sĩ lưu ban), World Teacher,
                        Re:Monster,…</p>
                    <p><strong>Nhóm sách Đam mỹ - Boy love</strong> với các tiểu thuyết đam mỹ như Sát Phá Lang,
                        Niên Hoa, Để Tớ Khóc,… đến các tựa sách boylove Thái như Lovesick, 2gether,… đang được đông
                        đảo bạn đọc quan tâm trong thời gian gần đây.</p>
                    <p><strong>Dòng sách Bí Ẩn – Kỳ Dị</strong> cũng hiện diện tại Hiệu sách AMAK với các tựa nổi
                        bật: Chú chó tử thần, Dị Nhãn Phòng Đông, Tiệm đồ cổ Sea Voice,…</p>
                    <p><strong>Manga – Comic</strong> với một số tựa nổi bật như Young Black Jack, Tableau Gate,…
                        Đặc biệt là gần đây có thêm sự xuất hiện của các tựa manga boylove như One Room Angel, Umibe
                        No Étranger (Người lạ bên bờ biển),…</p>
                    <p><strong>Sách thiếu nhi </strong>dành cho các bé với những tựa sách có giá trị như Bono Bono,
                        Poyo Poyo,… giúp các bé học hỏi được nhiều hơn từ cuộc sống xung quanh mình.</p>
                    <p><strong>Sách kỹ năng</strong> nhằm cung cấp cho các bạn trẻ những kỹ năng sống, học tập, làm
                        việc để phù hợp với thời đại 4.0 như: Trưởng thành, Nghĩ tích cực cho đời bớt áp lực, 10
                        phút tự họp mỗi ngày, Nghệ thuật nổi giận,…</p>
                    <p>Không chỉ có sách, tại AMAK Store cũng có các <strong>Phụ kiện, văn phòng phẩm</strong> được
                        nhập từ các đơn vị phân phối chính thức và có bản quyền như standee, bìa hồ sơ, móc khoá,
                        đèn,… để đáp ứng nhu cầu sưu tầm của bạn đọc.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection