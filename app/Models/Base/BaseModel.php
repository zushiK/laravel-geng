<?php

namespace App\Models\Base;

use Illuminate\Database\Eloquent\Model;
use App\Traits\SoftDeleteFlagTrait;

class BaseModel extends Model
{
    use SoftDeleteFlagTrait;

    public function __construct(array $attributes = array())
    {
        parent::__construct($attributes);


        // primaryKeyを各モデルで設定して$this->idで取得できるように
        // $this->id = $this->setId();
    }

    const CREATED_AT = 'create_date';

    const UPDATED_AT = 'update_date';

    const DELETED_AT = 'del_flg';

    // private function setId()
    // {
    //     return $this[$this->primaryKey];
    // }
}
