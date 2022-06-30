<?php

namespace App\Http\Controllers;

use App\Models\Digitalhealthplatform;
use App\Models\MenuCategory;

use Illuminate\Http\Request;

class AppandservicesController extends Controller
{
    public function show_data(){
     
        $infra=[];
        $infra['rows']=Digitalhealthplatform::all();
        return view('frontend.appandservice',compact('infra','menu'));
    }
}
