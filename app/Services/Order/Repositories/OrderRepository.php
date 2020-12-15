<?php
namespace App\Services\Order\Repositories;
use App\Model\Order;

class OrderRepository implements IOrderRepository
{
    public function create(Array $data){
        $userId = $data['userId'];
        $list = $data['list'];
        try{
            foreach($list as $item){
                $newData = [
                   'name' => $item['name'],
                   'img' => $item['img'],
                   'currency' => $item['currency'],
                   'price' => $item['price'],
                   'count' => $item['count'],
                   'user_id' => $userId
                ];
                Order::create($newData);
            }
        }catch (Exception $e){
            return false;
        }
        return true;
    }
    public function orders(int $user_id, $page = 1, $limit = 8 ):Array{
        $offset = ($page-1)*$limit;
        $orders  = Order::where('user_id', $user_id)
            ->offset($offset)
            ->limit($limit)
            ->orderBy('created_at', 'desc')
            ->get()->toArray();
        $count = Order::where('user_id', $user_id)->count();
        $pagesCount = ceil($count / $limit);
        $data=[];
        foreach ($orders as $item){
            $data[]=[
                'name'=> $item['name'],
                'img'=> $item['img'],
                'count'=> $item['count'],
                'price'=> $item['price'],
                'currency'=> $item['currency'],
                'orderDate'=>$item['created_at']
            ];
        }
        return [
            'count' => $count,
            'pagesCount'=>$pagesCount,
            'data' => $data
        ];
    }
}
