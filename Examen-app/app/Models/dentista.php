<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dentista extends Model
{
    protected $table = 'dentista';

    public function cliente(){
        return  $this->hasMany(cliente::class);
    }
}
