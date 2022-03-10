<?php
namespace App\Repositories;

use App\Models\Zeiritsu;
use Illuminate\Database\Eloquent\Collection;

class ZeiritsuRepository
{
    /**
     * @var Zeiritsu
     */
    private $zeiritsu;

    public function __construct(Zeiritsu $zeiritsu)
    {
        $this->zeiritsu = $zeiritsu;
    }

    public function findById(int $id):Zeiritsu
    {
        return $this->zeiritsu->find($id);
    }

    public function getAll():Collection
    {
        return $this->zeiritsu->get();
    }

    public function create(array $data):void
    {
        $this->zeiritsu->create($data);
    }

    public function update(int $id, array $data):void
    {
        $zeiritsu = $this->findById($id);
        $zeiritsu->update($data);
    }

    public function delete(int $id):void
    {
        $zeiritsu = $this->findById($id);
        $zeiritsu->delete();
    }
}
