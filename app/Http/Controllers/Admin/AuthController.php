<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    protected $data = [];

    public function enter() {
        return view('adminpanel.pages.auth.login', $this->data);
    }

    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            'login' => 'required',
            'password' => 'required',
        ],
            [
                'login.required' => 'Необходимо указать Логин',
                'password.required'  => 'Введите Пароль',
            ]);

        $this->data['errors'] = $validator->errors()->all();

        if ($validator->passes()) {

            $login = $request['login'];
            $password = $request['password'];

            if (Auth::attempt(['name' => $login, 'password' => $password, 'admin' => '1'])) {
                return redirect('admin');
            } else {
                $this->data['errors'][0] = 'Пользователь не найден или не является администратором';

                return back()->with($this->data)->withInput(Input::old('login'));
            }
        }

        return back()->with($this->data)->withInput(Input::old('login'));
    }

    public function logout() {
        Auth::logout();

        return redirect('enter');
    }
}
