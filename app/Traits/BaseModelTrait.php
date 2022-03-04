<?php
namespace App\Traits;

trait BaseModelTrait
{
    const CREATED_AT = 'create_date';

    const UPDATED_AT = 'update_date';

    const DELETED_AT = 'del_flg';

    public function getIdAttribute():int
    {
        return $this[$this->primaryKey];
    }
}
