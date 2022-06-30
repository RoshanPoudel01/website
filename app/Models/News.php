<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'activity_name','description','status','created_by',
    ];
    public function createdBy(){
        return $this->belongsTo(User::class,'created_by');
    }
    use HasFactory;
}
