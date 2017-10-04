<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $fillable = ['label', 'link','parent','sort','class'];
    static public function get_numberChil($id){
       return Menu::where('parent',$id)->count();
    }
    static public  function get_arrayChil($id){
        return Menu::where('parent',$id)->get();
    }
    static public function get_menu($data,$parent=0)
    {
        foreach($data as $key=>$itemMenu1) {
            if ($parent == $itemMenu1->parent) {
                $numchil = Menu::get_numberChil($itemMenu1->id);
                if ($numchil == 0) {
                    echo '<li class="dd-item" data-label="' . $itemMenu1->label . '" data-url="'.$itemMenu1->link .'" data-class="'.$itemMenu1->class. '">
                                        <div class="dd-handle"> ' . $itemMenu1->label . '  </div>
                                        <i class="fa fa-times delete-menu"></i>
                                    </li>';
                } else {
//                    $arraySub = Menu::get_arrayChil($itemMenu1->id);
                    echo ' <li class="dd-item" data-label="' . $itemMenu1->label . ' " data-url="'.$itemMenu1->link.'" data-class="'.$itemMenu1->class. '">
                                        <div class="dd-handle"> ' . $itemMenu1->label . ' </div>
                                        <i class="fa fa-times delete-menu"></i>
                                    ';
                    echo ' <ol class="dd-list">';
                        $parent1 = $itemMenu1->id;
                        Menu::get_menu($data, $parent1);
                    echo '</ol></li>';

                }

            }
        }
    }

    static public function get_menu_frontend($parent=0)
    {
        $data = Menu::get();
        foreach($data as $key=>$itemMenu1) {
            if ($parent == $itemMenu1->parent) {
                $numchil = Menu::get_numberChil($itemMenu1->id);
                if ($numchil == 0) {
                    echo ' <li class="theme_menu '.$itemMenu1->class.'"><a href="'.url('/').$itemMenu1->link.'" style="height: 41px; ">'.$itemMenu1->label.'</a></li>';
                } else 
                {
                    echo '   <li class="has_submenu">
                                            <a href="'.$itemMenu1->link.'" style="height: 41px;">'.$itemMenu1->label.'</a>
                                           ';
                    echo ' <ul class="theme_menu submenu">';
                    $parent1 = $itemMenu1->id;
                    Menu::get_menu_frontend($parent1);
                    echo '</ul></li>';

                }

            }
        }
    }
    static public function get_menu_frontend_full ($parent=0)
    {
        $data = Menu::get();
        foreach($data as $key=>$itemMenu1) {
            if ($parent == $itemMenu1->parent) {
                $numchil = Menu::get_numberChil($itemMenu1->id);
                if ($numchil == 0) {
                    echo '<li style="float: left;"><a href="'.url('/').$itemMenu1->link.'" >'.$itemMenu1->label.'</a></li>';
                } else {
                    /*echo '<li class="has_megamenu animated_item" style="width: auto;float: left;">
                            <a href="#">Vitamins &amp; Supplements (202)</a>
                            <div class="col-md-9 col-sm-9 mega_menu type_4 clearfix">
                                <div class="mega_menu_item">
                                    <h6><b>By Condition</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aches &amp; Pains</a></li>
                                        <li><a href="#">Acne Solutions</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Multivitamins</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">50+ Multivitamins</a></li>
                                        <li><a href="#">Childrens Multivitamins</a></li>
                                        <li><a href="#">Mens Multivitamins</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Herbs</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                        <li><a href="#">Astragalus</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Herbs</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Herbs</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                        <li><a href="#">Astragalus</a></li>
                                        <li><a href="#">Astragalus</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Herbs</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                        <li><a href="#">Astragalus</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                        <li><a href="#" class="all">View All</a></li>
                                    </ul>
                                </div>
                                <div class="mega_menu_item">
                                    <h6><b>Herbs</b></h6>
                                    <ul class="list_of_links">
                                        <li><a href="#">Aloe Vera</a></li>
                                        <li><a href="#">Ashwagandha</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>';*/



                    echo '<li class="has_megamenu animated_item" style="width: auto;float: left;">
                            <a href="#">Vitamins &amp; Supplements (202)</a>
                            <div class="col-md-9 col-sm-9 mega_menu type_4 clearfix">';

                               CategoryProduct::get_cate_frontend();
                                
                    echo '        </div>
                        </li>';
                }
            }
        }
    }



}
