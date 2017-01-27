<!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

<section class="section_offset">

    <h3>Danh mục</h3>

    <ul class="theme_menu">
        @foreach(\App\CategoryProduct::getAllCategoryProduct() as $item)
            <li><a href="{{url('/category-product')}}/{{$item->slug}}">{{$item->name}}</a></li>
            @endforeach
            <li><a href="{{url('/category-product')}}/khac">Khác</a></li>

    </ul>

</section><!--/ .section_offset -->

<!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->
