@extends('layout')
@section('content')
<div style="height: 300px; margin-top: 100px;" class="content">

    <div style="display: flex; justify-content: center;" class="wrap">
        <div class="main">
            <div class="main-content">
                <div>
                    <div class="section">
                        <div style="display: flex;" class="section-header os-header">

                            <svg style="margin-right: 20px;" width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000"
                                stroke-width="2" class="hanging-icon checkmark">
                                <path class="checkmark_circle"
                                    d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z">
                                </path>
                                <path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path>
                            </svg>

                            <div class="os-header-heading">
                                <h2 class="os-header-title">

                                    Đặt hàng thành công

                                </h2>

                                <span class="os-description">
                                    Cám ơn bạn đã mua hàng!
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="step-footer">

                        <a href="/" class="step-footer-continue-btn">
                            <span class="btn-content">Tiếp tục mua hàng</span>
                        </a>

                        <p style="padding-right: 57px;" class="step-footer-info">
                            <i class="icon icon-os-question"></i>
                            <span>
                                Cần hỗ trợ? <a href="mailto:amakstore.hbt@gmail.com">Liên hệ chúng tôi</a>
                            </span>
                        </p>
                    </div>
                </div>


            </div>
            <div class="hrv-coupons-popup-site-overlay"></div>
        </div>
    </div>

</div>
@endsection
