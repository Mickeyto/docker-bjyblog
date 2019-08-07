<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialiteUser;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    /**
     * 登录页面
     *
     * @return mixed
     */
    public function index(Request $request, SocialiteUser $socialiteUserModel)
    {
        // 获取是否有第三方用户被设置为管理员
        $count = $socialiteUserModel->where('is_admin', 1)->count();
        // 如果有第三方账号管理员；则通过第三方账号登录
        if ($count) {
            die('请通过第三方账号登录');
        } else {
            return view('admin.login.index');
        }
    }

    /**
     * 退出登录
     *
     * @return mixed
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        Auth::guard('socialite')->logout();

        return redirect('admin/login/index');
    }
}
