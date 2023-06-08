<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feacture extends Model
{   
    public $timestamps = false;
    protected $hidden = [
        'value'
    ];
    use HasFactory;
    public function properties(){
        return $this->belongsTo('App\Model\Property');
       // $this->belongsTo(Property::class);
    }
}
