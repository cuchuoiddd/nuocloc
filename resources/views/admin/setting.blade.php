@extends('layouts.admin')
@section('title', $isAdd ? 'Thêm mới Cấu hình' : 'Cập nhật Cấu hình')
@section('pageTitle', $isAdd ? 'Thêm mới Cấu hình' : 'Cập nhật Cấu hình')
@section('header-right')
<!-- <a href="{{url('admin/category/create')}}"><button type="button" class="btn btn-block btn-primary">Thêm mới</button></a> -->
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <!-- <h3 class="box-title">Horizontal Form</h3> -->
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal"
                    action="{{$isAdd ? url('admin/settings') : url('admin/settings/'.$setting->id)}}" method="post"
                    enctype="multipart/form-data">
                    @method($isAdd ? 'post' : 'put')
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="title" class="col-sm-2 control-label">Tiêu đề</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                        value="{{ $isAdd ? '' : $setting->title }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="limit_product" class="col-sm-2 control-label">Limit product home</label>

                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="limit_product" placeholder=""
                                        name="limit_product" value="{{ $isAdd ? 8 : $setting->limit_product }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="policy" class="col-sm-2 control-label">policy</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control textarea" name="policy" id="policy" cols="30" rows="3">{{ $isAdd ? '' : $setting->policy }}</textarea>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone" class="col-sm-2 control-label">Phone</label>

                                <div class="col-sm-10">
                                    <textarea class="form-control textarea" placeholder='{icon:<i class="fa fa-address-book"></i>,HN:["0902 222 945","0917 346 883"],HCM:["0914 196 487"]}' name="phone" id="phone" cols="30" rows="3">{{ $isAdd ? '' : $setting->phone }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="inputPassword3" class="col-sm-2 control-label">Upload Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword3" class="col-sm-2 control-label">Upload Banner</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="alt_logo" class="col-sm-2 control-label">alt logo</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alt_logo" placeholder="alt logo"
                                        name="alt_logo" value="{{ $isAdd ? '' : $setting->alt_logo }}">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="alt_banner" class="col-sm-2 control-label">alt banner</label>

                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alt_banner" placeholder="alt banner"
                                        name="alt_banner" value="{{ $isAdd ? '' : $setting->alt_banner }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="copy_right" class="col-sm-2 control-label">Copyright</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="copy_right" placeholder=""
                                        name="copy_right" value="{{ $isAdd ? '' : $setting->copy_right }}">
                                </div>
                            </div>
                            
                        </div>


                        @if (session('success'))
                        <div class="alert alert-danger">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <p>{{ session('success') }}</p>
                        </div>
                        @endif
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer">
                        <a href="{{url('admin/settings')}}" class="btn btn-default">Hủy bỏ</a>
                        <button type="submit" class="btn btn-info pull-right">Lưu lại</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</section>
@endsection