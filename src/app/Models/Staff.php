<?php

namespace App\Models;

class Staff extends BaseAuthModel
{
    const AUTHORITY_NAME = [
        0 => '一般',
        1 => '管理者',
    ];
    protected $table = 'staffs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'authority',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 権限名
     *
     * @return string
     */
    public function getAuthorityNameAttribute()
    {
        return self::AUTHORITY_NAME[$this->authority];
    }
}
