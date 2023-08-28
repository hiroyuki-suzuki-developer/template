<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\NotificationRepository;
use App\Http\Requests\Admin\Notification\StoreRequest;
use App\Http\Requests\Admin\Notification\UpdateRequest;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * constract
     *
     * @param NotificationRepository $notificationRepository
     * @return void
     */
    public function __construct(NotificationRepository $notificationRepository)
    {
        $this->notificationRepository = $notificationRepository;
    }

    /**
     * 一覧取得
     * 
     * @param Request $request
     */
    public function index(Request $request)
    {
        $notifications = $this->notificationRepository->search();
        return view('admin.notification.index',[
            'notifications' => $notifications
        ]);
    }

    /**
     * 登録
     * 
     */
    public function create()
    {
        return view('admin.notification.create');
    }

    /**
     * 登録
     * 
     * @param StoreRequest $request
     */
    public function store(StoreRequest $request)
    {
        $notification = $this->notificationRepository->create([
            'title' => $request->title,
            'description' => $request->description,
            'is_open' => $request->is_open,
            'type' => $request->type,
            'start_datetime' => $request->start_datetime,
            'end_datetime' => $request->end_datetime,
        ]);
        return redirect()->route('admin.notifications.show',[
            'notification_id' => $notification->id
        ]);
    }

    /**
     * 詳細
     * 
     * @param int $id
     */
    public function show(int $id)
    {
        $notification = $this->notificationRepository->findOrFail($id);
        return view('admin.notification.detail',[
            'notification' => $notification
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
            'title' => $request->title,
            'description' => $request->description,
            'is_open' => $request->is_open,
            'type' => $request->type,
            'start_datetime' => $request->start_date . ' 00:00:00',
            'end_datetime' => $request->end_date . ' 00:00:00',
        ];
        $notification = $this->notificationRepository->update($id, $param);
        return redirect()->route('admin.notifications.show',[
            'notification_id' => $id
        ]);
    }
}
