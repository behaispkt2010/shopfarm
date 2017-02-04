@extends('layouts.admin')
@section('title', 'Chủ kho')
@section('pageHeader','Chủ kho')
@section('detailHeader','thông tin')
@section('rightHeader')
    <a href="{{route('warehouse.create')}}" class="btn btn-raised btn-warning btn-md">
        <i class="fa fa-plus" aria-hidden="true"></i> Tạo mới
    </a>
@endsection
@section('content')
    <br>
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <!-- Name and Description -->
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{$id}}">
            <input type="hidden" name="user_id" value="{{$userInfo->id}}">

            <div class="">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-warehouse info-user" style="min-height: 440px;">
                            <h4 class="text-center">Thông tin người đại diện <i style="float: right"
                                                                                class="fa fa-edit"
                                                                                aria-hidden="true"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Mã</label>

                                            <div class="col-md-9 col-xs-12">
                                                <div  disabled class="form-control" id="code" placeholder="#000">#{{$userInfo->id}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Tên</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text" disabled class="form-control" name="name" value="{{$userInfo->name}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Email</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="email" disabled class="form-control" name="email" value="{{$userInfo->email}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">SDT</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="number" disabled class="form-control" name="phone_number" value="{{$userInfo->phone_number}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="pass" class="col-md-3 col-xs-12 "> Mật khẩu</label>

                                            <div class="col-md-9 col-xs-12">
                                                <a href="" data-toggle="modal"
                                                   data-target=".modal-change-pass"> Thay đổi mật khẩu</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                             
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12control-label">Cập nhật</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <div>{{$userInfo->created_at->format('d/m/Y')}}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="text-right">
                                    <button id="update_info" class="btn-update btn btn-primary btn-raised text-right btn-small" style="display: none"> Cập nhật</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-kho" style="min-height: 440px;">
                            <h4 class="text-center">Thông tin Kho / doanh nghiệp <i style="float: right"
                                                                                    class="fa fa-edit"
                                                                                    aria-hidden="true"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Tên DN</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text"  class="form-control" disabled name="name_company" value="{{$wareHouse->name_company}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Địa chỉ</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text"  class="form-control" disabled name="address" value="{{$wareHouse->address}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">MS
                                                thuế</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text"  class="form-control" disabled name="mst" value="{{$wareHouse->mst}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Người ĐD</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text"  class="form-control" disabled name="ndd" value="{{$wareHouse->ndd}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="text-right">
                                    <button id="update_detail" class="btn-update btn btn-primary btn-raised text-right btn-small" style="display: none"> Cập nhật</button>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 " style="min-height: 440px; position: relative">
                            <h4 class="text-center">Tài khoản ngân hàng </h4>
                            <ul class="list-unstyled list_bank">
                                <?php $i=0 ;?>
                                @foreach($bankWareHouse as $itemBankWareHouse)
                                    <?php $i++; ?>
                                <li>
                                    <div class="form-group">

                                        <div class="row">

                                            <label for="code" class="col-md-9 col-xs-12 control-label">   <span class="stt-num">{{$i}}</span> {{$itemBankWareHouse->card_name}}: {{$itemBankWareHouse->card_number}}</label>

                                            <div class="col-md-3 col-xs-12 ">
                                                <div class="togglebutton">
                                                    <i data-toggle="modal"
                                                       data-target=".modal-bank-edit"
                                                       class="fa fa-edit edit_bank" data-id="{{$itemBankWareHouse->id}}"
                                                       data-bank="{{$itemBankWareHouse->bank}}" data-province="{{$itemBankWareHouse->province}}"
                                                       data-card_number="{{$itemBankWareHouse->card_number}}"data-check="{{$itemBankWareHouse->check}}"  data-card_name="{{$itemBankWareHouse->card_name}}" class="fa fa-pencil" style="margin-right: 5px"></i> &nbsp;&nbsp;
                                                    <label>
                                                        <input style="display: none" type="checkbox" @if($itemBankWareHouse->check==1) checked @endif disabled>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </li>
                                    @endforeach
                            </ul>
                            <button class="btn-update btn btn-primary btn-raised text-right btn-small btn-new-bank" data-toggle="modal"
                                    data-target=".modal-bank"> Thêm mới</button>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1" style="min-height: 440px;">
                            <h4 class="text-center">Gói dịch vụ </h4>
                            <ul class="list-unstyled">
                                <li>

                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4 col-xs-12 control-label"> Xác thực
                                                kho</label>

                                            <div class="col-md-8 col-xs-12">
                                                <button class="btn btn-success btn-raised btn-sm"> Đăng ký</button>

                                                <button class="btn btn-info btn-raised btn-sm" > Chi tiết
                                                </button>
                                            </div>
                                        </div>
                                    </div>


                                </li>
                                <li>

                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4 col-xs-12 control-label"> Quảng cáo
                                            </label>

                                            <div class="col-md-8 col-xs-12">
                                                <button class="btn btn-success btn-raised btn-sm"> Đăng ký</button>

                                                <button class="btn btn-info btn-raised btn-sm" > Chi tiết
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                                <li>

                                    <div class="row">
                                        <div class="form-group">
                                            <label class="col-md-4  col-xs-12 control-label"> Cấp kho : <input type="number" class="form-control" name="levelkho" required min="1" max="3" value="@if(!empty($wareHouse->level)){{ $wareHouse->level }}" @endif></label>

                                            <div class="col-md-8 col-xs-12">
                                                <button class="btn btn-success btn-raised btn-sm btnUpgrade"> Nâng cấp</button>
                                            </div>
                                        </div>
                                    </div>

                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>



    <div class="modal fade modal-service" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-service">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Xác thực kho</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="col-md-12">

                            <h3>Có giấy phép kinh doanh</h3>
                                <ul class="list-unstyled">
                                    <li>
                                        <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mô hình kinh doanh:</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mô hình kinh doanh</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" checked="true"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Tên doanh nghiệp</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Thời gian hợp đồng của doanh nghiệp</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>

                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Mã số thuế</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Địa chỉ
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li> <div class="form-group">
                                            <label class="col-md-8 col-xs-12 control-label"> Đại diện</label>

                                            <div class="col-md-4 col-xs-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> xác thực
                                                    </label>
                                                </div>
                                            </div>
                                        </div></li>
                                </ul>
                            <div class="clear"></div>
                            <br>
                            <h3>Có Kho hàng / Nhà xưởng</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label"> Quy mô: 30m2</label>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> xác thực
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li> <div class="form-group">
                                        <label class="col-md-8 col-xs-12 control-label"> Năng lực cấp:.....</label>

                                        <div class="col-md-4 col-xs-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" checked="true"> xác thực
                                                </label>
                                            </div>
                                        </div>
                                    </div></li>
                                <li> <div class="form-group">
                                        <label class="col-md-12 col-xs-12 control-label"> hình ảnh kho:.....</label>

                                        <div class="col-md-12 col-xs-12">

                                        </div>
                                    </div></li>

                            </ul>

                            </div>


                    </div>


                </div>
                <div class="modal-footer">

                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-change-pass" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-change-pass">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Thay đổi mật khẩu</h4>
                </div>
                <div class="modal-body sroll">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="code" class="col-md-5 control-label">Mật khẩu hiện tại:</label>
                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="old_password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="code" class="col-md-5 control-label">Mật khẩu mới:</label>

                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="new_pass"/>
                                    </div>
                                        </div>
                                    <div class="form-group">
                                        <label for="code" class="col-md-5 control-label">Nhập lại mật khẩu</label>

                                        <div class="col-md-7">
                                            <input type="password" class="form-control" name="renew_pass"/>
                                        </div>
                                    </div>
                                </div>
                </div>
                <div class="modal-footer">
                    <button  id="changePassbtn" type="button" class="btn btn-raised btn-primary">Lưu</button>
                </div>

            </div>
        </div>
    </div>


    <div class="modal fade modal-bank" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-bank">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Tài khoản ngân hàng</h4>
                </div>
                <div class="modal-body">

                    <div class="frm-add">
                        <div class="row">
                            <div class="form-group">
                            <label for="name" class="col-md-4 col-sm-4 control-label">Tên ngân hàng</label>
                            <div class="col-md-8 col-sm-8">
                                <select  data-placeholder="Ngân hàng" class="form-control" name="bank">
                                    @foreach($bank as $itemBank)
                                    <option value="{{$itemBank->id}}">{{$itemBank->name}}</option>
                                        @endforeach
                                </select>

                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label for="name" class="col-md-4 col-sm-4 control-label">Tỉnh/thành phố</label>
                            <div class="col-md-8 col-sm-8">
                                <select class="form-control" name="province">
                                    @foreach($province as $itemProvince)
                                        <option value="{{$itemProvince->provinceid}}">{{$itemProvince->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label  class="col-md-4 col-sm-4 control-label">Số tài khoản</label>
                            <div class="col-md-8 col-sm-8">
                                <input type="number" class="ng-valid ng-dirty ng-touched form-control"required  name="card_number">
                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label  class="col-md-4 col-sm-4 control-label">Chủ tài khoản</label>

                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="ng-valid ng-dirty ng-touched form-control" required name="card_name">
                            </div>
                                </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Kích hoạt</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" name="check" >
                                    </label>
                                    </div>
                            </div>
                        </div>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="create_bank" type="button" class="btn btn-raised btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-bank-edit" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-bank-edit">
            <input type="hidden" name="id_bank">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Tài khoản ngân hàng</h4>
                </div>
                <div class="modal-body">

                    <div class="frm-add">
                        <div class="row">
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-sm-4 control-label">Tên ngân hàng</label>
                                <div class="col-md-8 col-sm-8">
                                    <select id="bank_select"  data-placeholder="Ngân hàng" class="form-control" name="bank">
                                        @foreach($bank as $itemBank)
                                            <option value="{{$itemBank->id}}">{{$itemBank->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="name" class="col-md-4 col-sm-4 control-label">Tỉnh/thành phố</label>
                                <div class="col-md-8 col-sm-8">
                                    <select class="form-control" name="province">
                                        @foreach($province as $itemProvince)
                                            <option value="{{$itemProvince->provinceid}}">{{$itemProvince->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Số tài khoản</label>
                                <div class="col-md-8 col-sm-8">
                                    <input type="number" class="ng-valid ng-dirty ng-touched form-control" required  name="card_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Chủ tài khoản</label>

                                <div class="col-md-8 col-sm-8">
                                    <input type="text" class="ng-valid ng-dirty ng-touched form-control" required name="card_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Kích hoạt</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" name="check" >
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="edit_bank" type="button" class="btn btn-raised btn-primary">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    @endsection


    @section('add_scripts')
            <!-- jQuery Tags Input -->
    <script src="{{asset('plugin/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script>
        function onAddTag(tag) {
            alert("Added a tag: " + tag);
        }

        function onRemoveTag(tag) {
            alert("Removed a tag: " + tag);
        }

        function onChangeTag(input, tag) {
            alert("Changed a tag: " + tag);
        }

        $(document).ready(function () {
            $('#tags_1').tagsInput({
                width: 'auto'
            });
        });
    </script>
    <!-- /jQuery Tags Input -->

    <script src="{{asset('js/selectize.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('select').selectize({
            create: true,
            sortField: 'text'
        });
    </script>
    <script>
        $('.info-kho .fa-edit,.info-warehouse .fa-edit').click(function(){
            $(this).parent().parent().find('input').removeAttr('disabled');
            $(this).parent().parent().find('.btn-update').css('display','inline-block');

        })
        $('button.btn-update').click(function(){
//            alert("dsds");
//            $(this).closest().find('input').attr('disabled');
//            $('button.btn-update').css('display','none');
        })
    </script>
    <script>
        $('#update_info').on('click', function (e) {
            e.preventDefault();

            var id = $('input[name="user_id"]').val();
            var name = $('.info-warehouse input[name="name"]').val();
            var email = $('.info-warehouse input[name="email"]').val();
            var phone_number = $('.info-warehouse input[name="phone_number"]').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxInfo',
                data: {name: name, email: email, phone_number: phone_number,_token: _token,id:id},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: Data['name'],
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>
    <script>
        $('#changePassbtn').on('click', function (e) {
            e.preventDefault();

            var id = $('input[name="user_id"]').val();
            var old_password = $('.modal-change-pass input[name="old_password"]').val();
            var new_pass = $('.modal-change-pass input[name="new_pass"]').val();
            var renew_pass = $('.modal-change-pass input[name="renew_pass"]').val();

            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxChangePass',
                data: {old_password: old_password,new_pass: new_pass,renew_pass: renew_pass,_token: _token,id:id},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    if(msg['status'] != "danger") {
                        new PNotify({
                            title: 'Cập nhật thành công',
                            text: '',
                            type: 'success',
                            hide: true,
                            styling: 'bootstrap3'
                        });
                        location.reload();
                    }
                    else{
                        new PNotify({
                            title: msg['msg'],
                            text: '',
                            type: msg['status'],
                            hide: true,
                            styling: 'bootstrap3'
                        });


                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: Data['name'],
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>
    <script>
        $('#create_bank').on('click', function (e) {
            e.preventDefault();
            var ware_id = $('input[name="id"]').val();
            var bank = $('.modal-bank select[name="bank"] :selected').val();
            var province = $('.modal-bank select[name="province"] :selected').val();
            var card_number = $('.modal-bank input[name="card_number"]').val();
            var card_name = $('.modal-bank input[name="card_name"]').val();
            var check = 0;
            if($('.modal-bank input[name="check"]').is(':checked'))
              var check = 1;
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
//            alert(check);
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxBank',
                data: {bank: bank, province: province, card_number: card_number,card_name: card_name,check:check,_token: _token,ware_id:ware_id},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: 'Vui lòng điền đầy đủ thông tin',
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>
    <script>
        $('#edit_bank').on('click', function (e) {
            e.preventDefault();
            var ware_id = $('input[name="id"]').val();
            var id_bank = $('input[name="id_bank"]').val();
            var bank = $('.modal-bank-edit select[name="bank"] :selected').val();
            var province = $('.modal-bank-edit select[name="province"] :selected').val();
            var card_number = $('.modal-bank-edit input[name="card_number"]').val();
            var card_name = $('.modal-bank-edit input[name="card_name"]').val();
            var check = 0;
            if($('.modal-bank-edit input[name="check"]').is(':checked'))
                var check = 1;

            if(check=='on'){check=1};
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
//            alert(check);
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxEditBank',
                data: {bank: bank, province: province, card_number: card_number,card_name: card_name,check:check,_token: _token,ware_id:ware_id,id_bank:id_bank},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: 'Vui lòng điền đầy đủ thông tin',
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>
    <script>
        $('#update_detail').on('click', function (e) {
            e.preventDefault();
            var id = $('input[name="id"]').val();
            var name_company = $('.info-kho input[name="name_company"]').val();
            var address = $('.info-kho input[name="address"]').val();
            var mst = $('.info-kho input[name="mst"]').val();
            var ndd = $('.info-kho input[name="ndd"]').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxDetail',
                data: {name_company: name_company, address: address, mst: mst,ndd: ndd,_token: _token,id:id},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: Data['name'],
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>
    <script type="text/javascript">
        $(".btnUpgrade").on('click',function(e){
            e.preventDefault();
            var id = $('input[name="id"]').val();
            var levelkho = $('input[name="levelkho"]').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxEditLevel',
                data: {id: id, levelkho: levelkho, _token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Cập nhật thành công',
                        text: '',
                        type: 'success',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    //location.reload();
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    //show notify
                    var Data = JSON.parse(XMLHttpRequest.responseText);
                    new PNotify({
                        title: 'Lỗi',
                        text: 'Cấp kho không được nhỏ hơn 1 hoặc lớn hơn 3',
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
    </script>

    <script>
        $(document).on('click', '.edit_bank', function () {
            _self = $(this);
            $('.modal-bank-edit input[name="id_bank"]').val(_self.data('id'));
            $('.modal-bank-edit select[name="bank"]')[0].selectize.setValue(_self.data('bank'));
            $('.modal-bank-edit select[name="province"]')[0].selectize.setValue(_self.data('province'));
            $('.modal-bank-edit input[name="card_number"]').val(_self.data('card_number'));
            $('.modal-bank-edit input[name="card_name"]').val(_self.data('card_name'));
            if(_self.data('check') == 1) {
                $('.modal-bank-edit input[name="check"]').prop('checked', true);
            }
            else{
                $('.modal-bank-edit input[name="check"]').prop('checked', false);
            }
        });
    </script>

@endsection