<?
namespace App\Services\Order\Repositories;

interface IOrderRepository
{
    public function create(Array $data);
    public function orders(int $user_id):Array;
}
