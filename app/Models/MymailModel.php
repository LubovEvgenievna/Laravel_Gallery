<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MymailModel extends Model
{
    protected $table = "mymail";
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    use SoftDeletes;

    public function mail() {
        return $this->belongsTo('App\Models\MailModel', 'mail_id', 'id');
    }
}
