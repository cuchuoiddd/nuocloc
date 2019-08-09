@extends('layouts.admin')
@section('pageTitle', 'Chính sách')
@section('header-right')
<a href="{{url('admin/policies/create')}}" class="btn btn-block btn-primary">Thêm mới</a>
@endsection
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <!-- <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div> -->
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped dataTableFullFeature">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($policies))
                        @foreach($policies as $key => $policy)
                        <tr>
                            <td>#{{$key+1}}</td>
                            <td class="title">{{$policy->title}}</td>
                            <td>{{$policy->description}}</td>
                            <td class="action">
                                <div class="btn-group">
                                    <a href="{{url('admin/policies/'.$policy->id.'/edit')}}"
                                        class="btn btn-info">Sửa</a>
                                    <a data-toggle="modal" data-id="{{$policy->id}}" data-target="#modal-delete"
                                        class="btn btn-danger">Xóa</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
<div class="modal fade" id="modal-delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="DELETE">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Xóa bài viết</h4>
                </div>
                <div class="modal-body">
                    Bạn có chắc chắn muốn xóa bài viết : <strong><span class="title"></span></strong> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-danger">Xóa</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
@endsection
@section('footerScript')
<script>
$('#modal-delete').on('show.bs.modal', function(e) {
    var form = $(e.target).find('form')
    var id = $(e.relatedTarget).data('id')
    var title = $(e.relatedTarget).closest('tr').find('td.title').html();
    var action = "{{url('admin/policies')}}/" + id
    form.find('.modal-body .title').html(title)
    form.attr('action', action)
    form.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'), 
            data: $(this).serialize(),
            success: function(data) {
                window.location.reload()
            }
        });
    })
})
</script>
@endsection