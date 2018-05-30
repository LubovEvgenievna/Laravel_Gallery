<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\BodyModel;
use App\Models\WorkModel;
use App\Models\WorktypeModel;
use Illuminate\Support\Facades\Validator;

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

    public function contact(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ],
        [
            'name.required' => 'Необходимо указать Имя',
            'email.required'  => 'Необходимо указать E-mail',
            'email.email'  => 'Некорректно указан E-mail',
            'message.required'  => 'Необходимо написать Сообщение',
        ]);

        if ($validator->passes()) {


            return response()->json(['success'=>'Сообщение отправлено!']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
