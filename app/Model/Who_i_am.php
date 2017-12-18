<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Who_i_am extends Model
{
    protected $table = 'who_i_am';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','mypresentation',//champs modifiable
    ];
}
