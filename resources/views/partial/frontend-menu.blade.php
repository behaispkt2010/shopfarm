

    <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->

    <header id="header" class="type_6">

        <!-- - - - - - - - - - - - - - Top part - - - - - - - - - - - - - - - - -->

        <div class="top_part">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-md-7 col-sm-8">


                        <span>Liên hệ với chúng tôi:</span> <b>+1888 234 5678</b>



                        <!-- - - - - - - - - - - - - - Login - - - - - - - - - - - - - - - - -->



                        <!-- - - - - - - - - - - - - - End login - - - - - - - - - - - - - - - - -->

                    </div> <!--/ [col]-->

                    <div class="col-lg-6 col-md-5 col-sm-4 text-right" style="text-align: right;">

                        <p> <a href="#" data-modal-url="modals/login.html">Đăng nhập</a> or <a href="#">Đăng ký</a></p>

                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container -->

        </div><!--/ .top_part -->

        <!-- - - - - - - - - - - - - - End of top part - - - - - - - - - - - - - - - - -->

        <hr>

        <!-- - - - - - - - - - - - - - Bottom part - - - - - - - - - - - - - - - - -->

        <div class="bottom_part">

            <div class="container">

                <div class="row">

                    <div class="main_header_row">

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Logo - - - - - - - - - - - - - - - - -->

                            <a href="../html-fronend/index.html" class="logo">

                                <img src="../../../frontend/images/logo.png" alt="">

                            </a>

                            <!-- - - - - - - - - - - - - - End of logo - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-3">

                            <!-- - - - - - - - - - - - - - Call to action - - - - - - - - - - - - - - - - -->



                            <!-- - - - - - - - - - - - - - End call to action - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                        <div class="col-sm-6">

                            <!-- - - - - - - - - - - - - - Search form - - - - - - - - - - - - - - - - -->

                            <form class="clearfix search">

                                <input type="text"  tabindex="1" placeholder="Search..." name="search" class="alignleft">

                                <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                                <div class="search_category alignleft">

                                    <div class="open_categories">Danh mục</div>

                                    <ul class="categories_list dropdown">

                                        @foreach(\App\CategoryProduct::getCate() as $itemCate)
                                        <li class="animated_item"><a href="#">{{$itemCate->name}}</a></li>
                                        @endforeach

                                    </ul>

                                </div><!--/ .search_category.alignleft-->

                                <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                                <button class="button_blue def_icon_btn alignleft"></button>

                            </form><!--/ #search-->

                            <!-- - - - - - - - - - - - - - End search form - - - - - - - - - - - - - - - - -->

                        </div><!--/ [col]-->

                    </div><!--/ .main_header_row-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .bottom_part -->

        <!-- - - - - - - - - - - - - - End of bottom part - - - - - - - - - - - - - - - - -->

        <!-- - - - - - - - - - - - - - Main navigation wrapper - - - - - - - - - - - - - - - - -->

        <div id="main_navigation_wrap">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">

                        <!-- - - - - - - - - - - - - - Sticky container - - - - - - - - - - - - - - - - -->

                        <div class="sticky_inner type_2">



                            <!-- - - - - - - - - - - - - - Navigation item - - - - - - - - - - - - - - - - -->

                            <div class="nav_item">

                                <nav class="main_navigation">

                                    <ul>

                                    {{\App\Menu::get_menu_frontend()}}


                                    </ul>

                                </nav><!--/ .main_navigation-->

                            </div>

                            <!-- - - - - - - - - - - - - - End of navigation item - - - - - - - - - - - - - - - - -->




                        </div><!--/ .sticky_inner -->

                        <!-- - - - - - - - - - - - - - End of sticky container - - - - - - - - - - - - - - - - -->

                    </div><!--/ [col]-->

                </div><!--/ .row-->

            </div><!--/ .container-->

        </div><!--/ .main_navigation_wrap-->

        <!-- - - - - - - - - - - - - - End of main navigation wrapper - - - - - - - - - - - - - - - - -->

    </header>

    <!-- - - - - - - - - - - - - - End Header - - - - - - - - - - - - - - - - -->