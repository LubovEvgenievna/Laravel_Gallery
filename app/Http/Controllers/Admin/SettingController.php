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
        $description = $this->sanitize($request['description']);
        $email = $this->sanitize($request['email']);
        $phone = $this->sanitize($request['phone']);
        $address = $this->sanitize($request['address']);
        $worktime = $this->sanitize($request['worktime']);
        $instagram = $this->sanitize($request['instagram']);
        $vk = $this->sanitize($request['vk']);

        $body = BodyModel::find($request['id']);
        $body->description = $description;
        $body->email = $email;
        $body->phone = $phone;
        $body->address = $address;
        $body->worktime = $worktime;
        $body->instagram = $instagram;
        $body->vk = $vk;
        $body->save();

        return redirect('setting');
    }
}
