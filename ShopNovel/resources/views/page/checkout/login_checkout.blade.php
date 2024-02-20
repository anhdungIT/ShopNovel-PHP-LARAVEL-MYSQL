@extends('layout')
@section('content')
<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div style="display: flex;" class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Đăng Nhập</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <form action="{{URL::to('/login-customer')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="clearfix large_form">
                                <label class="label icon-field"><i
                                        class="icon-login icon-envelope "></i></label>
                                <input type="text" placeholder="Tài khoản" name="email_account"
                                     class="text" size="30">
                            </div>
                            <div class="clearfix large_form large_form-mr10">
                                <label class="label icon-field"><i
                                        class="icon-login icon-shield "></i></label>
                                <input type="password" placeholder="Mật khẩu"
                                    name="password_account" class="password text" size="30">
                            </div>
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Đăng nhập">
                                </div>
                            </div>
                            <div class="clearfix large_form sitebox-recaptcha">
                                Bạn chưa có tài khoản?
                                <a href="{{URL::to('/register-checkout')}}">Đăng ký</a>
                                hoặc <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Quên mật khẩu</a>
                            </div>
                            <div class="clearfix req_pass">
                                <a class="come-back" href="{{URL::to('/trang-chu')}}"><i class="fa fa-long-arrow-left"></i>
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