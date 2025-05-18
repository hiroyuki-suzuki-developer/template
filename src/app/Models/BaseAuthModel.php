<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use Laravel\Cashier\Billable;
use App\Models\Traits\Observable;
use Laravel\Sanctum\HasApiTokens;

class BaseAuthModel extends Authenticatable
{
    // use HasFactory, SoftDeletes, Observable, Billable;
    use HasFactory, Notifiable, SoftDeletes, Observable, HasApiTokens;

    const CREATED_AT = 'create_datetime';
    const UPDATED_AT = 'update_datetime';
    const DELETED_AT = 'delete_datetime';
}
