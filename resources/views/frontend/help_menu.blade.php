@extends('layouts.page')
@section('title', 'Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')
@section('description','Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')
@section('add_style')
<link href="{{asset('frontend/css/help_menu.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
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
                        <h1>Title bài viết</h1>
                        <article class="entry single">
                            <div class="entry_meta">
                                <div class="alignleft">
                                    <span><i class="icon-calendar"></i> 2017-09-22</span>
                                </div>
                            </div>
                            <div class="content">
                                Công ty CP Phân Bón Miền Nam ký kết hợp đồng cung cấp chế phẩm sinh học BiOWiSH CROP LIQUID ORGANIC
                                Công ty CP Phân Bón Miền Nam và Công ty CP Công Nghệ Sinh Học BiOWiSH Việt Nam vừa tổ chức lễ ký kết hợp đồng cung cấp chế phẩm sinh học BiOWiSH CROP LIQUID ORGANIC phục vụ sản xuất phân bón.
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
