@extends('layouts.frontend')
@section('title', 'Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')
@section('description','Bạn gặp khó khăn gì, hãy để chúng tôi giúp đỡ nhé')

@section('content')
    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
    <div class="page_wrapper">
        <div class="container">
            <ul class="breadcrumbs">
                <li><a href="/">Trang chủ</a></li>
                <li>Trợ giúp</li>
            </ul>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12 help_menu" style="color: #000">
                    <div id="SimpleJSTree"></div>
                </div>
                <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12" style="border-left: 1px solid #eee;">
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
@section('add-script')
    <script src="{{ asset('plugin/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jstree/jstree.min.js')}}"></script>
    <script type="text/javascript">
        var baseURL="{!!url('/')!!}";
    </script>
    <script type="text/javascript">
        $(function () {
            $('#SimpleJSTree').jstree({
                'core' : {
                  'data' : 
                  {
                    "url" : baseURL+"/dataJsTree", 
                    "dataType" : "json"
                  }
                },
                "state":{"events":"select_node.jstree open_node.jstree close_node.jstree"},
                "types" : {
                    "max_depth" : -2,
                    "max_children" : -2,
                    "valid_children" : ["drive"],
                    'types': {
                        "folder": {
                            "icon": "jstree-icon jstree-folder"
                        },
                        "file": {
                            "icon": "jstree-icon jstree-file"
                        }
                    },
                },
                "plugins" : [ "state", "types"]

            }).on("changed.jstree", function (e, data) {
                var idselect = data.selected;
                var href = data.node.a_attr.href;
            }).set_state(idselect, function (e, data) {
                
                document.location.href = href;
            });
            
            // $('#SimpleJSTree').jstree("set_state", true);
        });
        
    </script>
@endsection
