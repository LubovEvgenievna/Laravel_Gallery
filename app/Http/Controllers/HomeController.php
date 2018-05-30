<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
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

    public function contact(ContactRequest $request) {

        return $request;
    }
}
