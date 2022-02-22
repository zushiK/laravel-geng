<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class BaseModel extends Model
{
    use HasFactory;

    const CREATED_AT = 'create_date';
    const UPDATED_AT = 'update_date';
}
