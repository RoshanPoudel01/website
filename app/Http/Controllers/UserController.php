<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $view_path = 'backend.user.';

    public function __construct()
    {
        $this->model = new User();

    }

    public function index(){

        $data = [];

        $data['rows'] = $this->model->latest()->get();

        return view($this->view_path.'index',compact('data'));
    }
    public function show($id){

        $data = [];

        $data['row'] = $this->model->where('id',$id)->first();

        return view('backend.user.show',compact('data'));
    }
}
