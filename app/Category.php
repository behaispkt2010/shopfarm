<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Category
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $parent
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereParent($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Category extends Model
{
    protected $fillable = ['name', 'slug','description','parent'];
    public static function getNameCateById($id){
        $name = "mặc định";
        $query=  Category::find($id);
        if(!empty($query)){
            $name = $query->name;
        }
        return $name;
    }
    public static function getAllCategory(){
        return Category::get();
    }
    public static function getSlugCategory($id){
        $slug = "mac-dinh";
        $query=  Category::find($id);
        if(!empty($query)){
            $slug = $query->slug;
        }
        return $slug;
    }
    static public function CateMulti($data, $parent_id = 0, $str="&nbsp&nbsp&nbsp&nbsp",$select = 0){

        foreach ($data as $val) {
            $id = $val->id;
            $name = $val->name;
            if ($val['parent'] == $parent_id) {
                if ($select != 0 && $id == $select) {
                    echo '<option value="' . $id . '" selected>' . $str . " " . $name . '</option>';
                } else {
                    echo '<option value="' . $id . '">' . $str . " " . $name . '</option>';
                }
                Category::CateMulti($data, $id, $str . "&nbsp&nbsp&nbsp&nbsp", $select);
            }
        }

    }
}
