<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsCompany extends Model
{
    protected $table = 'news_company';
    protected $fillable = ['title','slug','category', 'content', 'title_seo','description','image','author_id','status'];
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
}
