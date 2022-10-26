<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthorObserver
{
    /**
     * ユーザーの"created"イベントの処理
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function created(Model $model)
    {
        $model->create_user = Auth::user()->id;
    }

    /**
     * ユーザーの"updated"イベントの処理
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function updated(Model $model)
    {
        $model->update_user = Auth::user()->id;
    }

    /**
     * ユーザーの"deleted"イベントの処理
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    public function deleted(Model $model)
    {
        $model->delete_user = Auth::user()->id;
    }
}
