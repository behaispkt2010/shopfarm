@extends('layouts.admin')
@section('title', 'Tồn kho')
@section('pageHeader','Tồn kho sản phẩm ')
@section('detailHeader','kiểm tra tồn kho')
@section('add_styles')
@endsection
@section('content')
    <div class="row">
        <br>
        <div class="col-md-12">
            <div class="">
                <div class="x_content">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        </div>

                        <div class="clearfix"></div>

                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                            <div class="well box_1 " style="height: 280px">
                                <div class="col-sm-12 ">


                                    <span class="title-money pst-tootip" style="border-bottom: 1px solid #52b256;">Sắp chuyển
                                    <!-- ngIf: (transaction.currentTutorialID == 1) -->
                                    </span>

                                        <div class="content-money">
                                            <p style="color: #52b256;">0 VNĐ</p>
                                            <span class="">0 đơn hàng</span>
                                        </div>


                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                            <div class="well box_1 " style="height: 280px">
                                <div class="col-sm-12 ">


                                    <span class="title-money pst-tootip" style="border-bottom: 1px solid #52b256;">Đơn hàng chưa giao
                                    <!-- ngIf: (transaction.currentTutorialID == 1) -->
                                    </span>

                                    <div class="content-money">
                                        <p style="color: #ea933f;">0 VNĐ</p>
                                        <span class="">0 đơn hàng</span>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                            <div class="well box_1 " style="height: 280px">
                                <div class="col-sm-12 ">


                                    <span class="title-money pst-tootip" style="border-bottom: 1px solid #52b256;">Đơn hàng đã giao
                                    <!-- ngIf: (transaction.currentTutorialID == 1) -->
                                    </span>

                                    <div class="content-money">
                                        <p style="color: #835f90;">0 VNĐ</p>
                                        <span class="">0 đơn hàng</span>
                                    </div>


                                </div>


                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_details box-detail">

                            <div class="well box_1 " style="height: 280px">
                                <div class="col-sm-12 ">


                                    <span class="title-money pst-tootip" style="border-bottom: 1px solid #52b256;">Đã chuyển
                                    <!-- ngIf: (transaction.currentTutorialID == 1) -->
                                    </span>

                                    <div class="content-money">
                                        <p style="color: #41a7c0;">0 VNĐ</p>
                                        <span class="">0 đơn hàng</span>
                                    </div>


                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


