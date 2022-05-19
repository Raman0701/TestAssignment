<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class events extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    protected $hidden = [];
    protected $dates = ['created_at','updated_at'];

    public function images()   
    {
        return $this->hasMany('App\Models\eventImages','event_id');
    }
}
