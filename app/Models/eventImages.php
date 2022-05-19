<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventImages extends Model
{
    use HasFactory;

    protected $fillable = ['event_id','image'];

    protected $hidden = [];
    protected $dates = ['created_at','updated_at'];
}
