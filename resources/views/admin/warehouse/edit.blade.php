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
@section('add_styles')
    <link href="{{asset('css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet">
@endsection
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

                        <div class="well box1 info-warehouse info-user" style="min-height: 825px;">
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
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Cập nhật</label>

                                            <div class="col-md-9 col-xs-12"  style="margin-left: -10px;">
                                                <div class="col-md-9 col-xs-12"><label for="" disabled class="form-control">{{$userInfo->created_at->format('H:m:s - d/m/Y')}}</label></div>
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

                        <div class="well box1 info-kho" style="min-height: 825px;">
                            <h4 class="text-center">Thông tin Kho / doanh nghiệp <i style="float: right"
                                                                                    class="fa fa-edit"
                                                                                    aria-hidden="true"></i></h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label" style="margin-top: 16px;">Mô hình kinh doanh</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <div class="form-group">
                                                    <select name="category_warehouse_id" id="category_warehouse_id" class="form-control">
                                                        @foreach($arrCategoryWarehouse as $itemCategoryWarehouse)
                                                            <option value="{{$itemCategoryWarehouse->id}}" @if ($itemCategoryWarehouse->id == $wareHouse->category_warehouse_id) selected="selected" @endif> {{$itemCategoryWarehouse->category_warehouse_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
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
                                                <input type="number"  class="form-control" disabled name="mst" value="{{$wareHouse->mst}}"/>
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
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label" style="margin-top: 16px;">Loại Chủ kho</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <div class="form-group">
                                                    <select name="user_test" id="user_test">
                                                        <option value="1" @if ($wareHouse->user_test == 1)selected="selected" @endif>Trả Phí</option>
                                                        <option value="2" @if ($wareHouse->user_test == 2)selected="selected" @endif>Dùng thử</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Thời gian hoạt động</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text" id="date-format" class="form-control" name="time_active" value="@if(!empty($wareHouse->time_active)){{$wareHouse->time_active}}@else{{old('time_active')}}@endif"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <label class="mb5">Hình ảnh kho/doanh nghiệp</label>

                                        <div class="image-view">
                                            @if(!empty($wareHouse->image_kho))
                                                <img src="{{url('/').$wareHouse->image_kho}}" alt="" class="img-responsive">
                                                <div class="form-group">
                                                    <label for="inputFile" class="col-md-4 control-label">Thay
                                                        đổi</label>

                                                    <div class="col-md-8">
                                                        <input type="text" readonly="" class="form-control"
                                                               placeholder="đường dẫn...">
                                                        <input type="file" name="image_kho" id="inputFile">
                                                    </div>
                                                </div>

                                            @else
                                                <input type="file" style="display:none;" name="image_kho" id="file-6"
                                                       class="inputfile inputfile-5"
                                                       data-multiple-caption="{count} files selected"/>
                                                <label class="file-view" for="file-6">
                                                    <figure>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                             height="17"
                                                             viewBox="0 0 20 17">
                                                            <path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/>
                                                        </svg>
                                                    </figure>
                                                    <span></span></label>
                                            @endif
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
                                                       class="fa fa-pencil edit_bank" data-id="{{$itemBankWareHouse->id}}"
                                                       data-bank="{{$itemBankWareHouse->bank}}" data-province="{{$itemBankWareHouse->province}}"
                                                       data-card_number="{{$itemBankWareHouse->card_number}}"data-check="{{$itemBankWareHouse->check}}"  data-card_name="{{$itemBankWareHouse->card_name}}" class="fa fa-pencil" style="margin-right: 5px"></i> &nbsp;&nbsp;
                                                    <label>
                                                        <input style="display: none" name="bankHas"  type="checkbox" @if($itemBankWareHouse->check==1) checked @endif disabled>
                                                        <input type="hidden" name="bankcheck" value="{{ $itemBankWareHouse->check }}">
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
                                                @if ($wareHouse->confirm_kho == 0)
                                                    @if(Auth::user()->hasRole(['kho','editor']))
                                                        <button class="btn btn-success btn-raised btn-sm" data-toggle="modal"
                                                                data-target=".modal-service"> Đăng ký</button>
                                                    @else
                                                        <button class="btn btn-success btn-raised btn-sm btnConfirmKho"> Đăng ký</button>
                                                    @endif
                                                @endif
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
                                                @if ($wareHouse->quangcao == 0)
                                                    @if(Auth::user()->hasRole(['kho','editor']))
                                                        <button class="btn btn-success btn-raised btn-sm" data-toggle="modal"
                                                                data-target=".modal-quangcao"> Đăng ký</button>
                                                    @else
                                                        <button class="btn btn-success btn-raised btn-sm btnQuangCao"> Đăng ký</button>
                                                    @endif
                                                @endif
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
                                            @if(Auth::user()->hasRole(['kho','editor']))
                                            <div class="col-md-8 col-xs-12">
                                                <button class="btn btn-success btn-raised btn-sm" data-toggle="modal"
                                                        data-target=".modal-upgrade"> Nâng cấp</button>
                                            </div>
                                            @else
                                            <div class="col-md-8 col-xs-12">
                                                <button class="btn btn-success btn-raised btn-sm btnUpgrade" > Nâng cấp</button>
                                            </div>
                                            @endif
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
                            <p>Thông tin xác thực sẽ được gửi tới Admin sau khi bạn xác nhận</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-raised btn-primary btnReQuestConfirmKho">Xác nhận</button>
                </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modal-quangcao" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-quangcao">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Đăng ký quảng cáo </h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Yêu cầu của bạn sẽ được gửi tới Admin, Nhân viên tư vấn sẽ điện thoại bạn trong thời gian sớm nhất</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-raised btn-primary btnReQuestQuangCao">Xác nhận</button>
                </div>

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
    <div class="modal fade modal-upgrade" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false"
         data-backdrop="static">
        <div class="modal-dialog modal-upgrade">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title text-center" id="myModalLabel">Nâng cấp kho</h4>
                </div>
                <div class="modal-body sroll">
                    <div class="row">
                        <div class="form-group">
                            <label for="code" class="col-md-5 control-label">Cấp kho:</label>
                            <div class="col-md-7">
                                <input type="number" class="form-control" name="levelkhoUpgrade" required min="1" max="3" value="@if(!empty($wareHouse->level)){{ $wareHouse->level }}" @endif/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label for="code" class="col-md-5 control-label"><a href="#" target="_blank">Quyền lợi khi nâng cấp kho</a></label>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group">
                            <h2>Thông tin chuyển khoản</h2>
                            <p>Quý khách có thể thanh toán cho chúng tôi bằng cách chuyển khoản trực tiếp tại ngân hàng, chuyển qua thẻ ATM, hoặc qua INTERNET BANKING của các ngân hàng sau:</p>
                            <p style="text-align: justify;">
                            @if (!empty(\App\Setting::getValue('stk1')))
                                1) Chủ Tài Khoản: {{\App\Setting::getValue('chutk1')}}<br>
                                Số tài khoản: <span style="font-family: Lucida Sans Unicode,Lucida Grande,sans-serif;"><span style="color:#d40c02"><strong>{{ \App\Setting::getValue('stk1') }}</strong></span></span><br>
                                    Ngân hàng : {{\App\Setting::getValue('chinhanh1')}}</p>
                            @endif
                            <p style="text-align: justify;">
                            @if (!empty(\App\Setting::getValue('stk2')))
                                2) Chủ Tài Khoản: {{\App\Setting::getValue('chutk2')}}<br>
                                Số tài khoản: <span style="font-family: Lucida Sans Unicode,Lucida Grande,sans-serif;"><span style="color:#d40c02"><strong>{{ \App\Setting::getValue('stk2') }}</strong></span></span><br>
                                Ngân hàng : {{\App\Setting::getValue('chinhanh2')}}</p>
                            @endif
                            <span style="color: red; font-size: medium;">Lưu ý: Khi chuyển khoản chủ kho sẽ ghi Mã kho – Nâng cấp kho – Cấp muốn nâng lên</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  id="btnSendRequestUpgrade" type="button" class="btn btn-raised btn-primary">Gửi Yêu Cầu</button>
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
                                <input type="text" class="ng-valid ng-dirty ng-touched form-control"required  name="card_number">
                            </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                            <label  class="col-md-4 col-sm-4 control-label">Chủ tài khoản</label>

                            <div class="col-md-8 col-sm-8">
                                <input type="text" class="ng-valid ng-dirty ng-touched form-control card_name" required name="card_name">
                            </div>
                                </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Kích hoạt</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="togglebutton">
                                    <label>
                                        <input type="checkbox" name="check" class="checkBank">
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
                                    <input type="text" class="ng-valid ng-dirty ng-touched form-control" required  name="card_number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Chủ tài khoản</label>

                                <div class="col-md-8 col-sm-8">
                                    <input type="text" class="ng-valid ng-dirty ng-touched form-control card_name" required name="card_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label  class="col-md-4 col-sm-4 control-label">Kích hoạt</label>
                                <div class="col-md-8 col-sm-8">
                                    <div class="togglebutton">
                                        <label>
                                            <input type="checkbox" name="check" class="checkBank">
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
    <script type="text/javascript" src="{{asset('plugin/moment/min/moment-with-locales.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap-material-datetimepicker.js')}}"></script>
    <!-- Select2 -->
    <script>
        $('select').selectize({
            create: true,
            sortField: 'text'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#date-format').bootstrapMaterialDatePicker
            ({
                format: 'DD/MM/YYYY',
                lang: 'vi',
                time: false,
            });
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
        $(".card_name").keyup(function () {
            var text = $(this).val();
            var text_change;
            text_change = text.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a").replace(/đ/g, "d").replace(/đ/g, "d").replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y").replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u").replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ.+/g,"o").replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ.+/g, "e").replace(/ì|í|ị|ỉ|ĩ/g,"i");
            var car_name = text_change.toUpperCase();
            $(".card_name").val(car_name);
        });
    </script>
    <script>
        function CheckBankExist(){
            //console.log($('tr[id*=output_newrow]').length)
            //var testme = false;
            var count = 0;
            $('input[type="hidden"][name="bankcheck"]').each(function() {
                if ($(this).val() == 1) {
                    count++;
                }
            });
            return count;
        }
        /*$(".checkBank").on('click', function () {
            var ware_id = $('input[name="id"]').val();
            var checkbankEx = CheckBankExist();
            if(checkbankEx >= 1){
                alert('Đã có tài khoản đang được sử dụng');
                $('.modal-bank input[name="check"]').prop('checked', false);
                $('.modal-bank-edit input[name="check"]').prop('checked', false);
            }
        });*/
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
            var category_warehouse_id = $('#category_warehouse_id').val();
            var time_active = $('.info-kho input[name="time_active"]').val();
            var image_kho = document.getElementsByName("image_kho");
            var file_image_kho = image_kho[0].files[0];
            console.log(file_image_kho);
            var user_test = $('#user_test').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxDetail',
                data: {name_company: name_company,category_warehouse_id: category_warehouse_id, address: address, mst: mst,image_kho: file_image_kho,ndd: ndd,time_active: time_active,user_test: user_test,_token: _token,id:id},
                success: function( msg ) {
                    $('.loading').css('display','none');
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
                    location.reload();
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
        $(".btnConfirmKho").on('click',function(e){
            e.preventDefault();
            var id = $('input[name="id"]').val();
            var _token = $('input[name="_token"]').val();
            var name_company = $('input[name="name_company"]').val();
            var address = $('input[name="address"]').val();
            var mst = $('input[name="mst"]').val();
            var ndd = $('input[name="ndd"]').val();
            var time_active = $('input[name="time_active"]').val();
            if(name_company == "" || address == "" || time_active == "" || mst == "" || ndd == ""){
                alert("Vui lòng kiểm tra đầy đủ thông tin Kho")
            } else {
                $('.loading').css('display', 'block');
                $.ajax({
                    type: "POST",
                    url: '{{ url('/') }}/admin/warehouse/AjaxConfirmKho',
                    data: {id: id,name_company:name_company,address:address,mst:mst,ndd:ndd,time_active:time_active, _token: _token},
                    success: function (msg) {
                        $('.loading').css('display', 'none');
                        //show notify
                        if(msg['status'] != "danger") {
                            new PNotify({
                                title: 'Xác nhận kho thành công',
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
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        //show notify
                        var Data = JSON.parse(XMLHttpRequest.responseText);
                        new PNotify({
                            title: 'Lỗi',
                            text: 'Có lỗi xảy ra! Vui lòng kiểm tra lại thông tin',
                            type: 'danger',
                            hide: true,
                            styling: 'bootstrap3'
                        });
                        $('.loading').css('display', 'none');

                    }
                });
            }
        });
        $(".btnQuangCao").on('click',function(e){
            e.preventDefault();
            var id = $('input[name="id"]').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxQuangCao',
                data: {id: id, _token: _token},
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
                        text: 'Có lỗi xảy ra! Vui lòng kiểm tra lại',
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
        $("#btnSendRequestUpgrade").on('click', function (e) {
            var levelkho = $('input[name="levelkhoUpgrade"]').val();
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxSendRequestUpdateLevelKho',
                data: {levelkho: levelkho, _token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Gửi yêu cầu thành công',
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
                        text: 'Cấp kho không được nhỏ hơn 1 hoặc lớn hơn 3',
                        type: 'danger',
                        hide: true,
                        styling: 'bootstrap3'
                    });
                    $('.loading').css('display','none');

                }
            });
        });
        $(".btnReQuestConfirmKho").on('click', function (e) {
            var name_company = $('input[name="name_company"]').val();
            var address = $('input[name="address"]').val();
            var mst = $('input[name="mst"]').val();
            var ndd = $('input[name="ndd"]').val();
            var time_active = $('input[name="time_active"]').val();
            var _token = $('input[name="_token"]').val();

            if(name_company == "" || address == "" || time_active == "" || mst == "" || ndd == ""){
                alert("Vui lòng kiểm tra đầy đủ thông tin Kho")
            } else {
                $('.loading').css('display','block');
                $.ajax({
                    type: "POST",
                    url: '{{ url('/') }}/admin/warehouse/AjaxReQuestConfirmKho',
                    data: {_token: _token},
                    success: function (msg) {
                        $('.loading').css('display', 'none');
                        //show notify
                        new PNotify({
                            title: 'Gửi yêu cầu thành công',
                            text: '',
                            type: 'success',
                            hide: true,
                            styling: 'bootstrap3'
                        });
                        location.reload();
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        //show notify
                        var Data = JSON.parse(XMLHttpRequest.responseText);
                        new PNotify({
                            title: 'Lỗi',
                            text: 'Không gửi được yêu cầu',
                            type: 'danger',
                            hide: true,
                            styling: 'bootstrap3'
                        });
                        $('.loading').css('display', 'none');

                    }
                });
            }
        });
        $(".btnReQuestQuangCao").on('click', function (e) {
            var _token = $('input[name="_token"]').val();
            $('.loading').css('display','block');
            $.ajax({
                type: "POST",
                url: '{{ url('/') }}/admin/warehouse/AjaxReQuestQuangCao',
                data: {_token: _token},
                success: function( msg ) {
                    $('.loading').css('display','none');
                    //show notify
                    new PNotify({
                        title: 'Gửi yêu cầu thành công',
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
                        text: 'Không gửi được yêu cầu',
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