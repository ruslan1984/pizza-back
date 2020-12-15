<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [ 'name', 'img', 'currency','price','count','user_id'];
}
