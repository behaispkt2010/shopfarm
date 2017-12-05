@extends('layouts.blogs')
@section('title', 'liên hệ')
@section('description','liên hệ')

@section('url_seo', url('/').$_SERVER['REQUEST_URI'] )
@section('type_seo','article')
@section('title_seo', 'Liên hệ' )
@section('description_seo', 'Giải đáp thắc mắc khách hàng - Phụng sự khách hàng là trách nhiệm của chúng tôi' )
@section('image_seo', url('/').'/frontend/images/nosago1.png' )

@section('add_style')
<link href="{{asset('frontend/css/blogs/homepage.css')}}" rel="stylesheet">
@endsection
@section('content')

<div class="col-md-12 col-xs-12 col-sm-12 wrap_homeblog">
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 blog_left">
            <div class="box_blog">
                <div class="title_box_homeblog">
                    <p class="title_box uppercase"><b>Tin tức</b></p>
                    <p class="read_more_blog"><a href="#" title="">Đọc thêm <i class="material-icons">fast_forward</i></a></p>
                </div>
                <div class="clearfix"></div>
                <div class="list_news">
                    <div id="listNews">
                        <ul>
                            @foreach($news as $itemNews)
                            <li>
                                <span class="time">{{ $itemNews->created_at->format('H:i') }}</span>
                                <span class="split"></span>
                                <a href="#" class="content_title" title="">{!! $itemNews->title !!}</a>
                                <span class="count_views"><i class="material-icons icon_views">visibility</i> 1 </span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 blog_right">
            <div class="box_blog_small">
                <div class="box_nongdan">
                    <div class="title_box_homeblog">
                        <p class="title_box uppercase"><b>Nông dân</b></p>
                        <p class="read_more_blog"><a href="#" title="">Đọc thêm <i class="material-icons">fast_forward</i></a></p>
                    </div>
                </div>
               
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 blog_right">
            <div class="box_blog_small">
                <div class="clearfix"></div>
                <div class="box_tailieu">
                    <div class="title_box_homeblog">
                        <p class="title_box uppercase"><b>Tài liệu</b></p>
                        <p class="read_more_blog"><a href="#" title="">Đọc thêm <i class="material-icons">fast_forward</i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="box_blog">
                <div class="clearfix"></div>
                <div class="box_congnghe">
                    <div class="title_box_homeblog">
                        <p class="title_box uppercase"><b>Công nghệ</b></p>
                        <p class="read_more_blog"><a href="#" title="">Đọc thêm <i class="material-icons">fast_forward</i></a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection

@section('add_script')
<script src="{{asset('frontend/js/blogs/jquery.slimscroll.min.js')}}"></script>
<script type="text/javascript">
    $('#listNews').slimScroll({
        height: '280px'
    });
</script>
@endsection