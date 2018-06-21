<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkModel;
use App\Models\WorktypeModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class WorkController extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function categoryload() {
        $this->data['categorydata'] = WorktypeModel::all();

        return view('adminpanel.pages.works.category',$this->data);
    }

    public function loadworks($id) {
        $this->data['categoryid'] = $id;

        return view('adminpanel.pages.works.load', $this->data);
    }

    public function editworks() {
        $this->data['workdata'] = WorkModel::join('worktype', 'work.worktype_sort_id', 'worktype.id')
            ->select('work.*', 'worktype.title')
            ->orderBy('work.created_at','desc')
            ->get();



        $worktypedata = WorktypeModel::get();
        $this->data['worktype']= [];
        foreach($worktypedata as $value) {
                $this->data['worktype'][$value['id']] = $value['title'];
        }

        return view('adminpanel.pages.works.edit', $this->data);
    }

    public function load($id, Request $request) {
        $work = $this->makeWork($id, $request->file('file'));

        return $work;
    }

    public function makeWork($id, UploadedFile $file) {
        $work = new WorkModel();
        $work->worktype_sort_id = $id;
        $work->save();
        $img_name = $work->id;

        WorkModel::where('id', $work->id)
            ->update(['full_img' => $img_name]);

        return WorkModel::named($img_name.'.jpg')->move($file);
    }

    public function edit (Request $request) {
        $work = WorkModel::find($request['id']);
        $work->worktitle = $request['worktitle'];
        $work->worktype_sort_id = $request['title'];
        $work->description = $request['description'];
        $work->save();

        $result = WorktypeModel::where('id',$request['title'])
            ->get();
        foreach($result as $value) {
            $request['category'] = $value['title'];
        }


        return response()->json($request);
    }

    public function delete ($id) {
        Storage::disk('public')->delete($id.'jpg');

        WorkModel::where('id', $id)
            ->delete();

        return redirect('editworks');
    }
}
