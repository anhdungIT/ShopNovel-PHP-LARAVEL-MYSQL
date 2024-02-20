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
                        <span itemprop="item" content="https://amakstore.vn/cart"><span itemprop="name">Chi tiết sản phẩm
                            </span></span>
                    </li>
  
                </ol>
            </div>
        </div>
    </div>
</div>
@foreach ($product_details as $key => $value)
    <section id="services" class="services section-bg">
        <div class="container-fluid">
        <div class="row row-sm" style="display: flex;">
            {{-- <form style="display: flex;">
                @csrf --}}
                <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_promotionalprice}}" class="cart_product_promotionalprice_{{$value->product_id}}">
                <input type="hidden" value="1" class="cart_product_qty_{{$value->product_id}}">
                <div style="width: 45%;" class="col-md-6 _boxzoom">
                <div class="zoom-thumb">
                    <ul class="piclist">
                    <li><img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}"></li>
                    {{-- <li><img src="https://s.fotorama.io/2.jpg" alt=""></li>
                    <li><img src="https://s.fotorama.io/3.jpg" alt=""></li> --}}
                    {{-- <li><img src="https://ucarecdn.com/382a5139-6712-4418-b25e-cc8ba69ab07f/-/stretch/off/-/resize/760x/"
                        alt=""></li> --}}
                    </ul>
                </div>
                <div class="_product-images">
                    <div class="picZoomer">
                    <img class="my_img" src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="">
                    </div>
                </div>
                </div>
                <div style="width: 55%" class="col-md-7 col-sm-12 col-xs-12 product-content-desc" id="detail-product">
                <div class="product-title">
                    <h1>{{$value->product_name}}</h1>

                    <span id="pro_sku">SKU: {{$value->product_id}}</span>
                </div>
                <div class="product-price" id="price-preview"><span class="pro-sale">-50%</span><span
                    class="pro-price">{{number_format($value->product_promotionalprice).'₫'}}</span>
                    <del>{{number_format($value->product_price).'₫'}}</del></div>


                <form id="add-item-form" action="{{URL::to('/save-cart')}}" method="POST" class="variants clearfix">
                    {{ csrf_field() }}
                    <div class="select clearfix">
                    <div class="selector-wrapper"><span class="custom-dropdown custom-dropdown--white"><select
                            class="single-option-selector custom-dropdown__select custom-dropdown__select--white"
                            data-option="option1" id="product-select-option-0">
                            <option value="Thường">Thường</option>
                            <option value="Thường Poster">Thường Poster</option>
                            <option value="Boxset">Boxset</option>
                        </select></span></div><select id="product-select" name="id" style="display:none;">

                        <option value="1104850014">Thường</option>

                        <option value="1104850131">Thường Poster</option>

                        <option value="1104850138">Boxset</option>

                    </select>
                    </div>
                    <div class="select-swatch clearfix">

                    <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                        <div class="header hide">Tiêu đề:</div>

                        <div class="select-swap">

                        <div data-value="Thường" class="n-sd swatch-element thuong  ">
                            <input class="variant-0" id="swatch-0-thuong" type="radio" name="option1" value="Thường"
                            data-vhandle="thuong" checked="">

                            <label for="swatch-0-thuong" class="sd">
                            <span>Thường</span>
                            </label>

                        </div>

                        <div data-value="Thường Poster" class="n-sd swatch-element thuong-poster  ">
                            <input class="variant-0" id="swatch-0-thuong-poster" type="radio" name="option1"
                            value="Thường Poster" data-vhandle="thuong-poster">

                            <label for="swatch-0-thuong-poster">
                            <span>Thường Poster</span>
                            </label>

                        </div>

                        <div data-value="Boxset" class="n-sd swatch-element boxset  soldout">
                            <input class="variant-0" id="swatch-0-boxset" type="radio" name="option1" value="Boxset"
                            data-vhandle="boxset">

                            <label for="swatch-0-boxset">
                            <span>Boxset</span>
                            </label>

                        </div>


                    </div>
                    </div>
                    </div>
                    
                    <div class="selector-actions">
                        <div class="quantity-area clearfix">
                            <input type="button" value="" onclick="minusQuantity()" class="qty-btn">
                            <input type="number" id="quantity" name="qty" value="1" min="1" class="quantity-selector">
                            <input type="hidden" name="productid_hidden" value="{{$value->product_id}}" class="quantity-selector">
                            <input type="button" value="" onclick="plusQuantity()" class="qty-btn">
                        </div>
                        <div class="wrap-addcart clearfix">
                            <button type="submit" 
                            class=" button dark btn-addtocart addtocart-modal" >Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product-description">
                        <div class="title-bl">
                        </div>
                        <div class="description-content">
                        <div class="description-productdetail">
                            <ul>
                                {!!$value->product_desc!!}
                                
                            </ul>
                            <p>{!!$value->product_content!!}</p>
                        
                        </div>
                        </div>
                    </div>
                    
                </form>
                {{-- <div class="select clearfix">
                <div class="selector-wrapper"><span class="custom-dropdown custom-dropdown--white"><select
                        class="single-option-selector custom-dropdown__select custom-dropdown__select--white"
                        data-option="option1" id="product-select-option-0">
                        <option value="Thường">Thường</option>
                        <option value="Thường Poster">Thường Poster</option>
                        <option value="Boxset">Boxset</option>
                    </select></span></div><select id="product-select" name="id" style="display:none;">

                    <option value="1104850014">Thường</option>

                    <option value="1104850131">Thường Poster</option>

                    <option value="1104850138">Boxset</option>

                </select>
                </div>
                <div class="select-swatch clearfix">

                <div id="variant-swatch-0" class="swatch clearfix" data-option="option1" data-option-index="0">
                    <div class="header hide">Tiêu đề:</div>

                    <div class="select-swap">

                    <div data-value="Thường" class="n-sd swatch-element thuong  ">
                        <input class="variant-0" id="swatch-0-thuong" type="radio" name="option1" value="Thường"
                        data-vhandle="thuong" checked="">

                        <label for="swatch-0-thuong" class="sd">
                        <span>Thường</span>
                        </label>

                    </div>

                    <div data-value="Thường Poster" class="n-sd swatch-element thuong-poster  ">
                        <input class="variant-0" id="swatch-0-thuong-poster" type="radio" name="option1"
                        value="Thường Poster" data-vhandle="thuong-poster">

                        <label for="swatch-0-thuong-poster">
                        <span>Thường Poster</span>
                        </label>

                    </div>

                    <div data-value="Boxset" class="n-sd swatch-element boxset  soldout">
                        <input class="variant-0" id="swatch-0-boxset" type="radio" name="option1" value="Boxset"
                        data-vhandle="boxset">

                        <label for="swatch-0-boxset">
                        <span>Boxset</span>
                        </label>

                    </div>


                </div>
                </div>
                </div>
                
                <div class="selector-actions">
                    <div class="quantity-area clearfix">
                        <input type="button" value="-" onclick="minusQuantity()" class="qty-btn">
                        <input type="number" id="quantity" name="qty" value="1" min="1" class="quantity-selector">
                   
                        <input type="button" value="+" onclick="plusQuantity()" class="qty-btn">
                    </div>
                    <div class="wrap-addcart clearfix">
                        <button type="button" name="add-to-cart" data-id_product="{{$value->product_id}}"
                        class="add-to-cart button dark btn-addtocart addtocart-modal" >Thêm vào giỏ</button>
                    </div>
                </div>
                    
                <div class="product-description">
                    <div class="title-bl">
                    </div>
                    <div class="description-content">
                    <div class="description-productdetail">
                        <ul>
                            {!!$value->product_desc!!}
                            
                        </ul>
                        <p>{!!$value->product_content!!}</p>
                    
                    </div>
                    </div>
                </div>
                </div> --}}
        {{-- </form> --}}
        </div>
        </div>
    </section>
