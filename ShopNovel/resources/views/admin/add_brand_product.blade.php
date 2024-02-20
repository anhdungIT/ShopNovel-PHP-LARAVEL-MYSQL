@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm nhà xuất bản
                </header>
                <div class="panel-body">
                    <?php
                        $message = Session::get('message');
                        if ($message) {
                            echo '<span class="text-alert">',$message.'</span>';     
                            Session::put('message', null);
                        }
                    ?>
                    <div class="position-center">
                        <form role="form" action="{{URL::to('/save-brand-product')}}" method="post">
                            {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên nhà xuất bản</label>
                            <input type="text" name="brand_product_name" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên nhà xuất bản">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả nhà xuất bản</label>
                            <textarea style="resize: none" rows="8" name="brand_product_desc" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả nhà xuất bản"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Hiển thị</label>
                            <select name="brand_product_status" class="form-control input-sm m-bot15">
                                <option value="0">Hiển thị</option>
                                <option value="1">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm </button>
                    </form>
                    </div>

                </div>
            </section>

    </div>
</div>
@endsection