<?php

namespace App\Http\Controllers;

use App\Models\Digitalmatrix;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class DigitalmatrixController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Digitalmatrix();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.digitalmatrix.index',compact('data'));
    }

    public function create(){

        return  view('backend.digitalmatrix.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'digitalmatrix_name' => 'required',
        //     'description' => 'required',
        // ]);

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
                $this->model->create($request->all());
                session()->flash('success_message','Data Inserted Successfully');
            }
            catch(\Exception $e){
                session()->flash('error_message','Something Went Wrong!!');
            }
        return redirect()->route('digitalmatrix.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalmatrix.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalmatrix.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'digitalmatrix_name' => 'required',
        //     'description' => 'required',
        // ]);

        try{
            $data['row'] = $this->model->find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('digitalmatrix.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('digitalmatrix.index');

    }
public function show_data(){
    $menu=[];
    $menu['rows']=MenuCategory::with('subcategory')->get();
    $digital=[];
    $digital['rows']=Digitalmatrix::all();

    return view('frontend.digitalmatrix',compact('digital','menu'));
}
}
