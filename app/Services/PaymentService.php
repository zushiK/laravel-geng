<?php
namespace App\Services;

use App\Repositories\PaymentRepository;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Collection;

class PaymentService
{
    /**
     * @var PaymentRepository
     */
    private $payment_repository;

    public function __construct(PaymentRepository $payment_repository)
    {
        $this->payment_repository = $payment_repository;
    }

    /**
     * idから一つ取得
     *
     * @param integer $id
     * @return Payment
     */
    public function findById(int $id):Payment
    {
        $payment = $this->payment_repository->findById($id);
        return $payment;
    }

    /**
     * 全件取得
     *
     * @return Payment
     */
    public function getAll():Collection
    {
        return $this->payment_repository->getAll();
    }

    /**
     * 更新
     *
     * @param integer $id
     * @param array $data
     * @return void
     */
    public function update(int $id, array $data):void
    {
        $this->payment_repository->update($id, $data);
    }
}
