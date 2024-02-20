@extends('layout')
@section('content')
{{-- <section class="section section-collection">
    <div class="wrapper-heading-home animation-tran text-center active">
        <div class="container-fluid">
            <div class="site-animation">
                <h2>
                    <a href="/collections/sach-moi">
                        SÁCH MỚI
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <div class="wrapper-collection-1">
        <div class="container-fluid">
            <div class="row">
                <div class="clearfix content-product-list">
                    @foreach ($category_by_id as $key => $product)
                        <div class="col-md-4 col-sm-6 col-xs-6 pro-loop ">
                            <div class="product-block product-resize fixheight" style="height: 331px;">
                                <div class="product-img ">
                                    <div class="product-sale"><span>-15%</span></div>
                                    <a href="/products/thuc-don-cua-bar-mao" title="Thực Đơn Của Bar Mao"
                                        class="image-resize ratiobox lazyloaded" data-expand="-1"
                                        style="height: 246px;">
                                        <picture>
                                            <img class="img-loop lazyautosizes lazyloaded" data-sizes="auto"
                                                src="{{URL::to('public/uploads/product/'.$product->product_image)}}" height="240px"
                                                alt=" Thực Đơn Của Bar Mao " sizes="500px">
                                        </picture>
                                        <picture>
                                            <img class="img-loop img-hover lazyloaded"
                                                data-src="//product.hstatic.net/200000294254/product/img_7097_612d14ca33fc4429ab8a82c1376f7bcc_grande.jpg"
                                                src="{{URL::to('public/uploads/product/'.$product->product_image)}}"
                                                alt=" Thực Đơn Của Bar Mao ">
                                        </picture>
                                    </a>
                                    <div class="pro-price-mb">
                                        <span class="pro-price">{{$product->product_promotionalprice}}</span>
                                        <span class="pro-price-del"><del class="compare-price">{{$product->product_price}}</del></span>
                                    </div>
                                </div>
                                <div class="product-detail clearfix">
                                    <div class="box-pro-detail">
                                        <h3 class="pro-name">
                                            <a href="/products/thuc-don-cua-bar-mao" title="Thực Đơn Của Bar Mao">
                                                {{$product->product_name}}
                                            </a>
                                        </h3>
                                        <div class="box-pro-prices">
                                            <p class="pro-price highlight">
                                                <span>{{number_format($product->product_promotionalprice).'đ'}}</span>

                                                <span class="pro-price-del">
                                                    <del class="compare-price">
                                                        {{number_format($product->product_price).'đ'}}
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
</section> --}}
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
                      <span itemprop="item" content="https://amakstore.vn/cart"><span itemprop="name">Danh mục sách /
                          </span></span>
                  </li>

                  <li class="active" itemprop="itemListElement" itemscope=""
                      itemtype="http://schema.org/ListItem">
                      <span itemprop="item" content="https://amakstore.vn/cart"><span itemprop="name">
                        @foreach ($category_name as $key => $name)
                            {{$name->category_name}}    
                        @endforeach
                          </span></span>
                  </li>
              </ol>
          </div>
      </div>
  </div>
