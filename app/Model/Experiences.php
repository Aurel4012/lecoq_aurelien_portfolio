<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Experiences extends Model
{
    protected $table = 'experiences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','title_exp','description_exp','url_exp','file_exp','date_exp',//champs modifiable
        ];

}
