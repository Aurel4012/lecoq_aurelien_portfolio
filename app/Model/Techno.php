<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Techno extends Model
{
    protected $table = 'techno';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','lab_tech','logo_tech',//champs modifiable
        ];
}
