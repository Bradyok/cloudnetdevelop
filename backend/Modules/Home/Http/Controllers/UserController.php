<?php
namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Home\Http\Requests\UserRequest;
use Modules\Home\Services\UserService;

class UserController extends Controller{
	private $userService;

	public function __construct(UserService $userService){
		$this->userService = $userService;
	}

	//注册用户
	public function register(UserRequest $request){
		return $this->userService->register($request->all());
	}

	//申请成为开发者
	public function develop(UserRequest $request){
		return $this->userService->develop($request->user(),$request->all());
	}

}