<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{  protected $fillable = [
    'menu_category','description'
];

public function subcategory(){
    return $this->hasMany(MenuSubCategory::class,'menu_category_id');
}
    use HasFactory;
}
