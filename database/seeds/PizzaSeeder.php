<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pizzas = [
            [
                'name' => 'Margherita',
                'img'=> '/img/1.jpg',
                'price' => '300',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Quattro Stagioni',
                'img'=> '/img/2.jpg',
                'price' => '200',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Carbonara',
                'img'=> '/img/3.jpg',
                'price' => '250',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],


            [
                'name' => 'Frutti di Mare',
                'img'=> '/img/4.jpg',
                'price' => '30',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Quattro Formaggi',
                'img'=> '/img/5.jpg',
                'price' => '20',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Crudo',
                'img'=> '/img/6.jpg',
                'price' => '25',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Napoletana',
                'img'=> '/img/7.jpg',
                'price' => '100',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Pugliese',
                'img'=> '/img/8.jpg',
                'price' => '150',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Montanara',
                'img'=> '/img/9.jpg',
                'price' => '220',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ],
            [
                'name' => 'Emiliana',
                'img'=> '/img/10.jpg',
                'price' => '210',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem consectetur cum dolore quis perferendis! Reiciendis illo eos, incidunt optio cum itaque non commodi, ipsam vel quisquam error! Vel, officia!',
                'deletedAt' => null
            ]
        ];
        foreach ($pizzas as $item) {
            DB::table('pizzas')->insert($item);
        }

    }
}
