<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WorktypeModel;
use Illuminate\Support\Facades\Validator;

class CategoryController extends AdminController
{
    public function __construct()
    {
        parent::__construct();

    }

    public function index() {
        $this->data['worktypedata'] = WorktypeModel::orderBy('sort_id')->get();

        return view('adminpanel.pages.category.index', $this->data);
    }

    public function save(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sort_id' => 'required',
        ],
        [
            'title.required' => 'Необходимо указать Название',
            'sort_id.required'  => 'Необходимо указать Порядковый номер',
        ]);

        if ($validator->passes()) {

            $worktype = WorktypeModel::find($request['id']);
            $worktype->title = $request['title'];
            $worktype->sort_id = $request['sort_id'];
            $worktype->save();

            return response()->json($request);

        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }

    public function delete($id) {
        $delete = WorktypeModel::where('id', $id)
            ->delete();

        return $delete;
    }

    public function newCategory(Request $request) {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'sort_id' => 'required',
        ],
            [
                'title.required' => 'Необходимо указать Название',
                'sort_id.required'  => 'Необходимо указать Порядковый номер',
            ]);

        if ($validator->passes()) {

            $worktype = new WorktypeModel;
            $worktype->title = $request['title'];
            $worktype->sort_id = $request['sort_id'];
            $worktype->save();

            return redirect()->back();

        }

        return response()->json(['error'=>$validator->errors()->all()]);
    }
}
