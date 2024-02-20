@extends('layout')
@section('content')
<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div style="display: flex;" class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Đăng ký</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <form action="{{URL::to('/add-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <div id="form-last_name" class="clearfix large_form">
                                <label for="last_name" class="label icon-field"><i
                                        class="icon-login icon-user "></i></label>
                                <input type="text" value="" name="customer_name" placeholder="Họ và tên"
                                     class="text" size="30">
                            </div>     
                            <div id="form-email" class="clearfix large_form">
                                <label for="email" class="label icon-field"><i
                                        class="icon-login icon-envelope "></i></label>
                                <input type="email" value="" placeholder="Địa chỉ email" name="customer_email"
                                     class="text" size="30">
                            </div>
                            <div id="form-password" class="clearfix large_form large_form-mr10">
                                <label for="password" class="label icon-field"><i
                                        class="icon-login icon-shield "></i></label>
                                <input type="password" value="" placeholder="Mật khẩu"
                                    name="customer_password" class="password text" size="30">
                            </div>
                            <div id="form-last_name" class="clearfix large_form">
                                <label for="last_name" class="label icon-field"><i
                                        class="icon-login icon-user "></i></label>
                                <input type="text" name="customer_phone" placeholder="Số điện thoại"
                                     class="text" size="30">
                            </div>
                            <div id="form-last_name" class="clearfix large_form">
                                <label for="last_name" class="label icon-field"><i
                                        class="icon-login icon-user "></i></label>
                                <input type="text" name="customer_address" placeholder="Địa chỉ"
                                     class="text" size="30">
                            </div>
                            <div class="clearfix large_form sitebox-recaptcha">
                                Bạn đã có tài khoản?
                                <a href="{{URL::to('/login-checkout')}}">Đăng nhập</a>
                                hoặc <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Quên mật khẩu</a>
                            </div>
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Đăng ký">
                                </div>
                            </div>
                            <div class="clearfix req_pass">
                                <a class="come-back" href="https://amakstore.vn"><i class="fa fa-long-arrow-left"></i>
                                    Quay lại trang chủ</a>
                            </div>
                            
                        </form>
                    </div>

                </div><!-- #register -->
                <!-- #customer-register -->
            </div>
        </div>
    </div>
</main>
@endsection