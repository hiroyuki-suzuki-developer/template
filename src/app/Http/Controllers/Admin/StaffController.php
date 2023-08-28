<?php

namespace App\Http\Controllers\Admin;

use App\Repositories\StaffRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\Staff\StoreRequest;
use App\Http\Requests\Admin\Staff\UpdateRequest;

class StaffController extends Controller
{
    /**
     * constract
     *
     * @param StaffRepository $staffRepository
     * @return void
     */
    public function __construct(StaffRepository $staffRepository)
    {
        $this->staffRepository = $staffRepository;
    }

    /**
     * 一覧取得
     * 
     * @param Request $request
     */
    public function index(Request $request)
    {
        $staffs = $this->staffRepository->search();
        return view('admin.staff.index',[
            'staffs' => $staffs
        ]);
    }

    /**
     * 登録
     * 
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * 登録
     * 
     * @param StoreRequest $request
     */
    public function store(StoreRequest $request)
    {
        $staff = $this->staffRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'authority' => $request->authority,
            'password' => password_hash($request->password, PASSWORD_DEFAULT),
        ]);
        return redirect()->route('admin.staff.show',[
            'staff_id' => $staff->id
        ]);
    }

    /**
     * 詳細
     * 
     * @param int $id
     */
    public function show(int $id)
    {
        $staff = $this->staffRepository->findOrFail($id);
        return view('admin.staff.detail',[
            'staff' => $staff
        ]);
    }

    /**
     * 更新
     * 
     * @param int $id
     * @param UpdateRequest $request
     */
    public function update(int $id, UpdateRequest $request)
    {
        $param = [
            'name' => $request->name,
            'email' => $request->email,
            'authority' => $request->authority,
        ];
        if (strlen($request->password) > 0) {
            $param['password'] = password_hash($request->password, PASSWORD_DEFAULT);
        }
        $staff = $this->staffRepository->update($id, $param);
        return redirect()->route('admin.staff.show',[
            'staff_id' => $id
        ]);
    }
}
