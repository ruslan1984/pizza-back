<?
namespace App\Services\Pizza\Repositories;

use App\Model\Pizza;
interface IPizzaRepository
{
    public function list():Array;
    public function show(Pizza $pizza):Array;
}
