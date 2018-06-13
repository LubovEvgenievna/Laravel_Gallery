<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

class WorkController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadworks() {

        return view('adminpanel.pages.works.load', $this->data);
    }

    public function editworks() {
        $this->data['workdata'] = WorkModel::orderBy('created_at','desc')->get();

        return view('adminpanel.pages.works.edit', $this->data);
    }

    public function load(Request $request) {
        $work = $this->makeWork($request->file('file'));

        return $work;
    }

    public function makeWork(UploadedFile $file) {
        $work = new WorkModel();
        $work->save();
        $img_name = $work->id;

        WorkModel::where('id', $work->id)
            ->update(['full_img' => $img_name]);

        return WorkModel::named($img_name.'.jpg')->move($file);
    }
}
