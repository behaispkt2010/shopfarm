@extends('layouts.admin')
@section('title', 'Danh sách bài viết ')
@section('pageHeader','Menu ')
@section('detailHeader','Menu ')
@section('add_styles')

@endsection
@section('content')
    <br>
    <div class="row">


        <div class="col-md-12">
            <div class="x_panel">
                <form action="{{route('setting.store')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label >Tiêu đề</label>
                        <input type="text" maxlength="20" class="form-control" name="title" value="{{\App\Setting::getValue('title')}}" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea type="text" class="form-control" name="description"
                              >{{\App\Setting::getValue('description')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ email gởi thông báo</label>
                        <input type="email" class="form-control" name="email"
                               value="{{\App\Setting::getValue('email')}}">
                    </div>
                    <button type="submit" class="btn btn-raised btn-success">Cập nhật</button>
                </form>
            </div>

        </div>


    </div>
    @endsection

    @section('add_scripts')
            <!-- Datatables -->

@endsection

