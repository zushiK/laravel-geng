<?php
namespace App\Repositories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Collection;

class PaymentRepository
{
    /**
     * @var Payment
     */
    private $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function findById(int $id):Payment
    {
        return $this->payment->find($id);
    }

    public function getAll():Collection
    {
        return $this->payment->get();
    }

    public function update(int $id, array $data):void
    {
        $payment = $this->findById($id);
        $payment->update($data);
    }
}
