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
       
        <div class="col-md-8 col-sm-8 col-xs-12 contentCart-detail">
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
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            {{-- <button type="button" class="qtyminus qty-btn">-</button> --}}
                                                            <form action="{{URL::to('/update-cart-quantity')}}" method="POST">
                                                                {{ csrf_field() }}
                                                                 <input type="number" name="cart_quantity" value="{{$v_content->qty}}" min="1"
                                                                class="tc line-item-qty item-quantity">
                                                                <input type="hidden" value="{{$v_content->rowId}}" name="rowId_cart" class="form-comtrol">
                                                                <button style="width: 80px" type="submit" value="Cập nhật" name="update_qty" class="qtyplus qty-btn">cập nhật</button>
                                                            </form>
                                                           
                                                            {{-- <button type="submit" class="qtyplus qty-btn">+</button> --}}
                                                        </div>

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
                                                    <td class="remove">
                                                        <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="cart">
                                                            <img src="//theme.hstatic.net/200000294254/1000741335/14/ic_close.png?v=104"></a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-5 col-sm-12 col-xs-12">
                                    <div class="sidebox-group">
                                        <h4>Ghi chú đơn hàng</h4>
                                        <div class="checkout-note clearfix">
                                            <textarea id="note" name="note" rows="4"
                                                placeholder="Ghi chú"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-12 col-xs-12 hidden-xs">
                                    <div class="sidebox-group sidebox-policy">
                                        <h4>Chính sách mua hàng</h4>
                                        <ul>
                                            <li>Nhập mã FREESHIP23 giảm 30K phí chuyển cho đơn từ 299K.</li>
                                            <li>Đổi trả sản phẩm trong 30 ngày do lỗi sản xuất.</li>
                                            <li>Sản phẩm còn đủ tem mác, chưa qua sử dụng.</li>
                                            <li>Amak Books sẽ gọi điện xác nhận đơn trong 3-5 ngày sau khi đặt
                                                đơn thường và 7 ngày đối với các đơn pre-order.</li>
                                        </ul>
                                    </div>
                                   
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- End cart -->
        </div>
        <div style="height: 273px" class="cart-payment">
            <h3>Thông tin đơn hàng</h3>
            <div class="cart-payment-info">
                <span>Tổng tiền: {{Cart::subtotal().' '.'vnd'}}</span>
            </div>
            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
            <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>

            <div class="sidebox-order_action">
                <?php
                    $customer_id = Session::get('customer_id');
                    if ($customer_id != NULL) {
                ?>
                <a href="{{URL::to('/checkout')}}" class="button dark btncart-checkout">THANH TOÁN</a>
                <?php
                   }else {
                ?>
                <a href="{{URL::to('/login-checkout')}}" class="button dark btncart-checkout">THANH TOÁN</a>
                <?php
                }
                ?>
                <p class="link-continue text-center">
                    <a href="./classfix.html">
                        <i class="fa fa-reply"></i> Tiếp tục mua hàng
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div class="information-main">
        <div class="information">
        </div>
    </div>
</div>
@endsection