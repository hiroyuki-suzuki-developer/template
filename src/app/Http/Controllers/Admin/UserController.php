<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * constract
     *
     * @param UserRepository $userRepository
     * @return void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 一覧取得
     * 
     * @param Request $request
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->search();
        return view('admin.user.index',[
            'users' => $users
        ]);
    }

    /**
     * 詳細
     * 
     * @param int $id
     */
    public function show(int $id)
    {
        $user = $this->userRepository->findOrFail($id);
        return view('admin.user.detail',[
            'user' => $user
        ]);
    }

    /**
     * 更新
     * 
     * @param int $id
     * @param Request $request
     */
    public function update(int $id, Request $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
        ];
        if (strlen($request->password) > 0) {
            $param['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        }
        $user = $this->userRepository->update($id, $param);
        return redirect()->route('admin.user.show',[
            'user_id' => $id
        ]);
    }
}
