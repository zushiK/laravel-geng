<?php
namespace App\Repositories;

use App\Models\Shikaku;
use Illuminate\Database\Eloquent\Collection;

class ShikakuRepository
{
    /**
     * @var Shikaku
     */
    private $shikaku;

    public function __construct(Shikaku $shikaku)
    {
        $this->shikaku = $shikaku;
    }

    public function findById(int $id):Shikaku
    {
        return $this->shikaku->find($id);
    }

    public function getAll():Collection
    {
        return $this->shikaku->get();
    }

    public function create(array $data):void
    {
        $this->shikaku->create($data);
    }

    public function update(int $id, array $data):void
    {
        $shikaku = $this->findById($id);
        $shikaku->update($data);
    }

    public function delete(int $id):void
    {
        $shikaku = $this->findById($id);
        $shikaku->delete();
    }
}
