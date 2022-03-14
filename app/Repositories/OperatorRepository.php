<?php
namespace App\Repositories;

use App\Models\Operator;
use Illuminate\Database\Eloquent\Collection;

class OperatorRepository
{
    /**
     * @var Operator
     */
    private $operator;

    public function __construct(Operator $operator)
    {
        $this->operator = $operator;
    }
    
    public function findById(int $id):Operator
    {
        return $this->operator->find($id);
    }

    public function getAll():Collection
    {
        return $this->operator->get();
    }

    public function create(array $data):void
    {
        $this->operator->create($data);
    }

    public function update(int $id, array $data):void
    {
        $operator = $this->findById($id);
        $operator->update($data);
    }
    
    public function delete(int $id):void
    {
        $operator = $this->findById($id);
        $operator->delete();
    }
}
