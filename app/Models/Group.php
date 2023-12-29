<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    use HasFactory;

    public $guarded=[];

    public function service_group()
    {
        return $this->belongsToMany(Service::class,'service_group')->withPivot('quantity');
    }
}
