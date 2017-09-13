@extends('layouts.admin')
@section('title', 'Thông báo')
@section('pageHeader','Thông báo')
@section('detailHeader','Thông báo')

@section('content')
    <div class="row top-right">
        <div class="x_panel">
            <div class="x_content">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if(count($arrNotification) !=0)
                        <h2>Thông báo của bạn</h2>
                        <ul id="" class="list_notify">

                            @foreach ($arrNotification as $itemNotification)
                                {{--<li class="notify">
                                    <a href="{{ route('warehouse.edit',['id' => $itemNotification->id]) }}" target="_blank">
                                        <span class="image"><img src="@if (!empty($itemNotification->image)){{ url('/').$itemNotification->image }} @else {{url('/').'/images/user_default.png'}} @endif " alt="Profile Image"/></span>

                                        <span class="message"> @if($itemNotification->content == "upgradeLevelKho")Chủ kho<span class="different">{{$itemNotification->name}}</span>muốn nâng cấp kho lên cấp<span class="different">{{$itemNotification->levelkho}}</span>.
                                            @elseif ($itemNotification->content == "confirmkho")Chủ kho <span class="different">{{$itemNotification->name}}</span> muốn Xác thực kho. Hãy kiểm tra và Xác thực cho chủ kho nhé.
                                            @elseif ($itemNotification->content == "quangcao")Chủ kho<span class="different">{{$itemNotification->name}}</span>muốn Đăng ký Quảng cáo.
                                            @endif
                                        </span>
                                        <br>
                                        <span class="time">
                                            {{ $itemNotification->created_at->diffForHumans() }}
                                        </span>
                                    </a>
                                </li>--}}
                                <li class="notify">
                                    @if(Auth::user()->hasRole('kho'))
                                        <a href="@if ($itemNotification->keyname == \App\Util::$confirmkhoSuccess) {{url('/shop/'.$itemNotification->id)}}
                                        @elseif ($itemNotification->keyname == \App\Util::$newproductSuccess) {{route('products.edit',['id' => $itemNotification->orderID_or_productID])}}
                                        @else # @endif" target="_blank">
                                            <span class="image"><img src="@if (!empty($itemNotification->image)){{ url('/').$itemNotification->image }} @else {{url('/').'/images/user_default.png'}} @endif " alt="Profile Image"/></span>
                                            <span class="notification_title">{{$itemNotification->title}}</span>
                                            <br>
                                            <span class="message">{{$itemNotification->content}}</span>
                                            <br>
                                            <span class="time">{{ $itemNotification->created_at}}</span>
                                        </a>
                                    @elseif(Auth::user()->hasRole('com'))
                                        <a href="@if ($itemNotification->keyname == \App\Util::$confirmCompanySuccess) {{url('/company/'.$itemNotification->id)}}
                                        @elseif ($itemNotification->keyname == \App\Util::$newscompanySuccess) {{route('newscompany.edit',['id' => $itemNotification->orderID_or_productID])}}
                                        @else # @endif" target="_blank">
                                            <span class="image"><img src="@if (!empty($itemNotification->image)){{ url('/').$itemNotification->image }} @else {{url('/').'/images/user_default.png'}} @endif " alt="Profile Image"/></span>
                                            <span class="notification_title">{{$itemNotification->title}}</span>
                                            <br>
                                            <span class="message">{{$itemNotification->content}}</span>
                                            <br>
                                            <span class="time">{{ $itemNotification->created_at}}</span>
                                        </a>
                                    @else
                                        <a href="@if ($itemNotification->keyname == \App\Util::$newproduct) {{route('products.edit',['id' => $itemNotification->orderID_or_productID])}}
                                                @elseif ($itemNotification->keyname == \App\Util::$newscompany) {{route('newscompany.edit',['id' => $itemNotification->orderID_or_productID])}}
                                                @elseif ($itemNotification->keyname == \App\Util::$orderfail) {{route('orders.edit',['id' => $itemNotification->orderID_or_productID])}}
                                                @elseif ($itemNotification->keyname == \App\Util::$orderreturn) {{route('orders.edit',['id' => $itemNotification->orderID_or_productID])}}
                                                @elseif ($itemNotification->keyname == \App\Util::$ordernew) {{route('orders.edit',['id' => $itemNotification->orderID_or_productID])}}
                                                @elseif ($itemNotification->keyname == \App\Util::$dangkychukho) {{route('warehouse.create')}}
                                                @elseif ($itemNotification->keyname == \App\Util::$dangkycompany) {{route('company.create')}}
                                                @elseif ($itemNotification->keyname == \App\Util::$upgradeLevelKho ||$itemNotification->keyname == \App\Util::$quangcaoKho ||$itemNotification->keyname == \App\Util::$confirmkho ||$itemNotification->keyname == \App\Util::$dangkytraphiKho ||$itemNotification->keyname == \App\Util::$dangkygiahanKho) {{route('warehouse.edit',['id' => $itemNotification->id])}} 
                                                @elseif ($itemNotification->keyname == \App\Util::$upgradeLevelCompany ||$itemNotification->keyname == \App\Util::$quangcaoCompany ||$itemNotification->keyname == \App\Util::$confirmCompany ||$itemNotification->keyname == \App\Util::$dangkytraphiCompany ||$itemNotification->keyname == \App\Util::$dangkygiahanCompany) {{route('company.edit',['id' => $itemNotification->id])}} @endif" target="_blank">
                                            <span class="image"><img src="@if (!empty($itemNotification->image)){{ url('/').$itemNotification->image }} @else {{url('/').'/images/user_default.png'}} @endif " alt="Profile Image"/></span>
                                            <span class="notification_title">{{$itemNotification->title}}</span>
                                            <br>
                                            <span class="message">{{$itemNotification->content}}</span>
                                            <br>
                                            <span class="time">{{ $itemNotification->created_at }}</span>
                                        </a>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                        <div class="text-center">
                            {{ $arrNotification->appends(array('q' => Request::get('q')))->links() }}
                        </div>
                        @else
                            Bạn không có thông báo mới.
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection