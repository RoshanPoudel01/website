<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\News;
use App\Models\MenuCategory;

use Exception;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Activity();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.activity.index',compact('data'));
    }

    public function create(){

        return  view('backend.activity.create');
    }

    public function store(Request $request){




    if($request->news == null){

        try{
            $request->request->add(['created_by' => auth()->user()->id]);
                $this->model->create($request->all());
                session()->flash('success_message','Data Inserted Successfully');
            }
            catch(\Exception $e){
                session()->flash('error_message','Something Went Wrong!!');
            }
        return redirect()->route('activity.index');

    }
    else if($request->news == 1){

        try{
        $request->request->add(['created_by' => auth()->user()->id]);
                News::create($request->all());
                session()->flash('success_message','Data Inserted Successfully');
            }
            catch(\Exception $e){
                session()->flash('error_message','Something Went Wrong!!');
            }
        return redirect()->route('activity.index');
    }
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.activity.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.activity.edit',compact('data'));
    }

    public function update(Request $request,$id){



        try{
            $data['row'] = $this->model->find($id);
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('activity.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('activity.index');

    }
    // public function view_details($id){
    //     $activity_details = [];

    //     $activity_details = Activity::where('id',$id)->first();
    //     return view('frontend.activitydescription',compact('activity_details'));

    // }

}
