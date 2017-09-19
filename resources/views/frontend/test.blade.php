<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cộng đồng kết nối nhu cầu nông sản</title>
    <meta name="description" content="Các chủ đề, bài viết hướng dẫn sử dụng hệ thống dành cho người mới bắt đầu." />
    <meta name="author" content="Nông sản tự nhiên">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   
    <link rel="stylesheet" href="{{ asset('frontend/css/jstree/style.min.css')}}" />

    <script src="{{ asset('plugin/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jstree/jstree.min.js')}}"></script>
    <script type="text/javascript">
        $(function () {
            var jsondata;
            $.get('{{ url("/") }}/dataJsTree', function(data, status){ 
                jsondata = data;
                createJSTree(jsondata);
            });
            $('#SimpleJSTree').on("changed.jstree", function (e, data) {
                var href = data.node.a_attr.href;
                document.location.href = href;
            });
            /*$("#SimpleJSTree").jstree().bind("select_node.jstree", function (e, data) {
                var href = data.node.a_attr.href;
                var parentId = data.node.a_attr.parent_id;
                if(href == '#')
                return '';
                window.open(href);
            });*/
          });
        function createJSTree(jsondata) {            
            $('#SimpleJSTree').jstree({
                'core': {
                  // 'data' : jsondata
                  'data' : {
                    "url" : "/dataJsTree",
                    "dataType" : "json"
                  }
                },
                "search": {
                    "case_insensitive": true,
                    "show_only_matches" : true
                },
                plugins: ["search"]
            }).bind("select_node.jstree", function (e, data) {
                   var href = data.node.a_attr.href;
                 if(href == '#')
                 return '';
                   document.location.href = href;
            });
        }
        /*$('#search').keyup(function(){
            $('#SimpleJSTree').jstree('search', $(this).val());
        });*/
    </script>
</head>
<body>
    <!-- <div class="input-group">
        <input type="text" class="form-control" placeholder="Search node .." id="search">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button" id="btn-search">Go!</button>
        </span>
    </div> -->
    <div id="SimpleJSTree"></div>
    
</body>
</html>