</div>
<main class="mainContent-theme ">
    <div id="collection" class="collection-page ">

    

      <div class="main-content ">
        <div class="container-fluid">
          <div class="row">
            <div id="collection-body" class="wrap-collection-body " style="display: flex; ">


              <div style="width: 20%" class="col-md-3 col-sm-12 col-xs-12 sidebar-fix">
                <div class="wrap-filter">
                  <div class="box_sidebar">
                    <div class="block left-module">
                      <div class=" filter_xs">
                        <div class="layered">

                          <div class="group-menu">                          
                            <div class="block_content layered layered-category">
                              <div class="layered-content">
                                <ul class="tree-menu">

                                    @foreach ($category as $key => $cate) 
                                        <li class="active">
                                            <span></span>
                                            <a class=" current" href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}" title="Sách Mới" target="_self">
                                                {{$cate->category_name}}
                                            </a>
                                        </li>
                                    @endforeach


                                  

                                </ul>
                              </div>
                            </div>
                          </div>



                         
                          <div class="block_content">
                            <!-- ./filter brand -->

                            <!-- ./filter price -->

                            <!-- ./filter color -->

                            <!-- ./filter size -->

                          </div>


                        </div>
                      </div>
                    </div>

                  </div>

                  <script>
                    jQuery(document).ready(function () {
                      jQuery('.check-box-list li > input').click(function () {
                        //$('.custom-loader').show();
                        jQuery(this).parent().toggleClass('active');
                        Stringfilter();
                      })
                      str = "";
                      var Stringfilter = function () {
                        var q = "", gia = "", vendor = "", color = "", size = "", total_page = 0, cur_page = 1;
                        var handle_coll = $('#coll-handle').val();
                        var str_url = 'filter=';
                        q = "(" + handle_coll + ")";
                        jQuery('.filter-price ul.check-box-list li.active').each(function () {
                          gia = gia + jQuery(this).find('input').data('price') + '||';
                        })
                        gia = gia.substring(0, gia.length - 2);
                        if (gia != "") {
                          gia = '(' + gia + ')';
                          q += '&&' + gia;
                        }
                        jQuery('.filter-brand ul.check-box-list li.active').each(function () {
                          vendor = vendor + jQuery(this).find('input').data('vendor') + '||';
                        })
                        vendor = vendor.substring(0, vendor.length - 2);
                        if (vendor != "") {
                          vendor = '(' + vendor + ')';
                          q += '&&' + vendor;
                        }
                        jQuery('.filter-color ul.check-box-list li.active').each(function () {
                          color = color + jQuery(this).find('input').data('color') + '||';
                          //size2 = size2 + jQuery(this).data('s') + '--';
                        })
                        color = color.substring(0, color.length - 2);
                        if (color != "") {
                          color = '(' + color + ')';
                          q += '&&' + color;
                        }
                        jQuery('.filter-size ul.check-box-list li.active').each(function () {
                          size = size + jQuery(this).find('input').data('size') + '||';
                        })
                        size = size.substring(0, size.length - 2);
                        if (size != "") {
                          size = '(' + size + ')';
                          q += '&&' + size;
                        }
                        console.log(str_url + q)
                        str_url += encodeURIComponent(q);
                        str = str_url;
                        jQuery.ajax({ // lấy tổng số trang của kết quả filter
                          url: "/search?q=" + str_url + "&view=page",
                          async: false,
                          success: function (data) {
                            total_page = parseInt(data);
                          }
                        })
                        //console.log(total_page);
                        if (cur_page <= total_page) {
                          jQuery('.pagi').show();
                          jQuery.ajax({
                            url: "/search?q=" + str_url + "&view=filter",
                            success: function (data) {
                              jQuery(".product-list.filter").html(data);
                              /*
                          // fix lazyload
                            jQuery('.content-product-list img').imagesLoaded( function() {
                              jQuery(window).resize();
                            }); 
                      */
                              jQuery(".product-list.filter").removeClass('border');
                              jQuery(".alert-no-filter").hide();
                            }
                          })
                          jQuery.ajax({  // đoạn code 
                            url: "/search?q=" + str_url + "&view=paginate",
                            async: false,
                            success: function (data) {
                              //jQuery(".pagi-filter").html(data); // in phân trang
                              jQuery(".pagi").html(data); // in phân trang
                            }
                          })
                        } else {
                          if (jQuery('.alert-no').length > 0) {
                            jQuery(".alert-no").html("<p>Không tìm thấy sản phẩm nào phù hợp!</p>");
                          }
                          else {
                            jQuery(".alert-no-filter").show().html("<p>Không tìm thấy sản phẩm nào phù hợp!</p>");
                          }
                          //jQuery(".product-list.filter").html("<div class='col-sm-12 col-xs-12 text-center no-product'><p>Không tìm thấy sản phẩm nào phù hợp!</p></div>");
                          jQuery(".product-list.filter").html('');
                          jQuery(".product-list.filter").addClass('border');
                          jQuery('.pagi').hide();
                        }
                        jQuery('.pagi').on("click", "a", function () { // bắt sự kiện click các nút phân trang
                          var link = jQuery(this).attr("data-link");
                          if (link == 'm') {
                            link = cur - 1;
                          }
                          if (link == 'p') {
                            link = cur + 1;
                          }
                          link = parseInt(link);
                          jQuery.ajax({
                            url: "/search?q=" + str + "&view=filter&page=" + link,
                            success: function (data) {
                              jQuery(".product-list.filter").html(data);
                              cur = link;
                            }
                          })
                          //console.log("/search?q="+str+"&view=paginate&page="+link);
                          jQuery.ajax({
                            url: "/search?q=" + str + "&view=paginate&page=" + link,
                            success: function (data) {
                              //jQuery(".pagi-filter").html(data); // in phân trang
                              jQuery(".pagi").html(data); // in phân trang
                            }
                          })
                        });
                        var x = $('#collection-body').offset().top;
                        smoothScroll(x - 10, 500);
                      }
                    })
                  </script>




                </div>
              </div>

              <div style="width: 80%" class="col-md-9 col-sm-12 col-xs-12">
                <div class="wrap-collection-title row">
                  <div class="heading-collection row">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        @foreach ($category_name as $key => $name)
                            <h1 class="title">
                               {{$name->category_name}}
                            </h1>
                        @endforeach
                      <div class="alert-no-filter"></div>

                    </div>

                    <div class="col-md-4 hidden-sm hidden-xs">
                      <div class="option browse-tags">
                        <span class="custom-dropdown custom-dropdown--grey">
                          <select class="sort-by custom-dropdown__select">

                            <option value="manual">Sản phẩm nổi bật</option>

                            <option value="price-ascending" data-filter="&amp;sortby=(price:product=asc)">Giá: Tăng dần
                            </option>
                            <option value="price-descending" data-filter="&amp;sortby=(price:product=desc)">Giá: Giảm
                              dần</option>
                            <option value="title-ascending" data-filter="&amp;sortby=(title:product=asc)">Tên: A-Z
                            </option>
                            <option value="title-descending" data-filter="&amp;sortby=(price:product=desc)">Tên: Z-A
                            </option>
                            <option value="created-ascending" data-filter="&amp;sortby=(updated_at:product=desc)">Cũ
                              nhất</option>
                            <option value="created-descending" data-filter="&amp;sortby=(updated_at:product=asc)">Mới
                              nhất</option>
                            <option value="best-selling" data-filter="&amp;sortby=(sold_quantity:product=desc)">Bán chạy
                              nhất</option>
                            <option value="quantity-descending">Tồn kho: Giảm dần</option>
                          </select>
                        </span>
                      </div>
                    </div>

                  </div>
                </div>

                <div class="row filter-here">
                  <div class="content-product-list product-list filter clearfix">
                    @foreach ($category_by_id as $key => $product)
                        <div class="col-md-3 col-sm-6 col-xs-6 pro-loop col-4">

                        <div class="product-block product-resize fixheight" style="height: 414px;">
                            <div class="product-img ">
                            <div class="product-sale"><span>-20%</span></div>


                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}" title=""
                                class="image-resize ratiobox lazyloaded" data-expand="-1" style="height: 329px;">
                                <picture>
                                <img class="img-loop lazyautosizes ls-is-cached lazyloaded" data-sizes="auto"
                                    data-src="//product.hstatic.net/200000294254/product/a4b88bb70ed7d18988c6-transformed_800ddf03aadc4a48bf5ca7caa4c37494_grande.jpeg"
                                    data-lowsrc="//product.hstatic.net/200000294254/product/a4b88bb70ed7d18988c6-transformed_800ddf03aadc4a48bf5ca7caa4c37494_grande.jpeg"
                                    src="{{URL::to('public/uploads/product/'.$product->product_image)}}"
                                    alt=" DATE A LIVE 14 - Mukuro Planet " sizes="229px">
                                </picture>
                                <picture>
                                <img class="img-loop img-hover lazyloaded"
                                    data-src="//product.hstatic.net/200000294254/product/bm1_9f992c5a08f94d7c97cb71f002905470_grande.jpg"
                                    src="{{URL::to('public/uploads/product/'.$product->product_image)}}"
                                    alt=" DATE A LIVE 14 - Mukuro Planet ">
                                </picture>
                            </a>
                            <div class="pro-price-mb">
                                <span class="pro-price">102,400₫</span>
                                <span class="pro-price-del"><del class="compare-price">128,000₫</del></span>
                            </div>
                            </div>
                            <div class="product-detail clearfix">
                            <div class="box-pro-detail">
                                <h3 class="pro-name">
                                <a href="/products/date-a-live-14-mukuro-planet" title="DATE A LIVE 14 - Mukuro Planet">
                                    {{$product->product_name}}
                                </a>
                                </h3>
                                <div class="box-pro-prices">
                                <p class="pro-price highlight">
                                    <span>{{number_format($product->product_promotionalprice).'₫'}}</span>

                                    <span class="pro-price-del">
                                    <del class="compare-price">
                                        {{number_format($product->product_price).'₫'}}
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
                  <div class="sortpagibar pagi clearfix text-center">
                    <div style="display: flex" id="pagination" class="clearfix">

                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




                        <span class="page-node current">1</span>



                        <a class="page-node" href="/collections/sach-moi?page=2">2</a>



                        <a class="page-node" href="/collections/sach-moi?page=3">3</a>




                        <a class="next" href="/collections/sach-moi?page=2">
                          <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 31 10"
                            style="enable-background:new 0 0 31 10; width: 31px; height: 10px;" xml:space="preserve">
                            <polygon points="31,5 25,0 25,4 0,4 0,6 25,6 25,10 "></polygon>
                          </svg> </a>

                      </div>


                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      Haravan.queryParams = {};
      if (location.search.length) {
        for (var aKeyValue, i = 0, aCouples = location.search.substr(1).split('&'); i < aCouples.length; i++) {
          aKeyValue = aCouples[i].split('=');
          if (aKeyValue.length > 1) {
            Haravan.queryParams[decodeURIComponent(aKeyValue[0])] = decodeURIComponent(aKeyValue[1]);
          }
        }
      }
      var collFilters = jQuery('.coll-filter');
      collFilters.change(function () {
        var newTags = [];
        var newURL = '';
        delete Haravan.queryParams.page;
        collFilters.each(function () {
          if (jQuery(this).val()) {
            newTags.push(jQuery(this).val());
          }
        });

        newURL = '/collections/' + 'sach-moi';
        if (newTags.length) {
          newURL += '/' + newTags.join('+');
        }
        var search = jQuery.param(Haravan.queryParams);
        if (search.length) {
          newURL += '?' + search;
        }
        location.href = newURL;

      });
      jQuery('.sort-by')
        .val('created-descending')
        .bind('change', function () {
          Haravan.queryParams.sort_by = jQuery(this).val();
          location.search = jQuery.param(Haravan.queryParams);
        });
    </script>




  </main>
@endsection