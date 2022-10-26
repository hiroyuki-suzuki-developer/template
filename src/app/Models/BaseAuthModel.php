<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Observable;

class BaseAuthModel extends Authenticatable
{
    use HasFactory, SoftDeletes, Observable;

    const CREATED_AT = 'create_datetime';
    const UPDATED_AT = 'update_datetime';
    const DELETED_AT = 'delete_datetime';
}
