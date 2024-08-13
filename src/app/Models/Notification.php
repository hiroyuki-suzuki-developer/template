<?php

namespace App\Models;

class Notification extends BaseModel
{
    protected $fillable = [
        'title',
        'description',
        'is_open',
        'type',
        'image_path',
        'start_datetime',
        'end_datetime',
    ];

    const OPEN_STATUS_NAME = [
        0 => '非公開',
        1 => '公開',
    ];

    const TYPE_NAME = [
        0 => '一般',
        1 => '会員',
    ];

    protected $dates = [
        'start_datetime',
        'end_datetime'
    ];

    /**
     * 公開の名称を取得する
     * @return string
     */
    public function getIsOpenNameAttribute()
    {
        return self::OPEN_STATUS_NAME[$this->is_open]??'';
    }

    /**
     * タイプの名称を取得する
     * @return string
     */
    public function getTypeNameAttribute()
    {
        return self::TYPE_NAME[$this->type];
    }
}
