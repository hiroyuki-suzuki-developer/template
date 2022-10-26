<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Observable;

class BaseModel extends Model
{
    use HasFactory, SoftDeletes, Observable;

    const CREATED_AT = 'create_datetime';
    const UPDATED_AT = 'update_datetime';
    const DELETED_AT = 'delete_datetime';
}
