<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parking extends Model 
{
     use HasFactory;

    protected $table = 'parkings';
    public $timestamps = true;

    // use SoftDeletes;

    // protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'available');

}