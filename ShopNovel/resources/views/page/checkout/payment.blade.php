@extends('layout')
@section('content')
<div class="breadcrumb-shop">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pd5  ">
                <ol class="breadcrumb breadcrumb-arrows" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="./index.html" target="_self" itemprop="item"><span itemprop="name">Trang chủ /
                            </span></a>
                    </li>

                    <li class="active" itemprop="itemListElement" itemscope=""
                        itemtype="http://schema.org/ListItem">
                        <span itemprop="item" content="https://amakstore.vn/cart"><span itemprop="name">Giỏ hàng
                            </span></span>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-total-main">
    <div class="products-container">
       
        <div style="width: 50%" class="contentCart-detail">
            <div class="cart-container">
                <div class="cart-col-left">
                    <div class="main-content-cart">
                        <form>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <?php
                                        $content = Cart::content();
                                    ?>
                                    <table class="table-cart">
                                        <thead>
                                            <tr>
                                                <th class="image">&nbsp;</th>
                                                <th class="item">Tên sản phẩm</th>
                                                <th class="remove">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($content as $v_content)
                                                <tr class="line-item-container" data-variant-id="1094245395">
                                                    <td class="image">
                                                        <div class="product_image">
                                                            <a href="/products/date-a-live-tap-13">
                                                                <img src="{{URL::to('public/uploads/product/'.$v_content->options->image)}}"
                                                                    alt="">
                                                            </a>

                                                        </div>
                                                    </td>
                                                    <td class="item">

                                                        <h3><a href="#">{{$v_content->name}}</a></h3>

                                                        <p>
                                                            <span class="pri">{{number_format($v_content->price).'₫'}}</span>

                                                        </p>
                                                        <p class="variant">

                                                            <span class="variant_title">Bản Thường</span>

                                                        </p>
                                                        {{-- <div class="qty quantity-partent qty-click clearfix">
                                                            
                                                            <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                                                {{ csrf_field() }}
                                                                 <input type="number" name="cart_quantity" value="{{$v_content->qty}}" min="1"
                                                                class="tc line-item-qty item-quantity">
                                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-comtrol">
                                                                <button style="width: 80px" type="submit" value="Cập nhật" name="update_qty" class="qtyplus qty-btn">cập nhật</button>
                                                            </form>
                                                           
                                                          
                                                        </div> --}}

                                                        <p class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">
                                                                <?php
                                                                    $subtotal = $v_content->price * $v_content->qty;
                                                                    echo number_format($subtotal).'₫';
                                                                ?>
                                                            </span>
                                                        </p>

                                                    </td>
                                                    {{-- <td class="remove">
                                                        <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="cart">
                                                            <img src="//theme.hstatic.net/200000294254/1000741335/14/ic_close.png?v=104"></a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End cart -->
        </div>
        <div class="cart-payment">
            <h3>Vui lòng chọn phương thức thanh toán</h3>
            <form action="{{URL::to('/order-place')}}" method="POST">
                {{ csrf_field() }}
                <div class="radio-wrapper content-box-row">
                    <label style="display: flex;" class="radio-label">
                        <div style="padding: 10px;" class="radio-input payment-method-checkbox">
                            <input class="input-radio"
                                name="payment_option" type="radio" value="1">
                        </div>
                        <img class='main-img'
                            src="https://hstatic.net/0/0/global/design/seller/image/payment/cod.svg?v=1" />
                        <div style="padding:0 10px;">
                            <span class="radio-label-primary">Thanh toán khi giao hàng
                                (COD)</span>
                            <span class='quick-tagline hidden'></span>
                            <span class='quick-tagline hidden '>Buy Now, Pay Later
    
                        </div>
                    </label>
                </div>
                <div class="radio-wrapper content-box-row">
                    <label  style="display: flex;" class="radio-label">
                        <div style="padding: 10px;" class="radio-input payment-method-checkbox">
                            <input
                                class="input-radio" name="payment_option" type="radio"
                                value="2">
                        </div>
                        <img class='main-img'
                                src="https://hstatic.net/0/0/global/design/seller/image/payment/other.svg?v=1" />
                        <div style="padding:0 10px;">
                            <span class="radio-label-primary">Chuyển khoản qua ngân
                                hàng</span>
                            <span class='quick-tagline hidden'></span>
                            <span class='quick-tagline  hidden '>Buy Now, Pay Later
                        </div>
                    </label>
                </div> 
                <div class="cart-payment-info">
                    <span>Tổng tiền: {{Cart::subtotal().'₫'}}</span>
                </div>

                <div class="sidebox-order_action">
                    <input type="submit" value="Đặt hàng" name="send_order_place" class="button dark btncart-checkout">
                    <p class="link-continue text-center">
                        <a href="#">
                            <i class="fa fa-reply"></i> Hủy mua hàng
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <div class="information-main">
        <div class="information">
        </div>
    </div>
</div>
@endsection