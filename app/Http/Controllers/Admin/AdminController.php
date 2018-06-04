<?php

namespace App\Http\Controllers\Admin;

use App\Models\MailModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    protected $data = [];

    public function __construct() {
        $this->data = [
            'count_mail' => MailModel::where('read', '0')
                ->count(),
        ];
    }

    public function index() {
        return view('adminpanel.pages.admin', $this->data);
    }
}
