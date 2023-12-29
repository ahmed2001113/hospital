<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
 
    protected $fillable = ['name','name_en','description'];
    use HasFactory;


    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
