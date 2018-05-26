<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BodyModel;
use App\Models\WorkModel;
use App\Models\WorktypeModel;

class HomeController extends Controller
{
    public function index(){

        $data = [
            'bodydata' => BodyModel::all(),
            'workdata' => WorkModel::all(),
            'worktypedata' => WorktypeModel::all(),
        ];

        return view('index', $data);
    }
}
