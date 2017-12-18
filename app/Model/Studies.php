<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Studies extends Model
{
    protected $table = 'studies';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','description_stud','certif_stud','org_stud','begin_date_stud','end_date_stud',//champs modifiable
    ];
}
