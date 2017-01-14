@extends('layouts.admin')
@section('title', 'Danh sách bài viết ')
@section('pageHeader','Danh sách bài viết ')
@section('detailHeader','danh sách')
@section('add_styles')
        <!-- Datatables -->
<link href="{{asset('plugin/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugin/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugin/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugin/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('plugin/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-md-4">
            <div class="x_panel">
                @if(Request::is('admin/category'))
                    <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @else
                            <form action="{{route('category.update',['id' => $id])}}" method="POST"
                                  enctype="multipart/form-data">
                                {{ method_field('PUT') }}
                                <input type="hidden" name="id" value="{{$id}}">
                                @endif
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <label>Tên danh mục</label>
                                    <input type="text" class="form-control" name="name" equired
                                           value="@if(!empty($category->name)){{$category->name}}@else{{old('name')}}@endif">
                                </div>
                                <div class="form-group">
                                    <label for="name">Danh mục cha</label>
                                    <select name="parent" class="form-control">
                                        <option value="0">Mặc định
                                        </option>
                                        @foreach($data  as $itemData)
                                        <option value="{{$itemData->id}}"
                                                @if(!empty($category->parent) && $category->parent == $itemData->id) selected @endif >
                                            {{$itemData->name}}
                                        </option>
                                            @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Mô tả</label>
                                    <textarea class="form-control" rows="5"
                                              name="description">@if(!empty($category->description)){{$category->description}}@else{{old('description')}}@endif</textarea>
                                </div>

                                <button type="submit" name="addCategory" class="btn btn-raised btn-primary">Thêm danh
                                    mục
                                </button>
                    </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="x_panel">

                    <table id="table" class="table table-striped table-bordered bulk_action" data-form="deleteForm">
                        <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Danh mục</th>
                            <th>ngày tạo</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
            </div>
        </div>
    </div>

    @include('admin.partial.modal_delete')
    @endsection

    @section('add_scripts')
            <!-- Datatables -->
    <script src="{{asset('plugin/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('plugin/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{asset('plugin/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('plugin/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugin/pdfmake/build/vfs_fonts.js')}}"></script>
    <script>
        $('table[data-form="deleteForm"]').on('click', '.form-delete', function(e){
            e.preventDefault();
            var $form=$(this);
            $('#confirm').modal({ backdrop: 'static', keyboard: false })
                    .on('click', '#delete-btn', function(){
                        $form.submit();
                    });
        });
    </script>
    <script type="text/javascript">
                @if(isset($type))
                var oTable;
        $(document).ready(function () {
            oTable = $('#table').DataTable({
                "language": {
                    "url": "/plugin/datatable-lang/Vietnamese.json"
                },
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": "{{ url('admin/'.$type.'/data/json') }}",
            });
        });
        @endif
    </script>
@endsection

