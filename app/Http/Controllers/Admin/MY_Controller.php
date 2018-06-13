<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MailModel;

class MY_Controller extends Controller
{
    protected $data = [];

    public function __construct() {
        $this->data = [
            'count_mail' => MailModel::where('read', '0')
                ->count(),
        ];
    }
}
