<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    const CREATED_AT = 'create_date';

    const UPDATED_AT = 'update_date';

    public function getIdAttribute():int
    {
        return $this[$this->primaryKey];
    }
}
