<?php namespace App\Http\Middleware;

use App\Notification;
use App\Permission;
use App\Util;
use App\WareHouse;
use Closure;
use DateTime;
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
			$user_id_kho = $itemCheck->user_id;

			$level = $itemCheck->level;
			$time_upgrade_level = $itemCheck->time_upgrade_level;
			$time_upgrade_bonus = $itemCheck->time_upgrade_bonus;
			$created_upgrade_level = $itemCheck->created_upgrade_level;

			$confirm_kho = $itemCheck->confirm_kho;
			$time_confirm_kho = $itemCheck->time_confirm_kho;
			$time_confirm_kho_bonus = $itemCheck->time_confirm_kho_bonus;
			$created_confirm_kho = $itemCheck->created_confirm_kho;

			$quangcao = $itemCheck->quangcao;
			$time_quangcao = $itemCheck->time_quangcao;
			$time_quangcao_bonus = $itemCheck->time_quangcao_bonus;
			$created_time_quangcao = $itemCheck->created_time_quangcao;
		}
		$CodeChuKho = Util::UserCode($user_id_kho);
		$time_now = date("Y-m-d H:i:s");
		$dteStart = new DateTime($time_now);
		$dteEnd   = new DateTime($date_end_test);
		$dteDiff  = $dteStart->diff($dteEnd);
		$dateend = $dteDiff->format('%R%a');
// check user_test và add Notification
		if (($user_test == 2) && ($dateend < 3)){
			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Tài khoản sắp hết thời gian dùng thử";
			$data['content'] = "Chủ kho còn 03 ngày để sử dụng dịch vụ. Hãy nâng cấp để tiếp tục sử dụng";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = $user_id;
			Notification::firstOrCreate($data);

			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Tài khoản sắp hết thời gian dùng thử";
			$data['content'] = "Chủ kho " .$CodeChuKho. "còn 03 ngày để sử dụng dịch vụ. Hãy liên hệ và tư vấn Chủ kho";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = Util::$roleviewAdmin;
			Notification::firstOrCreate($data);
		}
		if (($user_test == 2) && ($date_end_test < $time_now )){
			abort(401);
		}
// check Xác nhận kho và add Notification 	
		$total_time_confirm_kho = $time_confirm_kho + $time_confirm_kho_bonus;  // đơn vị: tháng
		$created_confirm_khoTmp = new DateTime($created_confirm_kho);
		$timeEndConfirmTmp = date_add($created_confirm_khoTmp, date_interval_create_from_date_string($total_time_confirm_kho.' months'));
		$dateDiffConfirm  = $dteStart->diff($timeEndConfirmTmp);
		$countTimeConfirm = $dateDiffConfirm->format('%R%a');
		if (($confirm_kho == 1) && ($countTimeConfirm < 3)){
			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Sắp hết thời gian Xác nhận kho";
			$data['content'] = "Chủ kho còn 03 ngày để sử dụng dịch vụ. Hãy nâng cấp để tiếp tục sử dụng";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = $user_id;
			Notification::firstOrCreate($data);

			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Sắp hết thời gian Xác nhận kho";
			$data['content'] = "Chủ kho " .$CodeChuKho. "còn 03 ngày để sử dụng dịch vụ. Hãy liên hệ và tư vấn Chủ kho";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = Util::$roleviewAdmin;
			Notification::firstOrCreate($data);
		}
		if (($confirm_kho == 1) && ($countTimeConfirm < 0 )){
			abort(401);
		}
// check level và add Notification 	
		$total_time_level_kho = $time_upgrade_level + $time_upgrade_bonus;  // đơn vị: tháng
		$created_upgrade_levelTmp = new DateTime($created_upgrade_level);
		$timeEndlevelTmp = date_add($created_upgrade_levelTmp, date_interval_create_from_date_string($total_time_level_kho.' months'));
		$dateDifflevel  = $dteStart->diff($timeEndlevelTmp);
		$countTimelevel = $dateDifflevel->format('%R%a');

		if (($level != 0) && ($countTimeConfirm < 3)){
			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Tài khoản sắp hết thời gian sử dụng với cấp kho hiện tại";
			$data['content'] = "Chủ kho còn 03 ngày để sử dụng dịch vụ. Hãy nâng cấp để tiếp tục sử dụng";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = $user_id;
			Notification::firstOrCreate($data);

			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Tài khoản sắp hết thời gian sử dụng với cấp kho hiện tại";
			$data['content'] = "Chủ kho " .$CodeChuKho. "còn 03 ngày để sử dụng dịch vụ. Hãy liên hệ và tư vấn Chủ kho";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = Util::$roleviewAdmin;
			Notification::firstOrCreate($data);
		}
		if (($level != 0) && ($countTimelevel < 0 )){
			abort(401);
		}
// check quangcao và add Notification 	
		$total_time_quangcao_kho = $time_quangcao + $time_quangcao_bonus;  // đơn vị: tháng
		$created_upgrade_quangcaoTmp = new DateTime($created_time_quangcao);
		$timeEndquangcaoTmp = date_add($created_upgrade_quangcaoTmp, date_interval_create_from_date_string($total_time_quangcao_kho.' months'));
		$dateDiffquangcao  = $dteStart->diff($timeEndquangcaoTmp);
		$countTimequangcao = $dateDiffquangcao->format('%R%a');
		if (($quangcao == 1) && ($countTimeConfirm < 3)){
			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Sắp hết thời gian Quảng Cáo";
			$data['content'] = "Chủ kho còn 03 ngày để sử dụng dịch vụ. Hãy nâng cấp để tiếp tục sử dụng";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = $user_id;
			Notification::firstOrCreate($data);

			$data['keyname'] = Util::$userexpired;
			$data['title'] = "Sắp hết thời gian Quảng Cáo";
			$data['content'] = "Chủ kho " .$CodeChuKho. "còn 03 ngày để sử dụng dịch vụ. Hãy liên hệ và tư vấn Chủ kho";
			$data['author_id'] = Auth::user()->id;
			$data['roleview'] = Util::$roleviewAdmin;
			Notification::firstOrCreate($data);
		}
		if (($quangcao == 1) && ($countTimequangcao < 0 )){
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
