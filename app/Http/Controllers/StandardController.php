<?php

namespace App\Http\Controllers;

use App\Models\Standard;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class StandardController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Standard();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.standardd.index',compact('data'));
    }

    public function create(){

        return  view('backend.standardd.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'standardd_name' => 'required',
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
        return redirect()->route('standardd.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.standardd.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.standardd.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'standardd_name' => 'required',
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

        return redirect()->route('standardd.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('standardd.index');

    }
    public function show_data(){
        $menu=[];
        $menu['rows']=MenuCategory::with('subcategory')->get();
        $stan=[];
        $stan['rows']=Standard::all();
        return view('frontend.standard',compact('stan','menu'));
    }
}
