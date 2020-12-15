<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [ 'id', 'name', 'img', 'price', 'description'];
    protected $guarded = ['_method','_token'];
    protected $hidden = ['created_at', 'updated_at', 'deletedAt'];
}
