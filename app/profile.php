<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','fullname','age','photo'];
    public $timestamps = false;
}
