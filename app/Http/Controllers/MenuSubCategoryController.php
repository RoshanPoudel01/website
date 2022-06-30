<?php

namespace App\Http\Controllers;

use App\Models\MenuCategory;
use App\Models\MenuSubCategory;
use Illuminate\Http\Request;

class MenuSubCategoryController extends Controller
{
    private $model;
    protected $view_path = 'backend.menusubcategory.';

    public function __construct()
    {
        $this->model = new MenuSubCategory();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->get();

        return view($this->view_path.'index',compact('data'));
    }

    public function create(){

        $data = [];
        $data['menu_category'] = MenuCategory::pluck('menu_category','id');

        return view('backend.menusubcategory.create',compact('data'));
    }

    public function store(Request $request){


        try{

            $request->request->add(['created_by' => auth()->user()->id]);
            $this->model->create($request->all());
           session()->flash('success_message','Data Inserted Successfully');
        }
        catch(\Exception $e){
          session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('menusubcategory.index');

    }

    public function show_description($menu_sub_category){

          $menu=[];
        $menu['rows']=MenuCategory::with('subcategory')->get();

        $data = [];

        $data['row'] = $this->model->where('menu_sub_category',$menu_sub_category)->first();
        return view('frontend.subcategorydescription',compact('data','menu'));
    }
//     public function show($id){

//       $data = [];

//       $data['row'] = $this->model->where('id',$id)->first();

//       return view('backend.menusubcategory.show',compact('data'));
//   }

    public function edit($id){


        $data = [];

        $data['menu_category'] = MenuCategory::pluck('menu_category','id');

        $data['row'] = $this->model->where('id',$id)->first();

        return view('backend.menusubcategory.edit',compact('data'));
    }

    public function update(Request $request,$id){

        try{
            $data['row'] = $this->model->where('id',$id)->first();
            $data['row']->update($request->all());
            session()->flash('success_message','Data Updated Successfully');
        }
        catch(\Exception $e){
            session()->flash('error_message','Something Went Wrong!!');
        }

        return redirect()->route('menusubcategory.index');

    }

    public function delete($id){

        $data['row'] = $this->model->where('id',$id)->first();

        $data['row']->delete();

        session()->flash('success_message','Data Deleted Successfully');

        return redirect()->route('menusubcategory.index');

    }
}
