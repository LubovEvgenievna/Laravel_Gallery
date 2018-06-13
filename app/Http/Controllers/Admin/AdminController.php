<?php

namespace App\Http\Controllers\Admin;

use App\Models\MailModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        return view('adminpanel.pages.admin', $this->data);
    }
}
