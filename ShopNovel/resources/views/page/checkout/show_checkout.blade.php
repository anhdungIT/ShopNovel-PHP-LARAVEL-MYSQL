@extends('layout')
@section('content')
<section style="padding: 0">
    <div class="main">
        <div class="shipment">
            <div class="shipment-container">
                <div class="content-shipment">
                    <h2>NOVEL B&B</h2>

                    <a href="">Giỏ hàng
                        <box-icon name='chevron-right'></box-icon>
                        <span>Thông tin giao hàng </span>
                    </a>

                    <h3>Thông tin giao hàng</h3>

                    <p>Bạn đã có tài khoản? <a href="">Đăng nhập</a></p>
                </div>

                <div class="section">
                    <div class="fieldset">
                        <form action="{{URL::to('/save-checkout-customer')}}" method="POST"> 
                            {{ csrf_field() }}                     
                            <div class="field field-required">
                                <div class="field-input-wrapper">
                                    <label class="field-label">Họ và tên</label>
                                    <input placeholder="Họ và tên"
                                        class="field-input" size="30" type="text"
                                        name="shipping_name" value="">
                                </div>

                            </div>

                            <div class="field  field-two-thirds">
                                <div class="field-input-wrapper">
                                    <label class="field-label" for="checkout_user_email">Email</label>
                                    <input placeholder="Email"
                                        class="field-input" size="30" type="email"
                                        name="shipping_email" value="">
                                    
                                </div>

                            </div>

                            <div class="field field-required field-third">
                                <div class="field-input-wrapper">
                                    <label class="field-label">Số điện thoại</label>
                                    <input placeholder="Số điện thoại"
                                        class="field-input" size="30" maxlength="15" type="tel"
                                        name="shipping_phone" value="">
                                </div>

                            </div>

                            <div class="field field-required">
                                <div class="field-input-wrapper">
                                    <label class="field-label">Địa
                                        chỉ</label>
                                    <input placeholder="Địa chỉ"
                                        class="field-input" size="30" type="text"
                                        name="shipping_address" value="">
                                </div>
                            </div>

                            <div id="section-shipping-rate">
                                <div class="section-header">
                                    <h2 class="section-title">Ghi chú đơn hàng</h2>
                                </div>
                                <div class="section-content">
                                    <div class="content-box">
                                        <textarea name="shipping_notes" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <button style="position: relative; float: right; margin: 20px 0" type="submit" class="step-footer-continue-btn btns">
                                {{-- <span class="btn-content">Hoàn tất đơn hàng</span> --}}
                                <input type="text" name="send_order" class="btn-content" value="Gửi thông tin đơn hàng">
                                <i class="btn-spinner icon icon-button-spinner"></i>
                            </button>

                        </form>
                    </div>

                   
                </div>





            </div>
        </div>

     



    </div>
</section>
@endsection