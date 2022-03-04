<?php
namespace App\Traits;

use App\Scopes\SoftDeleteFlagScope;
use Illuminate\Database\Eloquent\SoftDeletes;

trait SoftDeleteFlagTrait
{
    use SoftDeletes;

    public static function bootSoftDeleteFlagTrait()
    {
        static::addGlobalScope(new SoftDeleteFlagScope());
    }

    public static function bootSoftDeletes()
    {
        // 既存のSoftDeleteは使わせない
    }

    public function initializeSoftDeletes()
    {
        if (! isset($this->casts[$this->getDeletedAtColumn()])) {
            $this->casts[$this->getDeletedAtColumn()] = 'boolean';
        }
    }

    protected function runSoftDelete()
    {
        $query = $this->setKeysForSaveQuery($this->newModelQuery());

        $time = $this->freshTimestamp();

        $columns = [$this->getDeletedAtColumn() => true];

        $this->{$this->getDeletedAtColumn()} = true;

        if (!$this->getDeletedAtColumn()) {
            $this->{$this->getUpdatedAtColumn()} = $time;

            $columns[$this->getUpdatedAtColumn()] = $this->fromDateTime($time);
        }

        $query->update($columns);

        $this->syncOriginalAttributes(array_keys($columns));

        $this->fireModelEvent('trashed', false);
    }

    public function restore()
    {
        if ($this->fireModelEvent('restoring') === false) {
            return false;
        }

        $this->{$this->getDeletedAtColumn()} = false;

        $this->exists = true;

        $result = $this->save();

        $this->fireModelEvent('restored', false);

        return $result;
    }

    /**
     * Determine if the model instance has been soft-deleted.
     *
     * @return bool
     */
    public function trashed()
    {
        return $this->{$this->getDeletedAtColumn()};
    }
}
