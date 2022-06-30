<?php

namespace App\Http\Controllers;

use App\Models\Digitalhealthmilestone;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class DigitalhealthmilestoneController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Digitalhealthmilestone();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.digitalhealthmilestone.index',compact('data'));
    }

    public function create(){

        return  view('backend.digitalhealthmilestone.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'digitalhealthmilestone_name' => 'required',
        //     'description' => 'required',
        // ]);

        // try{
            $request->request->add(['created_by' => auth()->user()->id]);
                $this->model->create($request->all());
            //     session()->flash('success_message','Data Inserted Successfully');
            // }
            // catch(\Exception $e){
            //     session()->flash('error_message','Something Went Wrong!!');
            // }
        return redirect()->route('digitalhealthmilestone.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalhealthmilestone.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.digitalhealthmilestone.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'digitalhealthmilestone_name' => 'required',
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

        return redirect()->route('digitalhealthmilestone.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('digitalhealthmilestone.index');

    }
    public function show_data(){
        $menu=[];
        $menu['rows']=MenuCategory::with('subcategory')->get();
        $dhm=[];
        $dhm['rows']=Digitalhealthmilestone::all();
        return view('frontend.digitalmilestone',compact('dhm','menu'));
    }

}
