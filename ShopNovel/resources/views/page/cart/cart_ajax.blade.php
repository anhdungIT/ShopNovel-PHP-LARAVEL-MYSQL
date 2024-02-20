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
                                    <table class="table-cart">
                                        <thead>
                                            <tr>
                                                <th class="image">&nbsp;</th>
                                                <th class="item">Tên sản phẩm</th>
                                                <th class="remove">&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $total = 0;
                                            ?>
                                            @foreach (Session::get('cart') as $key => $cart)
                                                <?php
                                                    $subtotal = $cart['product_promotionalprice'] * $cart['product_qty'];
                                                    $total+=$subtotal;
                                                ?>
                                                <tr class="line-item-container">
                                                    <td class="image">
                                                        <div class="product_image">
                                                            <a href="/products/date-a-live-tap-13">
                                                                <img src="{{asset('public/uploads/product/'.$cart['product_image'])}}"
                                                                    alt="{{$cart['product_name']}}">
                                                            </a>

                                                        </div>
                                                    </td>
                                                    <td class="item">

                                                        <h3><a href="#">{{$cart['product_name']}}</a></h3>

                                                        <p>
                                                            <span class="pri">{{number_format($cart['product_promotionalprice'],0,',','.')}}₫</span>

                                                        </p>
                                                        <p class="variant">

                                                            <span class="variant_title">Bản Thường</span>

                                                        </p>
                                                        <div class="qty quantity-partent qty-click clearfix">
                                                            {{-- <button type="button" class="qtyminus qty-btn">-</button> --}}
                                                            <form action="#" method="POST">
                                                                <input type="number" name="cart_quantity" value="{{$cart['product_qty']}}" min="1"
                                                                class="cart_quantity_ line-item-qty item-quantity">
                                                                <button style="width: 80px" type="submit" value="Cập nhật" name="update_qty" class="qtyplus qty-btn">cập nhật</button>
                                                            </form>
                                                        
                                                            {{-- <button type="submit" class="qtyplus qty-btn">+</button> --}}
                                                        </div>

                                                        <p class="price">
                                                            <span class="text">Thành tiền:</span>
                                                            <span class="line-item-total">
                                                                {{number_format($subtotal,0,',','.')}}₫
                                                            </span>
                                                        </p>

                                                    </td>
                                                    <td class="remove">
                                                        <a href="#" class="cart">
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
        <div class="cart-payment">
            <h3>Thông tin đơn hàng</h3>
            <div class="cart-payment-info">
                <span>Tổng tiền:  {{number_format($total,0,',','.')}}₫</span>
            </div>
            <p>Phí vận chuyển sẽ được tính ở trang thanh toán.</p>
            <p>Bạn cũng có thể nhập mã giảm giá ở trang thanh toán.</p>

            <div class="sidebox-order_action">
                <a href="#" class="button dark btncart-checkout">THANH TOÁN</a>
               
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
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
          Thông tin đặt hàng
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">',$message.'</span>';     
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên người đặt hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($order_by_id as $key => $obd)
                    <tr>
                        <td>{{$obd->shipping_name}}</td>
                        <td>{{$obd->shipping_address}}</td>
                        <td>{{$obd->shipping_phone}}</td>
                        <td>{{$obd->shipping_email}}</td>
                    </tr>
                    @endforeach --}}
                    <tr>
                        <td>{{$order_by_id->shipping_name}}</td>
                        <td>{{$order_by_id->shipping_address}}</td>
                        <td>{{$order_by_id->shipping_phone}}</td>
                        <td>{{$order_by_id->shipping_email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
          Thông tin đơn hàng
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">',$message.'</span>';     
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Tên người đặt</th>
                        <th>Tổng tiền </th>
                        <th>Trạng thái </th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($order_by_id as $key => $obd)
                        <tr>
                            <td>{{$obd->order_id}}</td>
                            <td>{{$obd->shipping_name}}</td>
                            <td>{{$obd->order_total}}</td>
                            <td>{{$obd->order_status}}</td>
                        </tr>
                    @endforeach --}}
                    <tr>
                        <td>{{$order_by_id->order_id}}</td>
                        <td>{{$order_by_id->shipping_name}}</td>
                        <td>{{$order_by_id->order_total}}</td>
                        <td>{{$order_by_id->order_status}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<br><br>
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
           Liệt kê chi tiết đơn hàng
        </div>
        <div class="table-responsive">
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">',$message.'</span>';     
                Session::put('message', null);
            }
            ?>
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Mã chi tiết đơn hàng</th>
                        <th>Tên sản phẩm</th>
                        <th>Mã đơn hàng</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order_by_idm as $key => $obdm)
                        <tr>
                            <td>{{$obdm->order_details_id}}</td>
                            <td>{{$obdm->product_name}}</td>
                            <td>{{$obdm->order_id}}</td>
                            <td>{{$obdm->product_sales_quantity}}</td>
                            <td>{{$obdm->product_price}}</td>
                        
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>
<br><br>