<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $table = 'job';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','titre_job','description_job','etbt_job','begin_date_job','end_date_job',//champs modifiable
    ];
}
