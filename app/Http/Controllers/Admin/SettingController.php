<?php

namespace App\Http\Controllers\Admin;

use App\Models\BodyModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function setting() {
        $this->data['bodydata'] = BodyModel::all();

        return view('adminpanel.pages.setting.setting', $this->data);
    }

    public function savesetting(Request $request) {
        $body = BodyModel::find($request['id']);
        $body->description = $request['description'];
        $body->email = $request['email'];
        $body->phone = $request['phone'];
        $body->address = $request['address'];
        $body->worktime = $request['worktime'];
        $body->instagram = $request['instagram'];
        $body->vk = $request['vk'];
        $body->save();

        return redirect('setting');
    }
}
