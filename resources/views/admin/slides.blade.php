@extends('layouts.admin')
@section('title', 'Danh sách slide')
@section('pageTitle','Danh sách slide')
@section('header-right')
<a href="{{url('admin/slides/create')}}"><button type="button" class="btn btn-block btn-primary">Thêm mới</button></a>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped dataTableFullFeature">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình ảnh</th>
                                <th>Thứ tự</th>
                                <th>Url</th>
                                <th>Sidebar quảng cáo</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($slide as $key=>$st)
                            <tr>
                                <td>{{$key + 1}}</td>
                                <td><img src="{{url($st->image)}}" alt="{{$st->alt_banner}}" style="width:300px;"></td>
                                <td>{{$st->position}}</td>
                                <td>{{$st->url}}</td>
                                <!-- <td>{{$st->copy_right}}</td> -->
                                <td class="aaa">
                                    <input data_id={{$st->id}} {{$st->sidebar_qc == 1 ? "checked" : ""}} type="checkbox" class="switch_1 sidebar_qc" name="sidebar_qc">
                                </td>
                                <td class="action">
                                    <div class="btn-group">
                                        <form action="{{ url('admin/slides/'.$st->id) }}" method="POST">
                                            <a href="{{url('admin/slides/'.$st->id.'/edit')}}"
                                            class="btn btn-info">Sửa</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Xóa</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</section>
@endsection