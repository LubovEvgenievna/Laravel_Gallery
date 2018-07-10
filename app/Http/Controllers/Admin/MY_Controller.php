<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MailModel;
use Illuminate\Support\Facades\Auth;

class MY_Controller extends Controller
{
    protected $data = [];

    public function __construct() {
        $this->middleware('checkadmin');
        $this->middleware('checkrole');

        $this->data = [
            'count_mail' => MailModel::where('read', '0')
                ->count(),
        ];
    }
}
