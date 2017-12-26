<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    protected $table = 'mails';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_user','from_mails','name_mails','last_name_mails','subject_mails','message_mails',//champs modifiable
    ];
}
