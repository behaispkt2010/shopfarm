@extends('layouts.admin')
@section('title', 'Danh sách users ')
@section('pageHeader','Danh sách user')
@section('detailHeader','danh sách')

@section('new-btn')
    @if(Request::is('admin/staffs'))
    <a href="{{route('staffs.create')}}" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
    @else
    <a href="{{route('users.create')}}" class="btn btn-warning btn-fab">
        <i class="fa fa-plus material-icons new-btn" aria-hidden="true"></i>
    </a>
    @endif
@endsection
@section('content')
    <div class="row top-right">
        <form action="" method="GET">
            <div class="x_panel">
            <div class="x_content">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="form-group label-floating">

                            <label class="control-label" for="addon2">Tên user | Mã user | Số điện thoại</label>

                            <div class="input-group text-center">
                                <input type="text" id="addon2" name="q" class="form-control" value="{{Request::get('q')}}">
                                      <span class="input-group-btn">
                                        <button type="submit" class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">search</i>
                                        </button>
                                      </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>

                        <div class="clearfix"></div>
                        @if(count($users) !=0)
                        @foreach($users as $user)
                            <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                                <div class="well box_1">
                                    <div class="box-status_user"
                                         style="background-color: @foreach($roles as $itemRole) @if ($user->id == $itemRole->user_id) {{ $itemRole->color }} @endif @endforeach;">
                                        <p class="text-center status-title">@foreach($roles as $itemRole) @if ($user->id == $itemRole->user_id) {{ $itemRole->display_name }} @endif @endforeach</p>
                                    </div>

                                    <div class="img-product-view">
                                        <img src="{{url('/')}}{{$user->image}}" alt="" class="img-circle img-responsive"
                                             data-pin-nopin="true">
                                    </div>
                                    <br>
                                    <div class="col-sm-10 col-sm-offset-1">

                                        <a href="{{route('users.edit',['id' => $user->id])}}">
                                            <h4 class="cod">{{ \App\Util::UserCode($user->id)}}</h4>

                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <ul class="list-unstyled">
                                                        <li><span class="label-box55">Tên:</span> {{$user->name}}</li>
                                                        <li><span class="label-box55">Email:</span> {{$user->email}}</li>
                                                        <li><span class="label-box55">SDT:</span> {{$user->phone_number}}</li>
                                                        <li><span class="label-box55">Địa chỉ:</span> {{$user->address}}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xs-12 text-center">
                                        {{--<a href="#"  target="_blank" class="btn btn-primary btn-xs" >--}}
                                        {{--<i class="fa fa-eye" aria-hidden="true"></i> Xem--}}
                                        {{--</a>--}}

                                        <a href="{{route('users.edit',['id' => $user->id])}}"
                                           class="btn btn-raised btn-primary btn-xs">
                                            <i class="fa fa-pencil" aria-hidden="true"></i> Chỉnh sửa
                                        </a>
                                        <form action="{{route('users.destroy',['id' => $user->id])}}" method="post" class="form-delete" style="display: inline">
                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                            <input type="text" class="hidden" value="{{$user->id}}">

                                            <input type="hidden" name="type_staff" value="@if(Request::is('admin/staffs'))staffs @else users @endif">

                                            {{method_field("DELETE")}}
                                            <a type="submit" class = "btn btn-raised  btn-xs btn-danger" name ="delete_modal" style="display: inline-block"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="clearfix"></div>
                        <div class="text-center">
                            {{ $users->appends(array('q' => Request::get('q')))->links() }}
                        </div>
                        @else
                            <div>Không tìm thấy dữ liệu</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partial.modal_delete')
@endsection
@section('add_scripts')
    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('#select-ck,#select-type').selectize({});
    </script>
@endsection