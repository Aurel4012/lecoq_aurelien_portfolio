<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Social_network extends Model
{
    protected $table = 'social_network';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','link_sn','logo_sn','name_sn',//champs modifiable
        ];
}