@endforeach

<section class="section section-collection">
    <div class="wrapper-heading-home animation-tran text-center active">
      <div class="container-fluid">
        <div class="site-animation">
          <h2>
            <a href="/collections/giam-50">
              Sản phẩm liên quan
            </a>
          </h2>
        </div>
      </div>
    </div>
    <div class="wrapper-collection-2">
      <div class="container-fluid">
        <div class="row">
          <div class="clearfix content-product-list ">
            @foreach ($relate as $key => $cont)
                <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                <div class="product-block product-resize fixheight" style="height: 438px;">
                    <div class="product-img ">
                    <div class="product-sale"><span>-50%</span></div>
                    <a href="{{URL::to('/chi-tiet-san-pham/'.$cont->product_id)}}"
                        title="Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu"
                        class="image-resize ratiobox lazyloaded" style="height: 353px;" data-expand="-1">
                        <picture>
                        <img class="img-loop lazyautosizes lazyloaded" data-sizes="auto"
                            data-src="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            data-lowsrc="//product.hstatic.net/200000294254/product/img_3351_a08dcf99beac493fbb6e6c8b3cbaf04b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$cont->product_image)}}"
                            alt=" Tôn Trọng Công Việc Bao Nhiêu, Tương Lai Đi Xa Bấy Nhiêu " sizes="246px">
                        </picture>
                        <picture>
                        <img class="img-loop img-hover lazyloaded"
                            data-src="//product.hstatic.net/200000294254/product/img_3350_9388ef4280bc49689b40556833c0728b_grande.jpeg"
                            src="{{URL::to('/public/uploads/product/'.$cont->product_image)}}"
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
                            {{$cont->product_name}}
                        </a>
                        </h3>
                        <div class="box-pro-prices">
                        <p class="pro-price highlight">
                            <span>{{number_format($cont->product_promotionalprice).'₫'}}</span>

                            <span class="pro-price-del">
                            <del class="compare-price">
                                {{number_format($cont->product_price).'₫'}}
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
@endsection