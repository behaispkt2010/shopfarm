<?php namespace App\Http\Middleware;

use App\Permission;
use App\WareHouse;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class AuthorizeMiddleware {

	public function __construct(Guard $auth, Permission $permission)
	{
		$this->auth = $auth;
		$this->permission = $permission;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		$user = $this->auth->user();


		$permissions = $this->permission->all();

		$uri = $request->route()->uri();
		$user_id = Auth::user()->id;
		$check = WareHouse::checkUserTest($user_id);

		foreach( $check as $itemCheck){
			$user_test = $itemCheck->user_test;
			$date_end_test = $itemCheck->date_end_test;
		}
		//dd($user_test);
		//dd($date_end_test);
		$time_now = date('Y-m-d H:i:s');
		if (($user_test == 2) && ($date_end_test < $time_now )){
			abort(401);
		}
		foreach($permissions as $permission)
		{

			if( ! $user->can($permission->name) && $permission->route == $uri)
			{
				abort(403);
			}
		}
		return $next($request);
	}

}
