<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MailModel extends Model
{
    protected $table = "mail";
    protected $dates = ['deleted_at'];

    public $timestamps = true;

    use SoftDeletes;

    public function mymailes()
    {
        return $this->hasMany('App\Models\MymailModel', 'mail_id', 'id');
    }
}
