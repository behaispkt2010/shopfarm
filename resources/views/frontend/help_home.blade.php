@extends('layouts.page')
@section('title', 'Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')
@section('description','Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')
@section('add_style')
<link href="{{asset('frontend/css/help_menu.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNavLandingpage">
      <div class="container">
        <div class="logo">
            <a href="{{url('/')}}">
                <img src="{{asset('frontend/images/nosago1.png')}}" class="img_logo_front">
            </a> 
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto menu_landingpage menu_help">
            <li class="nav-item">
              <a class="btn btn-raised btn-dangtin col-xs-12 btnHelpMenu" href="{{ url('/login') }}">Đăng nhập</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-raised btn-dangtin col-xs-12 btnHelpMenu" href="{{ url('/register') }}">Đăng ký</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="page_wrapper" style="width: 100%;">
        <div class="container body_help_menu">
            <ul class="breadcrumbs">
                <li><a href="{!!url('/')!!}">Trang chủ</a></li>
                <li>Trợ giúp</li>
            </ul>
            <div class="row">
                <div id="MenuJSTree" class=""></div>
                <div class="MenuContent">
                    <section class="section_offset">
                        <h1>Trang trợ giúp</h1>
                        <article class="entry single">
                            <div class="entry_meta">
                                <div class="alignleft">
                                    
                                </div>
                            </div>
                            <div class="content">
                                <h1>Chúng tôi có thể giúp gì cho bạn?</h1>
                                <p>Bạn có thể tìm thấy câu trả lời từ thanh menu bên trái này</p>
                                <br>
                                <hr>
                                <div class="question_other">
                                    <p><h3>Bạn vẫn chưa có câu trả lời?</h3></p>
                                    Đừng lo, bạn có thể gửi mail cho chúng tôi!
                                    <div class="row text-center">
                                        <div class="col-md-3">
                                            <a class="btn btn-raised btn-dangtin col-xs-12 btnHelpMenu" href="{{ url('/contact') }}">Liên hệ hỗ trợ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('add_script')
    <script src="{{ asset('plugin/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jstree/jstree.min.js')}}"></script>
    <script type="text/javascript">
        var baseURL="{!!url('/')!!}";
    </script>
    <script type="text/javascript">
        $(function () {
            $('#MenuJSTree').jstree({
                'core' : {
                  'data' : 
                  {
                    "url" : baseURL+"/dataJsTree", 
                    "dataType" : "json"
                  }
                },
                "state" : { "key" : "state_demo" },
                "plugins" : ["state"]
            }).on("changed.jstree", function (e, data) {
                var href = data.node.a_attr.href;
                document.location.href = href;
            });

        });
        
    </script>
@endsection
