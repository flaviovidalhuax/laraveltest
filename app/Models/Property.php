<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'name',
        'img',
        'price',
        'rooms',
        'bathrooms',
        'operation',
        'type',
        'user_id'
    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    public function feature(){
        return $this->belongsToMany('App\Models\Feature');     
    }
}
