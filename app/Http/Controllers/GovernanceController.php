<?php

namespace App\Http\Controllers;


use App\Models\Governance;
use App\Models\MenuCategory;


use Exception;
use Illuminate\Http\Request;

class GovernanceController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new Governance();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return  view('backend.governance.index',compact('data'));
    }

    public function create(){

        return  view('backend.governance.create');
    }

    public function store(Request $request){

        //validation
        // $request->validate([
        //     'governance_name' => 'required',
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
        return redirect()->route('governance.index');
}

    public function show($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.governance.show',compact('data'));
    }

    public function edit($id){

        $data = [];

        $data['row'] = $this->model->findOrFail($id);

        return  view('backend.governance.edit',compact('data'));
    }

    public function update(Request $request,$id){

        //validation
        // $request->validate([
        //     'governance_name' => 'required',
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

        return redirect()->route('governance.index');

    }

    public function delete($id){

        $data['row'] = $this->model->find($id);

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('governance.index');

    }
public function show_tables(){
    $menu=[];
$menu['rows']=MenuCategory::with('subcategory')->get();
    $gov=[];
    $gov['rows']=Governance::all();

    return view('frontend.governance',compact('gov','menu'));
}

}
