<?php

namespace App\Http\Controllers\Admin;

use App\Models\MailModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view('adminpanel.pages.admin', $this->data);
    }
}
