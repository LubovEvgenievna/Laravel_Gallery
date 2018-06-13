<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;

class WorkController extends AdminController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadworks() {
        return view('adminpanel.pages.works.load', $this->data);
    }

    public function editworks() {
        return view('adminpanel.pages.works.edit', $this->data);
    }

    public function load(Request $request) {
        $work = $this->makeWork($request->file('file'));

        return $work;
    }

    public function makeWork(UploadedFile $file) {
        return WorkModel::named($file->getClientOriginalName())->move($file);
    }
}
