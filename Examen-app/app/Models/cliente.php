<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';

    public function dentista(){
        return  $this->hasMany(dentista::class);
    }
}
