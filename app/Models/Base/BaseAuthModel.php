<?php

namespace App\Models\Base;

use App\Traits\SoftDeleteFlagTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;

class BaseAuthModel extends Authenticatable
{
    use SoftDeleteFlagTrait;

    const CREATED_AT = 'create_date';
    
    const UPDATED_AT = 'update_date';
    
    const DELETED_AT = 'del_flg';

    public function getIdAttribute()
    {
        return $this[$this->primaryKey];
    }
}
