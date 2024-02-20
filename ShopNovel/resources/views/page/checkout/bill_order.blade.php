@extends('layout')
@section('content')
<main class="mainContent-theme ">

    <div class="layout-info-account">
        <div class="title-infor-account text-center">
            <h1>Tài khoản của bạn </h1>
        </div>
        <div class="container">
            <div class="row" style="display: flex; justify-content: space-around;">
                <div class="col-xs-12 col-sm-3 sidebar-account">
                    <div class="AccountSidebar">
                        <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                        <div class="AccountContent">
                            <div class="AccountList">
                                <ul class="list-unstyled">
                                    <?php
                                        $customer_id = Session::get('customer_id');
                                        if ($customer_id != NULL) {
                                    ?>
                                    <li class="current"><a href="/account">Thông tin tài khoản</a></li>
                                    <li><a href="/account/addresses">Danh sách địa chỉ</a></li>
                                    
                                    <li class="last"><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                    <?php
                                    }else {
                                    ?>
                                    <li class="last"><a href="{{URL::to('/logout-checkout')}}">Đăng xuất</a></li>
                                    <?php
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-12" id="customer_sidebar">
                            <p class="title-detail">Thông tin tài khoản</p>

                            <h2 class="name_account">{{$order_by_id->shipping_name}}</h2>


                            <p class="email ">{{$order_by_id->shipping_email}}</p>
                            <div class="address ">

                                <p>{{$order_by_id->shipping_address}}</p>

                                <p></p>

                                <p>{{$order_by_id->shipping_phone}}</p>

                                <a id="view_address" href="/account/addresses">Xem địa chỉ</a>
                            </div>
                        </div>
                        <div class="col-xs-12 customer-table-wrap" id="customer_orders">
                            <div class="customer_order customer-table-bg">

                                <p class="title-detail">
                                    Danh sách đơn hàng mới nhất
                                </p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="order_number text-center">Mã đơn hàng</th>
                                                <th class="date text-center">Tên sản phẩm</th>
                                                <th class="total text-right">Thành tiền</th>
                                                <th class="payment_status text-center">Trạng thái thanh toán</th>
                                                <th class="fulfillment_status text-center">Vận chuyển</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_by_idm as $key => $obdm)
                                                <tr class="odd ">
                                                    <td class="text-center"><a
                                                            href="/account/orders/feda40043eee458e8fad41eecce1cabf"
                                                            title="">{{$obdm->order_details_id}}</a></td>
                                                    <td class="text-center"><span>{{$obdm->product_name}}</span></td>
                                                    <td class="text-right"><span class="total money">{{$obdm->order_total}}</span>
                                                        <td class="text-center"><span>{{$obdm->order_status}}</span></td>
                                                    </td>
                                                    <td class="text-center"><span
                                                            class="status_not fulfilled t-pending">

                                                            Chờ xử lý

                                                        </span>
                                                    </td>
                                                </tr>   

                                            @endforeach

                                            

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>
@endsection
