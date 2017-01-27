<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

<section class="section_offset">

    <h3>Danh mục</h3>

    <ul class="theme_menu">
        @foreach(\App\Category::getAllCategory() as $item)
        <li><a href="{{url('/category-blog')}}/{{$item->slug}}">{{$item->name}}</a></li>
        @endforeach
            <li><a href="{{url('/category-blog')}}/khac">Khác</a></li>



    </ul>

</section><!--/ .section_offset -->

<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->
