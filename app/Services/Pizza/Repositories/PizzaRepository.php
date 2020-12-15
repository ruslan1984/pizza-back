<?php
namespace App\Services\Pizza\Repositories;
use App\Model\Pizza;
use App\Services\Cource\CourceService;

class PizzaRepository implements IPizzaRepository
{

    protected $courceService;
    public function __construct(
        CourceService $courceService
    ) {
        $this->courceService = $courceService;
    }

    public function list( $page = 1, $limit = 8 ):Array
    {
        $offset = ($page-1)*$limit;
        $cource = $this->courceService->cources();
        $data =  Pizza::where('deletedAt', NULL)
        ->select('id', 'name', 'img', 'price')
        ->offset($offset)->limit($limit)
        ->get()->toArray();
        foreach ($data as &$pizza){
            foreach ($cource as $code => $item){
                $pizza['currency'] = "USD";
                $pizza['prices'][$code] = [
                    'currency' => $code,
                    'cource' => $item,
                    'price'=> round($pizza['price']*$item),
                ];
            }
        }
        $count = Pizza::where('deletedAt', NULL)->count();
        $pagesCount = ceil($count / $limit);
        return [
            'count' => $count,
            'pagesCount' => $pagesCount,
            'data' => $data
        ];
    }
    public function show(Pizza $pizza):Array
    {
        $data = $pizza->toArray();
        $data['currency']="USD";
        $cource = $this->courceService->cources();
        foreach ($cource as $key => $item){
            $data['prices'][$key] = [
                'currency' => $key,
                'cource' => $item,
                'price'=> round($data['price']*$item),
            ];
        }
        return $data;
    }

}
