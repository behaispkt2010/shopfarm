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

                        @foreach($arrNotification as $itemNotification)
                            @if ($itemNotification->content == "contact" || $itemNotification->content == "dangkychukho" )
                                <li class="notify">
                                    <a href="@if ($itemNotification->content == "dangkychukho"){{ route('warehouse.create') }} @else {{ route('notification.index') }} @endif" target="_blank">
                                        <span class="image"><img src="{{url('/').'/images/user_default.png'}}" alt="Profile Image"/></span>

                                        <span class="message"> @if ($itemNotification->content == "contact")Khách hàng <span class="different">{{$itemNotification->author_id}}</span> cần được hỗ trợ.
                                            @elseif ($itemNotification->content == "dangkychukho")Khách hàng <span class="different">{{$itemNotification->author_id}}</span> cần đăng ký làm Chủ kho.
                                            @endif
                                        </span>
                                        <br>
                                        <span class="time">
                                            {{ $itemNotification->created_at->diffForHumans() }}
                                        </span>
                                    </a>
                                </li>
                            @else
                                <li class="notify">
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
                                </li>
                            @endif
                        @endforeach
                        @else
                            Bạn không có thông báo mới.
                        @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection