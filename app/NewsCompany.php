<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCompany extends Model
{
    protected $table = 'news_company';
    protected $fillable = ['title','slug','category', 'content','price_to','price_from','time_delivery','soluong','type_pay','require', 'title_seo','description','image','author_id','status','view_count'];
	public static function getUserName($userID) {
    	$user = User::find($userID);
    	return $user->name;
    }

    public static function getNewsCompany($company_id,$limit){
        $newscompany = NewsCompany::leftjoin('company','company.user_id','news_company.author_id')
            ->leftjoin('users','users.id','company.user_id')
            ->where('company.id',$company_id)
            ->selectRaw('company.*')
            ->selectRaw('company.id as idCompany,company.name as nameCompany')
            ->orderBy('news_company.id',"DESC")->take($limit)->get();
        return $newscompany;

    }
    public static function getAllNewsCompanyRelated($category_id, $idNews, $limit) {

        $newscompany = NewsCompany::select('users.*','company.*','news_company.*','company.name as namecompany','company.id as companyID','category_products.name as categoryname')
            ->leftjoin('users','users.id','=','news_company.author_id')
            ->leftjoin('company','company.user_id','=','news_company.author_id')
            ->leftjoin('category_products','news_company.category','=','category_products.id')
            ->where('news_company.category', $category_id)
            ->whereNotIn('news_company.id', [$idNews])
            ->orderBy('news_company.id',"DESC")
            ->take($limit)
            ->get();
        return $newscompany;
    }
}
