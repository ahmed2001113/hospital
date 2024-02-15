<?php

namespace App\Models;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Patient extends Authenticatable
{
    use HasFactory;
    public $fillable= ['name','Address','email','Password','Date_Birth','Phone','Gender','Blood_Group'];
}
