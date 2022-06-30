<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuSubCategory extends Model
{
    protected $fillable = [
        'menu_category_id','menu_sub_category','status','description'
    ];
    public function category(){
        return $this->belongsTo(MenuCategory::class,'menu_category_id');
    }
    use HasFactory;
}
