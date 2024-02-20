@extends('order_check')
@section('content')
@foreach ($view_order as $key => $or)
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
                        @foreach ($shipping_order as $key => $ship)
                            @if ($ship->shipping_id==$or->shipping_id)
                                <tr>
                                    <td>
                                        {{$ship->shipping_name}}
                                    </td>
                                    <td>{{$ship->shipping_address}}</td>
                                    <td>{{$ship->shipping_phone}}</td>
                                    <td>{{$ship->shipping_email}}</td>
                                </tr>
                            @endif
                        
                        @endforeach
                        {{-- <tr>
                            <td>{{$order_by_id->shipping_name}}</td>
                            <td>{{$order_by_id->shipping_address}}</td>
                            <td>{{$order_by_id->shipping_phone}}</td>
                            <td>{{$order_by_id->shipping_email}}</td>
                        </tr> --}}
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
                            <th>Tổng tiền </th>
                            <th>Trạng thái </th>
                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($view_order as $key => $vor)
                            @if ($vor->order_id==$or->order_id)
                                <tr>
                                    <td>{{$vor->order_id}}</td>
                                    <td>{{$vor->order_total}}</td>
                                    <td>{{$vor->order_status}}</td>
                                </tr>
                            @endif
                        
                        @endforeach
                        {{-- <tr>
                            <td>{{$order_by_id->order_id}}</td>
                            <td>{{$order_by_id->shipping_name}}</td>
                            <td>{{$order_by_id->order_total}}</td>
                            <td>{{$order_by_id->order_status}}</td>
                        </tr> --}}
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
                        {{-- @foreach ($order_by_idm as $key => $obdm)
                            <tr>
                                <td>{{$obdm->order_details_id}}</td>
                                <td>{{$obdm->product_name}}</td>
                                <td>{{$obdm->order_id}}</td>
                                <td>{{$obdm->product_sales_quantity}}</td>
                                <td>{{$obdm->product_price}}</td>
                            
                            </tr>
                        @endforeach --}}
                        @foreach ($details_order as $key => $deor)
                            {{-- @if ($deor->order_details_id==$or->order_details_id) --}}
                                <tr>
                                    <td>{{$deor->order_details_id}}</td>
                                    <td>{{$deor->product_name}}</td>
                                    <td>{{$deor->order_id}}</td>
                                    <td>{{$deor->product_sales_quantity}}</td>
                                    <td>{{$deor->product_price}}</td>
                                </tr>
                            {{-- @endif --}}
                    
                         @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br><br>
@endforeach

@endsection