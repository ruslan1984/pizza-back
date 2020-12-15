<?php
namespace App\Services\Pizza;

use App\Model\Pizza;
use App\Services\Pizza\Repositories\PizzaRepository;

class PizzaService
{
    private $pizzaRepository;
    public function __construct(PizzaRepository $pizzaRepository) {
        $this->pizzaRepository = $pizzaRepository;
    }
    public function list($page = 1, $limit = 8 )
    {
        return $this->pizzaRepository->list($page, $limit);
    }
    public function show(Pizza $pizza)
    {
        return $this->pizzaRepository->show($pizza);
    }


}
