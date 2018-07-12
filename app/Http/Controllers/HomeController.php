<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\BodyModel;
use App\Models\WorkModel;
use App\Models\WorktypeModel;
use Illuminate\Support\Facades\Validator;
use App\Models\MailModel;

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

            $name = $this->sanitize($request['name']);
            $email = $this->sanitize($request['email']);
            $message = $this->sanitize($request['message']);

            $mail = new MailModel();
            $mail->name = $name;
            $mail->email = $email;
            $mail->message = $message;
            $mail->read = 0;
            $mail->answer = 0;
            $mail->created_at = Carbon::now();
            $mail->updated_at = Carbon::now();
            $mail->save();

            return response()->json(['success'=>'Сообщение отправлено!']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
