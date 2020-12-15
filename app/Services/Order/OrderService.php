<?php

namespace App\Services\Order;
use App\Services\Order\Repositories\OrderRepository;

class OrderService
{
    private $orderRepository;
    public function __construct(OrderRepository $orderRepository) {
        $this->orderRepository = $orderRepository;
    }
    public function create(Array $data)
    {
        return $this->orderRepository->create($data);
    }
    public function orders(int $user_id, int $page):Array
    {
        return $this->orderRepository->orders($user_id, $page);
    }


}
