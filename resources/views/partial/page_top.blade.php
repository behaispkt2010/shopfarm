<header class="hidden-xs">
    <div class="logo">
        <a href="{{url('/')}}">
            <img src="{{asset('frontend/images/nosago1.png')}}" class="img_logo_front">
        </a> 
    </div>
    
    <ul class="box-manage">
        <!-- <li role="presentation" class="active btn btn-raised btn-dangtin col-xs-12">
            <a href="#gioi-thieu" id="gioithieu-tab" role="tab" data-toggle="tab" aria-controls="gioithieu" aria-expanded="true">Giới thiệu</a>
        </li> 
        <li role="presentation" class="btn btn-raised btn-dangtin col-xs-12">
            <a href="#tinh-nang" role="tab" id="tinhnang-tab" data-toggle="tab" aria-controls="tinhnang" aria-expanded="false">Các tính năng</a>
        </li> 
        <li role="presentation" class="btn btn-raised btn-dangtin col-xs-12">
            <a href="#doi-tac" role="tab" id="doitac-tab" data-toggle="tab" aria-controls="doitac" aria-expanded="false">Đối tác</a>
        </li>
        <li role="presentation" class="btn btn-raised btn-dangtin col-xs-12">
            <a href="#cap-kho" role="tab" id="capkho-tab" data-toggle="tab" aria-controls="capkho" aria-expanded="false">Đối tác</a>
        </li>
        <li role="presentation" class="btn btn-raised btn-dangtin col-xs-12">
            <a href="#dich-vu" role="tab" id="dichvu-tab" data-toggle="tab" aria-controls="dichvu" aria-expanded="false">Đối tác</a>
        </li> -->
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="#gioithieu" id="gioithieu-tab" role="tab" data-toggle="tab" aria-controls="gioithieu" aria-expanded="true">Giới thiệu</a>
        </li>
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="#tinhnang" role="tab" id="tinhnang-tab" data-toggle="tab" aria-controls="tinhnang" aria-expanded="false">Tính năng </a>
        </li>
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="#doitac" role="tab" id="doitac-tab" data-toggle="tab" aria-controls="doitac" aria-expanded="false">Đối tác</a>
        </li>
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="#capkho" role="tab" id="capkho-tab" data-toggle="tab" aria-controls="capkho" aria-expanded="false">Cấp kho</a>
        </li>
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="#dichvu" role="tab" id="dichvu-tab" data-toggle="tab" aria-controls="dichvu" aria-expanded="false">Dịch vụ</a>
        </li>
        <li role="presentation">
            <a class="btn btn-raised btn-dangtin col-xs-12" href="{{ url('/register') }}">Đăng ký</a>
        </li>
    </ul>
</header>


@section('add-script')


@endsection