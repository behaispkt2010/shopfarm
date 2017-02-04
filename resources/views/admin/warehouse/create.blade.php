@extends('layouts.admin')
@section('title', 'Chủ kho')
@section('pageHeader','Chủ kho')
@section('detailHeader','thông tin')
@section('content')
    <br>
    <div class="row">
        <form action="{{route('warehouse.store')}}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-md-12 col-xs-12">
            <!-- Name and Description -->
            <div class="text-right">
            <button type="submit" class="btn-update btn btn-success btn-raised text-right btn-small" > Lưu</button>
            </div>
            <div class="">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-warehouse" style="min-height: 440px;">
                            <h4 class="text-center">Thông tin người đại diện </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Mã</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text"  class="form-control" id="code" disabled  placeholder="#000"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Tên</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text"  class="form-control" required name="name" value="{{old('name')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Email</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="email"  class="form-control" name="email" value="{{old('email')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">Mật khẩu</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="password"  class="form-control" name="password" value="{{old('password')}}" required minlength="6"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="name" class="col-md-3 col-xs-12 control-label">SDT</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="number"  class="form-control" name="phone_number" required value="{{old('sdt')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 profile_details product-detail">

                        <div class="well box1 info-kho" style="min-height: 440px;">
                            <h4 class="text-center">Thông tin Kho / doanh nghiệp </h4>
                            <ul class="list-unstyled">
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Tên DN</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text"  class="form-control" name="name_company" value="{{old('name_company')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Địa chỉ</label>

                                            <div class="col-md-9 col-xs-12 ">
                                                <input type="text"  class="form-control" name="address" value="{{old('address')}}"/>
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
                                                <input type="text"  class="form-control" name="mst" value="{{old('mst')}}"/>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="code" class="col-md-3 col-xs-12 control-label">Người ĐD</label>

                                            <div class="col-md-9 col-xs-12">
                                                <input type="text"  class="form-control" name="ndd" value="{{old('ndd')}}"/>
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
        </form>
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

@endsection