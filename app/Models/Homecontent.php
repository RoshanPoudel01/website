<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homecontent extends Model
{
    protected $fillable=['dataleft','dataright','datamain'];

    use HasFactory;
}
