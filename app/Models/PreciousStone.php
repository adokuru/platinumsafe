<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PreciousStone extends Model
{
    //

        //
        protected $fillable = [
            'user_id', 'depositor', 'storageitem', 'weight', 'quantity', 'status'
        ];
}
