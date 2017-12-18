<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class who_i_am extends Model
{
    protected $table = 'who_i_am';
    protected $primaryKey = 'id';
    protected $fillable = [
        'mypresentation',//champs modifiable
    ];
}
